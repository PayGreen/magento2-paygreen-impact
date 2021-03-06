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

namespace PGI\Impact\PGCharity\Services\Upgrades;

use Exception;
use PGI\Impact\PGCharity\Services\Handlers\CharityGiftHandler;
use PGI\Impact\PGModule\Components\UpgradeStage as UpgradeComponent;
use PGI\Impact\PGModule\Interfaces\UpgradeInterface;

/**
 * Class InstallCharityGiftProductUpgrade
 * @package PGCharity\Services\Upgrades
 */
class InstallCharityGiftProductUpgrade implements UpgradeInterface
{
    /** @var CharityGiftHandler */
    private $charityGiftHandler;

    private $bin;

    public function __construct(CharityGiftHandler $charityGiftHandler)
    {
        $this->charityGiftHandler = $charityGiftHandler;
    }

    /**
     * @throws Exception
     */
    public function apply(UpgradeComponent $upgradeStage)
    {
        // Thrashing unused arguments
        $this->bin = $upgradeStage;

        $this->charityGiftHandler->install();
    }
}
