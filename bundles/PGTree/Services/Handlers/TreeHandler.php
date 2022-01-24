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
 * @version   1.0.0
 *
 */

namespace PGI\Impact\PGTree\Services\Handlers;

use Exception;
use PGI\Impact\PGLog\Interfaces\LoggerInterface;
use PGI\Impact\PGModule\Services\Settings;
use PGI\Impact\PGShop\Interfaces\Entities\ShopableItemEntityInterface;

/**
 * Class TreeHandler
 * @package PGTree\Services\Handlers
 */
class TreeHandler
{
    /** @var TreeCartHandler */
    private $treeCartHandler;

    /** @var Settings */
    private $settings;

    /** @var LoggerInterface */
    private $logger;

    public function __construct(
        TreeCartHandler $treeCartHandler,
        Settings $settings,
        LoggerInterface $logger
    ) {
        $this->treeCartHandler = $treeCartHandler;
        $this->settings = $settings;
        $this->logger = $logger;
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function hasContribution()
    {
        return $this->treeCartHandler->hasContribution();
    }

    /**
     * @return ShopableItemEntityInterface
     * @throws Exception
     */
    public function getContribution()
    {
        return $this->treeCartHandler->getContribution();
    }

    /**
     * @param float $amount
     * @return bool
     * @throws Exception
     */
    public function addContribution($amount)
    {
        return $this->treeCartHandler->addContribution($amount);
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function removeContribution()
    {
        return $this->treeCartHandler->removeContribution();
    }


}
