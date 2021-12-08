<?php
/**
 * 2014 - 2021 Watt Is It
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
 * @copyright 2014 - 2021 Watt Is It
 * @license   https://opensource.org/licenses/mit-license.php MIT License X11
 * @version   1.0.0
 *
 */

namespace PGI\Impact\FOTree\Services\Controllers;

use PGI\Impact\APITree\Components\Replies\CarbonFootprint as CarbonFootprintReplyComponent;
use PGI\Impact\BOModule\Foundations\Controllers\AbstractBackofficeController;
use PGI\Impact\FOTree\Services\Handlers\CarbonRounderHandler;
use PGI\Impact\PGServer\Components\Responses\HTTP as HTTPResponseComponent;
use PGI\Impact\PGShop\Services\Managers\CartManager;
use PGI\Impact\PGShop\Services\Managers\CustomerManager;
use PGI\Impact\PGTree\Services\Handlers\TreeCarbonOffsettingHandler;
use PGI\Impact\PGView\Services\Handlers\ViewHandler;
use Exception;

/**
 * Class ClimateBotController
 * @package FOTree\Services\Controllers
 */
class ClimateBotController extends AbstractBackofficeController
{
    /** @var CustomerManager */
    private $customerManager;

    /** @var CartManager */
    private $cartManager;

    /** @var ViewHandler */
    private $viewHandler;

    /** @var TreeCarbonOffsettingHandler */
    private $carbonOffsettingHandler;

    /** @var CarbonRounderHandler */
    private $carbonRounderHandler;

    public function __construct(
        CustomerManager $customerManager,
        CartManager $cartManager,
        ViewHandler $viewHandler,
        TreeCarbonOffsettingHandler $carbonOffsettingHandler,
        CarbonRounderHandler $carbonRounderHandler
    ) {
        $this->customerManager = $customerManager;
        $this->cartManager = $cartManager;
        $this->viewHandler = $viewHandler;
        $this->carbonOffsettingHandler = $carbonOffsettingHandler;
        $this->carbonRounderHandler = $carbonRounderHandler;
    }

    /**
     * @return HTTPResponseComponent
     * @throws Exception
     */
    public function displayAction()
    {
        $this->carbonOffsettingHandler->computeCarbonOffsetting(
            $this->cartManager->getCurrent(),
            $this->customerManager->getCurrent()
        );

        /** @var CarbonFootprintReplyComponent $carbonFootprint */
        $carbonFootprint = $this->carbonOffsettingHandler->getCarbonOffsetting();

        $detailsUrl = $this->getSettings()->get('tree_details_url');
        $isDetailsActivated = false;
        if($detailsUrl !== "") {
            $isDetailsActivated = true;
        }

        $templateContent = $this->viewHandler->renderTemplate('tree-bot', array(
            'color' => $this->getSettings()->get("tree_bot_color"),
            'position' => $this->getSettings()->get("tree_bot_side"),
            'corner' => $this->getSettings()->get("tree_bot_corner"),
            'isDetailsActivated' => $isDetailsActivated,
            'detailsUrl' => $detailsUrl,
            'carbonEmittedTotal' => $this->carbonRounderHandler->roundNumber(
                $carbonFootprint->getEstimatedCarbon()
            ),
            'carbonEmittedFromDigital' => $this->carbonRounderHandler->roundNumber(
                $carbonFootprint->getCarbonEmittedFromDigital()
            ),
            'carbonEmittedFromTransportation' => $this->carbonRounderHandler->roundNumber(
                $carbonFootprint->getCarbonEmittedFromTransportation()
            ),
            'carbonEmittedFromProduct' => $this->carbonRounderHandler->roundNumber(
                $carbonFootprint->getCarbonEmittedFromProduct()
            ),
            'isTreeTestModeActivated' => $this->getSettings()->get('tree_test_mode')
        ));

        $response = new HTTPResponseComponent($this->getRequest());
        $response->setContent($templateContent);

        return  $response;
    }
}