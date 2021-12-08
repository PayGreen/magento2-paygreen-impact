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

use Magento\Framework\App\ObjectManager as LocalObjectManager;
use Magento\Framework\Filesystem\DirectoryList as LocalDirectoryList;
use PGI\Impact\PGModule\Services\Handlers\SetupHandler;
use PGI\Impact\PGLog\Interfaces\LoggerInterface;
use PGI\Impact\PGShop\Interfaces\Entities\ShopEntityInterface;
use PGI\Impact\PGShop\Services\Handlers\ShopHandler;
use PGI\Impact\PGSystem\Components\Bootstrap as BootstrapComponent;

// #############################################################################################
// Setting module constants
// #############################################################################################

try {
    if (!defined('DS')) {
        define('DS', DIRECTORY_SEPARATOR);
    }

    $objectManager = LocalObjectManager::getInstance();

    /** @var LocalDirectoryList $directory */
    $directory = $objectManager->get('\Magento\Framework\Filesystem\DirectoryList');

    define('PGIMPACT_MODULE_NAME', 'pgimpact');
    define('PGIMPACT_VENDOR_DIR', PGIMPACT_MODULE_DIR . DS . 'bundles');
    define('PGIMPACT_VAR_DIR', $directory->getPath('var') . DS . PGIMPACT_MODULE_NAME);
    define('PGIMPACT_MEDIA_DIR', $directory->getPath('media') . DS . PGIMPACT_MODULE_NAME);
    define('PGIMPACT_DATA_DIR', PGIMPACT_MODULE_DIR . DS . 'data');

    define('PGIMPACT_MODULE_VERSION', require(PGIMPACT_DATA_DIR . DS . 'module_version.php'));

    require_once(PGIMPACT_MODULE_DIR . DS . 'includer.php');

// #############################################################################################
// Running Bootstrap
// #############################################################################################

    $bootstrap = new BootstrapComponent();

    $bootstrap
        ->buildKernel(PGIMPACT_DATA_DIR)
        ->buildPathfinder(array(
            'static' => PGIMPACT_MODULE_DIR . '/view/base/web/static',
            'module' => PGIMPACT_MODULE_DIR,
            'data' => PGIMPACT_MODULE_DIR . '/data',
            'var' => PGIMPACT_VAR_DIR,
            'log' => PGIMPACT_VAR_DIR . '/logs',
            'cache' => PGIMPACT_VAR_DIR . '/cache',
            'media' => PGIMPACT_MEDIA_DIR,
            'templates' => PGIMPACT_MODULE_DIR . '/templates'
        ))
        ->createVarFolder()
    ;

    if (PGIMPACT_AUTOLOADING) {
        $bootstrap->registerAutoloader('PGI\Impact\PGSystem\Components\Builders\AutoloaderCompiled');
    }

    $bootstrap
        ->buildContainer()
        ->insertStaticServices(array(
            'magento' => $objectManager
        ))
    ;

    /** @var ShopHandler $shopHandler */
    $shopHandler = $bootstrap->getContainer()->get('handler.shop');

    /** @var ShopEntityInterface $shop */
    $shop = $shopHandler->getCurrentShop();

    if ($shopHandler->isMultiShopActivated()) {
        define('PGIMPACT_CACHE_PREFIX', 'shop-' . $shop->id());
    }

    $bootstrap->setup(SetupHandler::UPGRADE);

    // #############################################################################################
    // Logging End of bootstrap
    // #############################################################################################

    /** @var LoggerInterface $logger */
    $logger = $bootstrap->getContainer()->get('logger');

    $logger->debug("Current shop detected : {$shop->getName()} #{$shop->id()}.");

    if (isset($_SERVER) && is_array($_SERVER) && isset($_SERVER['REQUEST_URI'])) {
        $logger->debug("Paygreen bootstrap successfully executed for URI : {$_SERVER['REQUEST_URI']}");
    } else {
        $logger->notice("Paygreen bootstrap successfully executed in non-HTTP context.");
    }

    // #############################################################################################
    // Logging PHP errors
    // #############################################################################################

    if (PGIMPACT_ENV === 'DEV') {
        ini_set('error_log', PGIMPACT_VAR_DIR . DS . 'error.log');
    }
} catch (Exception $exception) {
    die($exception->getMessage());
}