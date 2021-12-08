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

namespace PGI\Impact\BOTree\Services\Actions;

use PGI\Impact\PGForm\Services\Views\FormView;
use PGI\Impact\PGModule\Services\Settings;
use PGI\Impact\PGServer\Components\Resources\ScriptFile as ScriptFileResourceComponent;
use PGI\Impact\PGServer\Components\Resources\StyleFile as StyleFileResourceComponent;
use PGI\Impact\PGServer\Components\Responses\Template as TemplateResponseComponent;
use PGI\Impact\PGServer\Foundations\AbstractAction;
use PGI\Impact\PGSystem\Components\Parameters as ParametersComponent;
use PGI\Impact\PGView\Components\Box as BoxComponent;
use Exception;

/**
 * Class DisplayCarbonBotConfigurationFormAction
 * @package BOTree\Services\Actions
 */
class DisplayCarbonBotConfigurationFormAction extends AbstractAction
{
    /**
     * @inheritDoc
     * @throws Exception
     */
    public function process()
    {
        /** @var TemplateResponseComponent $output */
        $response = $this->buildTemplateResponse('tree/block-tree-preview', array(
            'color' => $this->getSettings()->get("tree_bot_color"),
            'position' => $this->getSettings()->get("tree_bot_side"),
            'corner' => $this->getSettings()->get("tree_bot_corner"),
            'isDetailsActivated' => "true",
            'detailsUrl' => $this->getSettings()->get('tree_details_url'),
            'carbonEmittedTotal' => "1.1 kg",
            'carbonEmittedFromDigital' => "54 g",
            'carbonEmittedFromTransportation' => "646 g",
            'carbonEmittedFromProduct' => "0.4 kg",
            'isTreeTestModeActivated' => $this->getSettings()->get('tree_test_mode'),
        ))->addData('form', $this->buildSettingsFormView());

        $response->addResource(new StyleFileResourceComponent('/css/tree-bot-main.css'));
        $response->addResource(new ScriptFileResourceComponent('/js/page-tree-preview.js'));

        return $response;
    }

    /**
     * @return BoxComponent
     * @throws Exception
     */
    protected function buildSettingsFormView()
    {
        /** @var Settings $settings */
        $settings = $this->getSettings();

        /** @var ParametersComponent $parameters */
        $parameters = $this->getParameters();

        $form_name = 'tree_bot';

        $keys = array_keys($parameters["form.definitions.$form_name.fields"]);

        $values = $settings->getArray($keys);

        /** @var FormView $view */
        $view = $this->buildForm($form_name, $values)->buildView();

        $url = $this->getLinkHandler()->buildBackOfficeUrl('backoffice.tree_bot_form.save');

        $view->setAction($url);

        return new BoxComponent($view);
    }
}