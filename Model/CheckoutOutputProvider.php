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

namespace Paygreen\Impact\Model;

use Exception;
use Magento\Checkout\Model\ConfigProviderInterface as LocalConfigProviderInterface;
use PGI\Impact\PGModule\Components\Output as OutputComponent;
use PGI\Impact\PGLog\Interfaces\LoggerInterface;
use PGI\Impact\PGModule\Services\Providers\OutputProvider;
use PGI\Impact\PGSystem\Services\Container;

class CheckoutOutputProvider implements LocalConfigProviderInterface
{
    public function __construct()
    {
        require_once PGIMPACT_BOOTSTRAP_SRC;
    }

    protected function getService($name)
    {
        return Container::getInstance()->get($name);
    }

    public function getConfig()
    {
        return [
            'pgcheckout' => [
                'content' => $this->getContent()
            ]
        ];
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getContent()
    {
        /** @var LoggerInterface $logger */
        $logger = $this->getService('logger.view');

        /** @var OutputProvider */
        $outputProvider = $this->getService('provider.output');

        /** @var OutputComponent $output */
        $output = $outputProvider->getZoneOutput('FRONT.FUNNEL.CHECKOUT');

        $content = $output->getContent();

        $size = strlen($content);

        $logger->debug("Displaying output content with size of {$size} octets.");

        return $content;
    }
}
