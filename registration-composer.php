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

use Magento\Framework\Component\ComponentRegistrar as LocalComponentRegistrar;

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

if (defined('BP')) {
    $root = BP;
} else {
    $root = dirname(realpath(\Composer\Factory::getComposerFile()));
}

define('PGIMPACT_MODULE_DIR', $root . DS . 'vendor' . DS . 'paygreen' . DS . 'magento2-paygreen-impact');
define('PGIMPACT_BOOTSTRAP_SRC', PGIMPACT_MODULE_DIR . DS . 'bootstrap.php');
define('PGIMPACT_AUTOLOADING', false);

LocalComponentRegistrar::register(
    LocalComponentRegistrar::MODULE,
    'Paygreen_Impact',
    PGIMPACT_MODULE_DIR
);
