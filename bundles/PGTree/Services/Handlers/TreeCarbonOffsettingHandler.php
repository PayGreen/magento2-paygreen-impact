<?php
/**
 * 2014 - 2022 Watt Is It
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License X11
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/mit-license.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@paygreen.fr so we can send you a copy immediately.
 *
 * @author    PayGreen <contact@paygreen.fr>
 * @copyright 2014 - 2022 Watt Is It
 * @license   https://opensource.org/licenses/mit-license.php MIT License X11
 * @version   1.0.1
 *
 */

namespace PGI\Impact\PGTree\Services\Handlers;

use PGI\Impact\APITree\Components\Replies\CarbonFootprint as CarbonFootprintReplyComponent;
use PGI\Impact\APITree\Services\Facades\ApiFacade;
use PGI\Impact\PGClient\Components\Response as ResponseComponent;
use PGI\Impact\PGClient\Exceptions\Response as ResponseException;
use PGI\Impact\PGFramework\Services\Handlers\RequirementHandler;
use PGI\Impact\PGModule\Services\Broadcaster;
use PGI\Impact\PGLog\Interfaces\LoggerInterface;
use PGI\Impact\PGShop\Interfaces\Entities\CarrierEntityInterface;
use PGI\Impact\PGShop\Interfaces\Entities\CustomerEntityInterface;
use PGI\Impact\PGShop\Interfaces\Entities\OrderEntityInterface;
use PGI\Impact\PGShop\Interfaces\ShopableInterface;
use PGI\Impact\PGTree\Components\CarbonOffsettingComputing as CarbonOffsettingComputingComponent;
use PGI\Impact\PGTree\Components\Events\CarbonOffsettingComputing as CarbonOffsettingComputingEventComponent;
use PGI\Impact\PGTree\Services\Managers\CarbonDataManager;
use Exception;

/**
 * Class TreeCarbonOffsettingHandler
 * @package PGTree\Services\Handlers
 */
class TreeCarbonOffsettingHandler
{
    /** @var ApiFacade */
    private $treeAPIFacade;

    /** @var TreeFootprintIdHandler */
    private $footprintIdHandler;

    /** @var Broadcaster */
    private $broadcaster;

    /** @var RequirementHandler */
    private $requirementHandler;

    /** @var CarbonDataManager */
    private $carbonDataManager;

    /** @var LoggerInterface */
    private $logger;

    public function __construct(
        ApiFacade $treeAPIFacade,
        TreeFootprintIdHandler $footprintIdHandler,
        Broadcaster $broadcaster,
        RequirementHandler $requirementHandler,
        CarbonDataManager $carbonDataManager,
        LoggerInterface $logger
    ) {
        $this->treeAPIFacade = $treeAPIFacade;
        $this->footprintIdHandler = $footprintIdHandler;
        $this->broadcaster = $broadcaster;
        $this->requirementHandler = $requirementHandler;
        $this->carbonDataManager = $carbonDataManager;
        $this->logger = $logger;
    }

    /**
     * @param ShopableInterface|null $shopable
     * @param CustomerEntityInterface|null $customer
     * @param CarrierEntityInterface|null $carrier
     * @return CarbonOffsettingComputingComponent
     * @throws ResponseException
     * @throws Exception
     */
    public function computeCarbonOffsetting(
        ShopableInterface $shopable = null,
        CustomerEntityInterface $customer = null,
        CarrierEntityInterface $carrier = null
    ) {
        if (!$this->requirementHandler->isFulfilled('tree_activation')) {
            throw new Exception("Compute carbon offsetting require 'tree_activation'.");
        }

        $key = $this->footprintIdHandler->getFootprintId();

        $carbonOffsettingComputing = new CarbonOffsettingComputingComponent($key);

        $event = new CarbonOffsettingComputingEventComponent(
            $carbonOffsettingComputing,
            $shopable,
            $customer,
            $carrier
        );

        $this->broadcaster->fire($event);

        return $carbonOffsettingComputing;
    }

    /**
     * @param int $userContributionAmount
     * @throws ResponseException
     * @throws Exception
     */
    public function closeCarbonOffsetting($userContributionAmount)
    {
        if (!$this->requirementHandler->isFulfilled('tree_activation')) {
            throw new Exception("Close carbon offsetting require 'tree_activation'.");
        }

        $this->logger->debug('Create carbon footprint purchase.');

        $key = $this->footprintIdHandler->getFootprintId();

        if ($userContributionAmount > 0) {
            $response = $this->treeAPIFacade->createCarbonFootprintUserContribution($key, $userContributionAmount);
        } else {
            $response = $this->treeAPIFacade->createCarbonFootprintPurchase($key);
        }

        if ($response->getHTTPCode() === 200) {
            $this->footprintIdHandler->resetFootprintId();
        }
    }

    /**
     * @return CarbonFootprintReplyComponent
     * @throws ResponseException
     * @throws Exception
     */
    public function getCarbonOffsetting()
    {
        if (!$this->requirementHandler->isFulfilled('tree_activation')) {
            throw new Exception("Get carbon offsetting require 'tree_activation'.");
        }

        $this->logger->debug('Retrieve carbon footprint.');

        $key = $this->footprintIdHandler->getFootprintId();

        return $this->treeAPIFacade->getCarbonFootprintEstimation($key, true);
    }

    /**
     * @param string $user_id
     * @return ResponseComponent
     * @throws ResponseException
     * @throws Exception
     */
    public function getFavoriteProject($user_id)
    {
        if (!$this->requirementHandler->isFulfilled('tree_activation')) {
            throw new Exception("Get favorite project require 'tree_activation'.");
        }

        $this->logger->debug('Get favorite climate project.');

        return $this->treeAPIFacade->getFavoriteProject($user_id);
    }

    /**
     * @param OrderEntityInterface $order
     * @param CarbonFootprintReplyComponent $carbonFootprint
     * @throws Exception
     */
    public function saveCarbonData(
        OrderEntityInterface $order,
        CarbonFootprintReplyComponent $carbonFootprint
    ) {
        $carbonDataEntity = $this->carbonDataManager->create(
            $carbonFootprint->getFingerprint(),
            $carbonFootprint->getEstimatedCarbon(),
            $carbonFootprint->getEstimatedPrice()
        );

        $carbonDataEntity
            ->setOrderId($order->id())
            ->setUserId($order->getCustomerId())
        ;

        $this->carbonDataManager->save($carbonDataEntity);
    }
}
