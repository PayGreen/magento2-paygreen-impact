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

namespace PGI\Impact\PGCharity\Services\Managers;

use PGI\Impact\PGDatabase\Foundations\AbstractManager;
use PGI\Impact\PGCharity\Interfaces\Entities\GiftEntityInterface;
use PGI\Impact\PGCharity\Interfaces\Repositories\GiftRepositoryInterface;
use DateTime;
use Exception;

/**
 * Class GiftManager
 * @package PGCharity\Services\Managers
 * @method GiftRepositoryInterface getRepository()
 */
class GiftManager extends AbstractManager
{
    /**
     * @param $id
     * @return GiftEntityInterface
     * @throws Exception
     */
    public function getByPrimary($id)
    {
        return $this->getRepository()->findByPrimary($id);
    }

    /**
     * @param $id_order
     * @return GiftEntityInterface|null
     */
    public function getByOrderPrimary($id_order)
    {
        return $this->getRepository()->findByOrderPrimary($id_order);
    }

    /**
     * @param string $reference
     * @param int $id_order
     * @param int $id_partnership
     * @param int $amount
     * @return GiftEntityInterface
     */
    public function create($reference, $id_order, $id_partnership, $amount)
    {
        return $this->getRepository()->create($reference, $id_order, $id_partnership, $amount);
    }

    /**
     * @param GiftEntityInterface $gift
     * @return bool
     */
    public function save(GiftEntityInterface $gift)
    {
        if ($gift->id() > 0) {
            return $this->getRepository()->update($gift);
        } else {
            return $this->getRepository()->insert($gift);
        }
    }
}
