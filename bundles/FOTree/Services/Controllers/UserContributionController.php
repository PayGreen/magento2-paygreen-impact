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

namespace PGI\Impact\FOTree\Services\Controllers;

use PGI\Impact\BOModule\Foundations\Controllers\AbstractBackofficeController;
use PGI\Impact\PGTree\Services\Handlers\TreeHandler;
use PGI\Impact\PGServer\Components\Responses\Forward as ForwardResponseComponent;
use PGI\Impact\PGServer\Components\Responses\Redirection as RedirectionResponseComponent;
use Exception;

/**
 * Class UserContributionController
 * @package FOTree\Services\Controllers
 */
class UserContributionController extends AbstractBackofficeController
{
    /** @var TreeHandler */
    private $treeHandler;

    public function __construct(
        TreeHandler $treeHandler
    ) {
        $this->treeHandler = $treeHandler;
    }

    /**
     * @return RedirectionResponseComponent|ForwardResponseComponent
     * @throws Exception
     */
    public function saveContributionAction()
    {
        $contributionAmount = (float) $this->getRequest()->get('pgtreecontribution-amount');

        $this->getLogger()->debug("Adding Climate Contribution : ".$contributionAmount);

        try {

            if ($this->treeHandler->addContribution($contributionAmount)) {
                $response = $this->redirect($this->getLinkHandler()->buildLocalUrl('checkout'));
            } else {
                $response = $this->forward('displayNotification@front.notification', array(
                    'title' => 'actions.contribution.save.result.failure.title',
                    'message' => 'actions.contribution.save.result.failure.message',
                    'url' => array(
                        'link' => $this->getLinkHandler()->buildLocalUrl('checkout'),
                        'text' => 'actions.contribution.save.result.failure.link',
                    )
                ));
            }
        } catch (Exception $exception) {
            $this->getLogger()->error(
                "An error occured while saving contribution : " . $exception->getMessage(),
                $exception
            );

            $response = $this->forward('displayNotification@front.notification', array(
                'title' => 'actions.contribution.save.result.error.title',
                'message' => 'actions.contribution.save.result.error.message',
                'url' => array(
                    'link' => $this->getLinkHandler()->buildLocalUrl('checkout'),
                    'text' => 'actions.contribution.save.result.error.link',
                )
            ));
        }

        return $response;
    }

    public function cancelContributionAction()
    {
        $this->getLogger()->debug("Cancel Climate Contribution");

        try {
            if ($this->treeHandler->removeContribution()) {
                $response = $this->redirect($this->getLinkHandler()->buildLocalUrl('checkout'));
            } else {
                $response = $this->forward('displayNotification@front.notification', array(
                    'title' => 'actions.contribution.cancel.result.failure.title',
                    'message' => 'actions.contribution.cancel.result.failure.message',
                    'url' => array(
                        'link' => $this->getLinkHandler()->buildLocalUrl('checkout'),
                        'text' => 'actions.contribution.cancel.result.failure.link',
                    )
                ));
            }
        } catch (Exception $exception) {
            $this->getLogger()->error(
                "An error occured while cancelling contribution : " . $exception->getMessage(),
                $exception
            );

            $response = $this->forward('displayNotification@front.notification', array(
                'title' => 'actions.contribution.cancel.result.error.title',
                'message' => 'actions.contribution.cancel.result.error.message',
                'url' => array(
                    'link' => $this->getLinkHandler()->buildLocalUrl('checkout'),
                    'text' => 'actions.contribution.cancel.result.error.link',
                )
            ));
        }


        return $response;
    }


    /**
     * @return ForwardResponseComponent
     * @throws Exception
     */
    public function displayContributionExplanationPageAction()
    {
        return $this->forward('displayNotification@front.notification', array(
            'title' => 'misc.tree_user_contribution.explanation.title',
            'message' => 'misc.tree_user_contribution.explanation.message',
            'details' => 'misc.tree_user_contribution.explanation.details'
        ));
    }
}
