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

namespace PGI\Impact\FOTree\Services\OutputBuilders;

use PGI\Impact\APITree\Components\Replies\CarbonFootprint as CarbonFootprintReplyComponent;
use PGI\Impact\PGIntl\Services\Handlers\TranslationHandler;
use PGI\Impact\PGLog\Interfaces\LoggerInterface;
use PGI\Impact\PGModule\Components\Output as OutputComponent;
use PGI\Impact\PGModule\Foundations\AbstractOutputBuilder;
use PGI\Impact\PGModule\Services\Settings;
use PGI\Impact\PGServer\Components\Resources\Data as DataResourceComponent;
use PGI\Impact\PGServer\Components\Resources\ScriptFile as ScriptFileResourceComponent;
use PGI\Impact\PGServer\Components\Resources\StyleFile as StyleFileResourceComponent;
use PGI\Impact\PGServer\Services\Handlers\LinkHandler;
use PGI\Impact\PGShop\Services\Managers\CartManager;
use PGI\Impact\PGShop\Services\Managers\CustomerManager;
use PGI\Impact\PGSystem\Components\Parameters;
use PGI\Impact\PGTree\Services\Handlers\TreeAccountHandler;
use PGI\Impact\PGTree\Services\Handlers\TreeCarbonOffsettingHandler;
use PGI\Impact\PGTree\Services\Handlers\TreeFootprintIdHandler;

/**
 * Class CarbonBotOutputBuilder
 * @package FOTree\Services\OutputBuilders
 */
class CarbonBotOutputBuilder extends AbstractOutputBuilder
{
    /** @var Settings */
    private $settings;

    /**  @var TreeCarbonOffsettingHandler */
    private $carbonOffsettingHandler;

    /** @var CartManager */
    private $cartManager;

    /** @var CustomerManager */
    private $customerManager;

    /** @var TreeAccountHandler */
    private $treeAccountHandler;

    /** @var TranslationHandler */
    private $translationHandler;

    /** @var TreeFootprintIdHandler */
    private $treeFootprintIdHandler;

    /** @var LinkHandler */
    private $linkHandler;

    /** @var LoggerInterface */
    private $logger;

    /** @var Parameters */
    private $parameters;

    public function __construct(
        Settings $settings,
        TreeCarbonOffsettingHandler $carbonOffsettingHandler,
        TreeAccountHandler $treeAccountHandler,
        CartManager $cartManager,
        CustomerManager $customerManager,
        TranslationHandler $translationHandler,
        TreeFootprintIdHandler $treeFootprintIdHandler,
        LinkHandler $linkHandler,
        LoggerInterface $logger,
        Parameters $parameters
    ) {
        parent::__construct();

        $this->settings = $settings;
        $this->carbonOffsettingHandler = $carbonOffsettingHandler;
        $this->cartManager = $cartManager;
        $this->customerManager = $customerManager;
        $this->treeAccountHandler = $treeAccountHandler;
        $this->translationHandler = $translationHandler;
        $this->treeFootprintIdHandler = $treeFootprintIdHandler;
        $this->linkHandler = $linkHandler;
        $this->logger = $logger;
        $this->parameters = $parameters;
    }

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function build(array $data = array())
    {
        $fingerprint = 0;
        $idUser = 0;
        $cartPrice = 0;

        if ($this->treeFootprintIdHandler->isFootprintSet()) {
            $this->carbonOffsettingHandler->computeCarbonOffsetting(
                $this->cartManager->getCurrent(),
                $this->customerManager->getCurrent()
            );

            /** @var CarbonFootprintReplyComponent $carbonFootprint */
            $carbonFootprint = $this->carbonOffsettingHandler->getCarbonOffsetting();

            $fingerprint = $carbonFootprint->getFingerprint();
            $idUser = $carbonFootprint->getIdUser();
        }


        /** @var object $user */
        $user = $this->treeAccountHandler->getAccountData();

        /** @var OutputComponent $output */
        $output = new OutputComponent();

        if ($this->cartManager->getCurrent()) {
            $cartPrice = $this->cartManager->getCurrent()->getTotalCost();
        }

        $server = $this->settings->get('tree_api_server');
        $url = $this->parameters["urls.climatekit.$server"];

        if (!$url) {
            $this->logger->error("Invalid url for climatekit api server. Use default value.");

            $server = $this->settings->getDefault('tree_api_server');
            $url = $this->parameters["urls.climatekit.$server"];
        }

        $testMode = "false";
        if ($this->settings->get("tree_test_mode")) {
            $testMode ="true";
        }

        $output->addResource(new DataResourceComponent(array(
            'paygreen_tree_climatebot_api_url' => $url,
            'paygreen_tree_climatebot_name' => $user->organisationName,
            'paygreen_tree_climatebot_color' => $this->settings->get("tree_bot_color"),
            'paygreen_tree_climatebot_position' => $this->settings->get("tree_bot_side"),
            'paygreen_tree_climatebot_url' => $this->settings->get("tree_details_url"),
            'paygreen_tree_climatebot_mobile' => $this->settings->get("tree_bot_mobile_activated"),
            'paygreen_tree_climatebot_fingerprint' => $fingerprint,
            'paygreen_tree_climatebot_user_id' => $idUser,
            'paygreen_tree_climatebot_test_mode' => $testMode,
            'paygreen_tree_climatebot_cart_price' => $cartPrice,
            'paygreen_tree_climatebot_description' => $this->translationHandler->translate('message_find_out_more'),
            'paygreen_tree_climatebot_title' => $this->translationHandler->translate('message_carbon_footprint'),
            'paygreen_footprint' => $this->translationHandler->translate('message_carbon_footprint'),
            'paygreen_create_footprint_url' => $this->linkHandler->buildFrontOfficeUrl('front.tree.create_footprint'),
        )));

        $output->addResource(new ScriptFileResourceComponent($this->parameters["data.carbon_bot.carbon_bot_front"]));
        $output->addResource(new StyleFileResourceComponent('/css/tree-frontoffice.css'));

        return $output;
    }
}
