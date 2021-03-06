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

namespace PGI\Impact\FOCharity\Services\Listeners;

use Exception;
use PGI\Impact\PGCharity\Services\Handlers\CharityHandler;
use PGI\Impact\PGCharity\Services\Repositories\GiftRepository;
use PGI\Impact\PGFramework\Services\Handlers\RequirementHandler;
use PGI\Impact\PGLog\Interfaces\LoggerInterface;
use PGI\Impact\PGShop\Components\Events\LocalOrder as LocalOrderEventComponent;
use PGI\Impact\PGShop\Interfaces\Entities\OrderEntityInterface;

/**
 * CharityGiftFinalizationListener
 * @package FOCharity\Services\Listeners
 */
class CharityGiftFinalizationListener
{
    /** @var CharityHandler */
    private $charityHandler;

    /** @var GiftRepository */
    private $giftRepository;

    /** @var LoggerInterface */
    private $logger;

    public function __construct(
        CharityHandler $charityHandler,
        GiftRepository $giftRepository,
        LoggerInterface $logger
    ) {
        $this->charityHandler = $charityHandler;
        $this->giftRepository = $giftRepository;
        $this->logger = $logger;
    }

    /**
     * @params LocalOrderEventComponent $event
     * @throws Exception
     */
    public function listen(LocalOrderEventComponent $event)
    {
        try {
            /** @var OrderEntityInterface $order */
            $order = $event->getOrder();

            if ($order === null) {
                throw new Exception("Order is required to finalize charity gift.");
            } elseif (!$order instanceof OrderEntityInterface) {
                throw new Exception("Order must be an instance of OrderEntityInterface.");
            }

            if ($this->giftRepository->findByOrderPrimary($order->id()) === null) {
                $this->charityHandler->finalizeGift($order);
            } else {
                $this->logger->debug("Gift already exist for order #{$order->id()}.");
            }
        } catch (Exception $exception) {
            $text = "An error occurred while finalizing the charity gift : " . $exception->getMessage();
            $this->logger->error($text, $exception);
        }
    }
}
