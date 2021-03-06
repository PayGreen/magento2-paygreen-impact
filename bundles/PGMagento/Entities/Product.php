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

namespace PGI\Impact\PGMagento\Entities;

use PGI\Impact\PGShop\Foundations\Entities\AbstractProductEntity;
use PGI\Impact\PGShop\Interfaces\Entities\ProductEntityInterface;
use PGI\Impact\PGShop\Services\Managers\CategoryManager;
use Magento\Catalog\Model\Product as LocalProduct;

/**
 * Class Product
 *
 * @package PGMagento\Entities
 * @method LocalProduct getLocalEntity()
 */
class Product extends AbstractProductEntity implements ProductEntityInterface
{
    protected function hydrateFromLocalEntity($localEntity)
    {
        // Do nothing.
    }

    /**
     * @inheritdoc
     */
    public function id()
    {
        return (int) $this->getLocalEntity()->getId();
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return $this->getLocalEntity()->getName();
    }

    public function getWeight()
    {
        return $this->getLocalEntity()->getWeight();
    }

    /**
     * @return int
     */
    public function getReference()
    {
        return $this->getLocalEntity()->getSku();
    }

    /**
     * @inheritdoc
     */
    protected function preloadCategories()
    {
        /** @var CategoryManager $categoryManager */
        $categoryManager = $this->getService('manager.category');

        $categories = array();

        foreach ($this->getLocalEntity()->getCategoryIds() as $id_category) {
            $category = $categoryManager->getByPrimary($id_category);

            if ($category !== null) {
                $categories[] = $category;
            }
        }

        return $categories;
    }

    public function isVirtual()
    {
        return $this->getLocalEntity()->isVirtual();
    }

    public function getPrice()
    {
        return $this->getLocalEntity()->getPrice();
    }
}
