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

namespace PGI\Impact\PGModule\Services\Upgrades;

use PGI\Impact\PGModule\Components\UpgradeStage as UpgradeComponent;
use PGI\Impact\PGModule\Interfaces\Entities\SettingEntityInterface;
use PGI\Impact\PGModule\Interfaces\UpgradeInterface;
use PGI\Impact\PGModule\Services\Managers\SettingManager;
use PGI\Impact\PGShop\Interfaces\Entities\ShopEntityInterface;
use PGI\Impact\PGShop\Services\Managers\ShopManager;

/**
 * Class RenameSettingsUpgrade
 * @package PGModule\Services\Upgrades
 */
class RenameSettingsUpgrade implements UpgradeInterface
{
    /** @var SettingManager */
    private $settingManager;

    /** @var ShopManager */
    private $shopManager;

    public function __construct(
        SettingManager $settingManager,
        ShopManager $shopManager
    ) {
        $this->settingManager = $settingManager;
        $this->shopManager = $shopManager;
    }

    /**
     * @inheritDoc
     */
    public function apply(UpgradeComponent $upgradeStage)
    {
        foreach ($this->shopManager->getAll() as $shop) {
            $this->applyForShop($upgradeStage, $shop);
        }

        $this->applyForShop($upgradeStage);
    }

    /**
     * @param UpgradeComponent $upgradeStage
     * @param ShopEntityInterface $shop
     */
    public function applyForShop(UpgradeComponent $upgradeStage, ShopEntityInterface $shop = null)
    {
        $mapping = $upgradeStage->getConfig('mapping');

        foreach ($mapping as $oldKey => $newKey) {
            /** @var SettingEntityInterface $setting */
            $setting = $this->settingManager->getByNameAndShop($oldKey, $shop);

            if ($setting !== null) {
                $this->settingManager->insert($newKey, $setting->getValue(), $shop);
            }
        }
    }
}
