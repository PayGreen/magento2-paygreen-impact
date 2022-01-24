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

namespace PGI\Impact\PGIntl\Services\Upgrades;

use PGI\Impact\PGIntl\Services\Handlers\TranslationHandler;
use PGI\Impact\PGModule\Components\UpgradeStage as UpgradeComponent;
use PGI\Impact\PGModule\Interfaces\UpgradeInterface;
use PGI\Impact\PGShop\Interfaces\Entities\ShopEntityInterface;
use PGI\Impact\PGShop\Services\Managers\ShopManager;

/**
 * Class InsertDefaultTranslationsHandler
 * @package PGIntl\Services\Upgrades
 */
class InsertDefaultTranslationsHandler implements UpgradeInterface
{
    /** @var TranslationHandler */
    private $translationHandler;

    /** @var ShopManager */
    private $shopManager;

    public function __construct(
        TranslationHandler $translationHandler,
        ShopManager $shopManager
    ) {
        $this->translationHandler = $translationHandler;
        $this->shopManager = $shopManager;
    }

    public function apply(UpgradeComponent $upgradeStage)
    {
        $codes = $upgradeStage->getConfig('codes');

        /** @var ShopEntityInterface $shop */
        foreach ($this->shopManager->getAll() as $shop) {
            $this->translationHandler->insertDefaultTranslations($shop, $codes);
        }
    }
}
