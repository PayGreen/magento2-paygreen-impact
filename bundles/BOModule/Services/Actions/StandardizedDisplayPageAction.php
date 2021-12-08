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

namespace PGI\Impact\BOModule\Services\Actions;

use PGI\Impact\PGServer\Foundations\AbstractAction;
use PGI\Impact\PGView\Services\Handlers\BlockHandler;
use PGI\Impact\PGServer\Components\Resources\ScriptFile as ScriptFileResourceComponent;
use PGI\Impact\PGServer\Components\Resources\StyleFile as StyleFileResourceComponent;
use Exception;

class StandardizedDisplayPageAction extends AbstractAction
{
    const DEFAULT_PAGE_TEMPLATE = 'blocks/page-default';

    /** @var BlockHandler */
    private $blockHandler;

    public function __construct(BlockHandler $blockHandler)
    {
        $this->blockHandler = $blockHandler;

        parent::__construct();
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public function process()
    {
        $data = array();

        $data['page_name'] = $this->getConfig('page_name');
        $data['selected_page'] = $data['page_name'];

        $aggregatedBlocks =  $this->blockHandler->getBlocks($data['page_name']);
        $data['blocks'] = $aggregatedBlocks->getContent();

        if ($this->hasConfig('selected_page')) {
            $data['selected_page'] = $this->getConfig('selected_page');
        }

        $response = $this->buildTemplateResponse($this->computeTemplateToUse(), $data);

        $response->getResources()->merge($aggregatedBlocks->getResources());

        if ($this->hasConfig('static')) {
            $data['static'] = $this->getConfig('static');

            if (array_key_exists('js', $data['static'])) {
                foreach ($data['static']['js'] as $jsFile) {
                    $response->getResources()->add(new ScriptFileResourceComponent($jsFile));
                }
            }

            if (array_key_exists('css', $data['static'])) {
                foreach ($data['static']['css'] as $cssFile) {
                    $response->getResources()->add(new StyleFileResourceComponent($cssFile));
                }
            }
        }

        return $response;
    }

    /**
     * @return string
     * @throws Exception
     */
    private function computeTemplateToUse()
    {
        if ($this->hasConfig('template')) {
            return $this->getConfig('template');
        }

        return self::DEFAULT_PAGE_TEMPLATE;
    }
}
