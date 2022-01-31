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

namespace PGI\Impact\FOModule\Services\Controllers;

use PGI\Impact\PGServer\Components\Responses\Template as TemplateResponseComponent;
use PGI\Impact\PGServer\Foundations\AbstractController;
use PGI\Impact\PGServer\Foundations\AbstractRequest;
use Exception;

/**
 * Class NotificationController
 * @package FOModule\Services\Controllers
 */
class NotificationController extends AbstractController
{
    /**
     * @return TemplateResponseComponent
     * @throws Exception
     */
    public function displayNotificationAction()
    {
        /** @var AbstractRequest $request */
        $request = $this->getRequest();

        return $this->buildTemplateResponse('page-frontoffice-message', array(
            'title' => $request->get('title'),
            'message' => $request->get('message'),
            'details' => $request->get('details'),
            'errors' => $request->get('errors', array()),
            'url' => $request->get('url', array()),
            'env' => PGIMPACT_ENV,
            'exceptions' => $request->get('exceptions', array())
        ));
    }
}
