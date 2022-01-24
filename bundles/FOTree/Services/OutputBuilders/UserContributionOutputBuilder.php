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

use Exception;
use PGI\Impact\APITree\Components\Replies\CarbonFootprint as CarbonFootprintReplyComponent;
use PGI\Impact\FOTree\Services\Handlers\CarbonRounderHandler;
use PGI\Impact\PGModule\Components\Output as OutputComponent;
use PGI\Impact\PGModule\Foundations\AbstractOutputBuilder;
use PGI\Impact\PGModule\Services\Settings;
use PGI\Impact\PGServer\Components\Resources\Data as DataResourceComponent;
use PGI\Impact\PGServer\Components\Resources\ScriptFile as ScriptFileResourceComponent;
use PGI\Impact\PGServer\Components\Resources\StyleFile as StyleFileResourceComponent;
use PGI\Impact\PGServer\Services\Handlers\LinkHandler;
use PGI\Impact\PGTree\Services\Handlers\TreeCarbonOffsettingHandler;
use PGI\Impact\PGTree\Services\Handlers\TreeHandler;

/**
 * Class UserContributionOutputBuilder
 * @package FOTree\Services\OutputBuilders
 */
class UserContributionOutputBuilder extends AbstractOutputBuilder
{
    /** @var TreeHandler */
    private $treeHandler;

    /** @var TreeCarbonOffsettingHandler */
    private $carbonOffsettingHandler;

    /** @var CarbonRounderHandler */
    private $carbonRounderHandler;

    /** @var LinkHandler */
    private $linkHandler;

    /** @var Settings */
    private $settings;

    public function __construct(
        TreeHandler $treeHandler,
        TreeCarbonOffsettingHandler $carbonOffsettingHandler,
        CarbonRounderHandler $carbonRounderHandler,
        LinkHandler $linkHandler,
        Settings $settings)
    {
        parent::__construct();
        $this->treeHandler = $treeHandler;
        $this->carbonOffsettingHandler = $carbonOffsettingHandler;
        $this->carbonRounderHandler = $carbonRounderHandler;
        $this->linkHandler = $linkHandler;
        $this->settings = $settings;
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public function build(array $data = array())
    {
        /** @var OutputComponent $output */
        $output = new OutputComponent();

        /** @var CarbonFootprintReplyComponent $carbonFootprintReply */
        $carbonFootprintReply = $this->carbonOffsettingHandler->getCarbonOffsetting();

        $estimatedCarbon = $carbonFootprintReply->getEstimatedCarbon();
        $estimatedPrice = round($carbonFootprintReply->getEstimatedPrice()/100,2);
        if($estimatedPrice == 0) {
            $estimatedPrice = 0.01;
        }

        $favoriteProject = "";

        $projectsResponse = $this->carbonOffsettingHandler->getFavoriteProject($carbonFootprintReply->getIdUser());

        if(isset($projectsResponse->data->_embedded->public_carbon_project)) {
            $projectArray = $projectsResponse->data->_embedded->public_carbon_project;
            foreach ($projectArray as $project) {
                if ($project->isDefault === "1") {
                    $favoriteProject = $project->name;
                }
            }
        }

        $hasContribution = $this->treeHandler->hasContribution();
        $isTreeTestModeActivated = $this->settings->get('tree_test_mode');
        $isCarbonBotActivated = $this->settings->get('tree_bot_activated');
        $urlTreeContribution = 'front.tree.save_contribution';
        if ($hasContribution) {
            $urlTreeContribution = 'front.tree.cancel_contribution';
        }

        $content = $this->getViewHandler()->renderTemplate('tree-user-contribution-container', array(
            'hasContribution' => $hasContribution,
            'isTreeTestModeActivated' => $isTreeTestModeActivated,
            'carbonBotActivated' => $isCarbonBotActivated,
            'estimatedCarbon' => $this->carbonRounderHandler->roundNumber($estimatedCarbon),
            'estimatedPrice' => $estimatedPrice,
            'favoriteProject' => $favoriteProject
        ));

        $output->addResource(new ScriptFileResourceComponent('/js/usercontribution.js'));
        $output->addResource(new StyleFileResourceComponent('/css/tree-user-contribution.css'));

        $output->addResource(new DataResourceComponent(array(
            'paygreen_climate_contribution_url' => $this->linkHandler->buildFrontOfficeUrl($urlTreeContribution),
            'paygreen_climate_contribution_amount' => $estimatedPrice
        )));

        $output->setContent($content);
        return $output;
    }
}
