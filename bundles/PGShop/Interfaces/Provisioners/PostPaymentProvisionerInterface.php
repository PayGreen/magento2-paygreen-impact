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

namespace PGI\Impact\PGShop\Interfaces\Provisioners;

use PGI\Impact\APIPayment\Components\Replies\Transaction as TransactionReplyComponent;

/**
 * Interface PostPaymentProvisionerInterface
 * @package PGShop\Interfaces\Provisioners
 */
interface PostPaymentProvisionerInterface
{
    /**
     * @return string
     */
    public function getPid();

    /**
     * @return TransactionReplyComponent
     */
    public function getTransaction();

    /**
     * @return float
     */
    public function getUserAmount();
}
