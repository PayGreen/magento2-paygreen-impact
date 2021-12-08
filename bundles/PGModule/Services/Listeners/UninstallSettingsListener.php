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

namespace PGI\Impact\PGModule\Services\Listeners;

use PGI\Impact\PGModule\Components\Events\Module as ModuleEventComponent;
use PGI\Impact\PGLog\Interfaces\LoggerInterface;
use PGI\Impact\PGModule\Services\Settings;
use Exception;

/**
 * Class UninstallSettingsListener
 * @package PGModule\Services\Listeners
 */
class UninstallSettingsListener
{
    /** @var Settings */
    private $settings;

    /** @var LoggerInterface */
    private $logger;

    private $bin;

    public function __construct(
        Settings $settings,
        LoggerInterface $logger
    ) {
        $this->settings = $settings;
        $this->logger = $logger;
    }

    public function listen(ModuleEventComponent $event)
    {
        // Thrashing unused arguments
        $this->bin = $event;

        $this->logger->debug("Remove all settings.");

        try {
            $this->settings->uninstallSettings();

            $this->logger->info("Settings uninstalled successfully.");
        } catch (Exception $exception) {
            $this->logger->error(
                "An error occurred during settings uninstall : " . $exception->getMessage(),
                $exception
            );
        }
    }
}
