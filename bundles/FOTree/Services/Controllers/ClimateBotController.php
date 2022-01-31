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

namespace PGI\Impact\FOTree\Services\Controllers;

use PGI\Impact\APITree\Components\Replies\CarbonFootprint as CarbonFootprintReplyComponent;
use PGI\Impact\BOModule\Foundations\Controllers\AbstractBackofficeController;
use PGI\Impact\PGServer\Components\Responses\PaygreenModule as PaygreenModuleResponseComponent;
use PGI\Impact\PGShop\Services\Managers\CartManager;
use PGI\Impact\PGShop\Services\Managers\CustomerManager;
use PGI\Impact\PGTree\Services\Handlers\TreeCarbonOffsettingHandler;
use Exception;

/**
 * Class ClimateBotController
 * @package FOTree\Services\Controllers
 */
class ClimateBotController extends AbstractBackofficeController
{
    /** @var CustomerManager */
    private $customerManager;

    /** @var CartManager */
    private $cartManager;

    /** @var TreeCarbonOffsettingHandler */
    private $carbonOffsettingHandler;

    public function __construct(
        CustomerManager $customerManager,
        CartManager $cartManager,
        TreeCarbonOffsettingHandler $carbonOffsettingHandler
    ) {
        $this->customerManager = $customerManager;
        $this->cartManager = $cartManager;
        $this->carbonOffsettingHandler = $carbonOffsettingHandler;
    }

    /**
     * @return PaygreenModuleResponseComponent
     * @throws Exception
     */
    public function createFootprintAction()
    {
        $this->carbonOffsettingHandler->computeCarbonOffsetting(
            $this->cartManager->getCurrent(),
            $this->customerManager->getCurrent()
        );

        /** @var CarbonFootprintReplyComponent $carbonFootprint */
        $carbonFootprint = $this->carbonOffsettingHandler->getCarbonOffsetting();

        $fingerprint = $carbonFootprint->getFingerprint();
        $idUser = $carbonFootprint->getIdUser();

        $response = new PaygreenModuleResponseComponent($this->getRequest());
        $response
            ->addData('fingerprint', $fingerprint)
            ->addData('userId', $idUser)
        ;

        return  $response;
    }
}
