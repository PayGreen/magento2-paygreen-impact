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

namespace PGI\Impact\PGShop\Foundations\Entities;

use PGI\Impact\PGDatabase\Foundations\AbstractEntityWrapped;
use PGI\Impact\PGShop\Interfaces\Entities\CartEntityInterface;
use PGI\Impact\PGShop\Interfaces\Entities\ShopableItemEntityInterface;

/**
 * Class AbstractCartEntity
 * @package PGShop\Foundations\Entities
 */
abstract class AbstractCartEntity extends AbstractEntityWrapped implements CartEntityInterface
{
    /** @var ShopableItemEntityInterface[] */
    private $items = array();

    /**
     * @inheritdoc
     */
    public function getItems()
    {
        if (empty($this->items)) {
            $this->items = $this->preloadItems();
        }

        return $this->items;
    }

    /**
     * @return ShopableItemEntityInterface[]
     */
    abstract protected function preloadItems();
}