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

namespace PGI\Impact\PGFramework\Services\Behaviors;

use PGI\Impact\PGModule\Services\Settings;
use PGI\Impact\PGSystem\Foundations\AbstractObject;

/**
 * Class DetailedLogsBehavior
 * @package PGFramework\Services\Behaviors
 */
class DetailedLogsBehavior extends AbstractObject
{
    /** @var Settings */
    private $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    public function isDetailedLogActivated()
    {
        if ($this->settings->get('last_update') !== PGIMPACT_MODULE_VERSION) {
            $detailedLogActivated = true;
        } else {
            $detailedLogActivated = $this->settings->get('behavior_detailed_logs');
        }

        return (bool) $detailedLogActivated;
    }
}
