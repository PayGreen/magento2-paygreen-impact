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

namespace PGI\Impact\PGGreen\Services\Upgrades;

use Exception;
use PGI\Impact\PGGreen\Interfaces\AuthenticationHandlerInterface;
use PGI\Impact\PGModule\Components\UpgradeStage as UpgradeComponent;
use PGI\Impact\PGModule\Interfaces\Entities\SettingEntityInterface;
use PGI\Impact\PGModule\Interfaces\UpgradeInterface;
use PGI\Impact\PGLog\Interfaces\LoggerInterface;
use PGI\Impact\PGModule\Services\Managers\SettingManager;
use PGI\Impact\PGShop\Interfaces\Entities\ShopEntityInterface;
use PGI\Impact\PGShop\Services\Handlers\ShopHandler;

/**
 * Class FixGreenAccessTokenSettingUpgrade
 * @package PGGreen\Services\Upgrades
 */
class FixGreenAccessTokenSettingUpgrade implements UpgradeInterface
{
    /** @var SettingManager */
    private $settingManager;

    /** @var ShopHandler */
    private $shopHandler;

    /** @var AuthenticationHandlerInterface */
    private $authenticationHandler;

    /** @var LoggerInterface */
    private $logger;

    public function __construct(
        SettingManager $settingManager,
        ShopHandler $shopHandler,
        AuthenticationHandlerInterface $authenticationHandler,
        LoggerInterface $logger
    ) {
        $this->settingManager = $settingManager;
        $this->shopHandler = $shopHandler;
        $this->authenticationHandler = $authenticationHandler;
        $this->logger = $logger;
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public function apply(UpgradeComponent $upgradeStage)
    {
        $target = $upgradeStage->getConfig('target');

        /** @var ShopEntityInterface[] $shops */
        $shops = $this->shopHandler->getShopManager()->getAll();

        foreach ($shops as $shop) {
            /** @var SettingEntityInterface|null $setting */
            $accessTokenSetting = $this->settingManager->getByNameAndShop($target . '_access_token', $shop);

            if ($accessTokenSetting !== null && $accessTokenSetting->getValue() === 'PROD') {
                /** @var SettingEntityInterface|null $setting */
                $refreshTokenSetting = $this->settingManager->getByNameAndShop($target . '_refresh_token', $shop);

                if ($refreshTokenSetting !== null) {
                    $this->logger->debug('Refresh token detected, try to reconnect.');

                    $result = $this->authenticationHandler->connectWithRefreshToken();

                    if (!$result) {
                        $this->logger->debug('Connection with refresh token has failed.');
                        $this->settingManager->delete($accessTokenSetting);
                    }
                } else {
                    $this->settingManager->delete($accessTokenSetting);
                }
            }
        }
    }
}
