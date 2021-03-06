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
use PGI\Impact\PGModule\Components\UpgradeStage as UpgradeComponent;
use PGI\Impact\PGModule\Interfaces\Entities\SettingEntityInterface;
use PGI\Impact\PGModule\Interfaces\UpgradeInterface;
use PGI\Impact\PGLog\Interfaces\LoggerInterface;
use PGI\Impact\PGModule\Services\Managers\SettingManager;
use PGI\Impact\PGShop\Interfaces\Entities\ShopEntityInterface;
use PGI\Impact\PGShop\Services\Handlers\ShopHandler;

/**
 * Class ResetGreenAccessSettingsUpgrade
 * @package PGGreen\Services\Upgrades
 */
class ResetGreenAccessSettingsUpgrade implements UpgradeInterface
{
    /** @var SettingManager */
    private $settingManager;

    /** @var ShopHandler */
    private $shopHandler;

    /** @var LoggerInterface */
    private $logger;

    public function __construct(
        SettingManager $settingManager,
        ShopHandler $shopHandler,
        LoggerInterface $logger
    ) {
        $this->settingManager = $settingManager;
        $this->shopHandler = $shopHandler;
        $this->logger = $logger;
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public function apply(UpgradeComponent $upgradeStage)
    {
        $target = $upgradeStage->getConfig('target');

        $settings = array(
            $target . '_access_token',
            $target . '_access_token_validity',
            $target . '_refresh_token',
            $target . '_refresh_token_validity',
            $target . '_client_id',
            $target . '_client_username'
        );

        /** @var ShopEntityInterface[] $shops */
        $shops = $this->shopHandler->getShopManager()->getAll();

        foreach ($shops as $shop) {
            /** @var SettingEntityInterface|null $setting */
            $setting = $this->settingManager->getByNameAndShop($target . '_api_server', $shop);

            if ($setting !== null && $setting->getValue() !== 'PROD') {
                $setting->setValue('PROD');
                $this->settingManager->update($setting);

                foreach ($settings as $name) {
                    /** @var SettingEntityInterface|null $setting */
                    $setting = $this->settingManager->getByNameAndShop($name, $shop);

                    if ($setting !== null) {
                        $this->settingManager->delete($setting);
                    } else {
                        $this->logger->debug("Setting '$name' not found for shop '{$shop->id()}'.");
                    }
                }
            }
        }
    }
}
