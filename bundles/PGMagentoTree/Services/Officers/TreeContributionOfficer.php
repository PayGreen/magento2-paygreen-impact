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

namespace PGI\Impact\PGMagentoTree\Services\Officers;

use Exception;
use Magento\Framework\App\State as LocalAppState;
use Magento\Catalog\Api\ProductRepositoryInterface as LocalProductRepository;
use Magento\Catalog\Api\Data\ProductInterfaceFactory as LocalProductFactory;
use Magento\Catalog\Model\Product\Attribute\Source\Status as LocalProductStatus;
use Magento\Catalog\Model\Product as LocalProduct;
use Magento\Store\Model\Group as LocalShop;
use PGI\Impact\PGTree\Interfaces\Officers\TreeContributionOfficerInterface;
use PGI\Impact\PGFramework\Foundations\AbstractService;
use PGI\Impact\PGModule\Entities\Setting;
use PGI\Impact\PGModule\Services\Settings;
use PGI\Impact\PGShop\Interfaces\Entities\ProductEntityInterface;
use PGI\Impact\PGShop\Interfaces\Entities\ShopEntityInterface;
use PGI\Impact\PGShop\Services\Managers\ProductManager;

/**
 * Class TreeContributionOfficer
 * @package PGMagento\Services\Officers
 */
class TreeContributionOfficer extends AbstractService implements TreeContributionOfficerInterface
{
    /** @var LocalProductFactory */
    private $localProductFactory;

    /** @var LocalProductRepository */
    private $localProductRepository;

    /** @var LocalAppState */
    private $localAppState;

    /** @var ProductManager */
    private $productManager;

    /** @var Settings */
    private $settings;

    /** @var TreeContributionPictureOfficer */
    private $contributionPictureOfficer;

    /** @var TreeContributionTranslationOfficer */
    private $contributionTranslationOfficer;

    /** @var TreeContributionStockOfficer */
    private $contributionStockOfficer;

    public function __construct(
        LocalProductFactory $localProductFactory,
        LocalProductRepository $localProductRepository,
        LocalAppState $localAppState,
        ProductManager $productManager,
        Settings $settings,
        TreeContributionPictureOfficer $contributionPictureOfficer,
        TreeContributionTranslationOfficer $contributionTranslationOfficer,
        TreeContributionStockOfficer $contributionStockOfficer
    ) {
        $this->localProductFactory = $localProductFactory;
        $this->localProductRepository = $localProductRepository;
        $this->localAppState = $localAppState;
        $this->productManager = $productManager;
        $this->settings = $settings;
        $this->contributionPictureOfficer = $contributionPictureOfficer;
        $this->contributionTranslationOfficer = $contributionTranslationOfficer;
        $this->contributionStockOfficer = $contributionStockOfficer;
    }

    /**
     * @inheritDoc
     */
    public function isValid($contribution, ShopEntityInterface $shop)
    {
        $isAssociatedWithShop = $this->isAssociatedWithShop($contribution, $shop);
        $isActive = $this->isActive($contribution);
        $isVirtual = $this->isVirtual($contribution);
        $isStockAvailable = $this->contributionStockOfficer->isValid($contribution);
        $isNotEligibleToTaxes = $this->isNotEligibleToTaxes($contribution);

        return ($isAssociatedWithShop && $isActive && $isVirtual && $isStockAvailable && $isNotEligibleToTaxes);
    }

    /**
     * @inheritDoc
     */
    public function validate($contribution, ShopEntityInterface $shop)
    {
        /** @var LocalProduct $localProduct */
        $localProduct = $contribution->getLocalEntity();

        /** @var LocalShop $localShop */
        $localShop = $shop->getLocalEntity();

        if (!$this->isAssociatedWithShop($contribution, $shop)) {
            $ids = $localProduct->getWebsiteIds();
            $ids[] = $localShop->getWebsite()->getId();
            $localProduct->setWebsiteIds($ids);
            $this->log()->info("Successfully associate contribution with current shop.");
        }

        if (!$this->isActive($contribution)) {
            $localProduct->setStatus(LocalProductStatus::STATUS_ENABLED);
            $this->log()->info("Successfully activate contribution.");
        }

        if (!$this->isVirtual($contribution)) {
            $localProduct->setTypeId('virtual');
            $this->log()->info("Successfully set contribution as virtual product.");
        }

        if (!$this->contributionStockOfficer->isValid($contribution)) {
            $this->contributionStockOfficer->validate($contribution);
        }

        if (!$this->isNotEligibleToTaxes($contribution)) {
            $localProduct->setTaxClassId(0);
            $this->log()->info("Successfully deactivate contribution tax management.");
        }

        $this->saveLocalProduct($localProduct);

        return true;
    }

    /**
     * @inheritDoc
     */
    public function disable($contribution, ShopEntityInterface $shop)
    {
        /** @var LocalProduct $localProduct */
        $localProduct = $contribution->getLocalEntity();

        $localProduct->setStatus(LocalProductStatus::STATUS_DISABLED);

        $this->saveLocalProduct($localProduct);
    }

    /**
     * @inheritDoc
     */
    public function create(ShopEntityInterface $shop)
    {
        /** @var ProductEntityInterface|null $product */
        $product = null;

        /** @var LocalShop $localShop */
        $localShop = $shop->getLocalEntity();

        try {
            /** @var LocalProduct $localProduct */
            $localProduct = $this->localProductFactory->create();

            $localProduct->setName($this->getConfig('contribution_name'));
            $localProduct->setTypeId('virtual');
            $localProduct->setAttributeSetId(4);
            $localProduct->setSku($this->getConfig('contribution_reference'));
            $localProduct->setWebsiteIds([$localShop->getWebsite()->getId()]);
            $localProduct->setVisibility(4);
            $localProduct->setStatus(LocalProductStatus::STATUS_ENABLED);
            $localProduct->setPrice(0);
            $localProduct->setTaxClassId(0);

            $this->contributionPictureOfficer->install($localProduct);

            /** @var LocalProduct $localProduct */
            $localProduct = $this->saveLocalProduct($localProduct);

            $this->contributionTranslationOfficer->installTranslations($shop, $localProduct->getId());

            $this->contributionStockOfficer->configure($localProduct);

            /** @var ProductEntityInterface $product */
            $product = $this->productManager->getRepository()->wrapEntity($localProduct);

            $this->saveContributionPrimary($product->id());

            $this->log()->notice("Climate contribution product successfully created for shop #{$shop->id()}.");
        } catch (Exception $exception) {
            $this->log()->critical("An error occurred during local product creation.", $exception);

            throw $exception;
        }

        return $product;
    }

    protected function saveLocalProduct(LocalProduct $localProduct)
    {
        return $this->localAppState->emulateAreaCode(
            'adminhtml',
            function (LocalProductRepository $localProductRepository, LocalProduct $localProduct) {
                return $localProductRepository->save($localProduct);
            },
            [$this->localProductRepository, $localProduct]
        );
    }

    protected function saveContributionPrimary($id)
    {
        $this->settings->set($this->getConfig('contribution_primary_setting'), $id);
    }

    /**
     * @inheritDoc
     */
    public function getPrimary(ShopEntityInterface $shop)
    {
        /** @var Setting|null $setting */
        $id = $this->settings->get($this->getConfig('contribution_primary_setting'));

        if ($id === null) {
            $localProduct = $this->localProductRepository->get($this->getConfig('contribution_reference'));

            if ($localProduct === null) {
                /** @var ProductEntityInterface $product */
                $product = $this->productManager->getRepository()->wrapEntity($localProduct);

                $this->saveContributionPrimary($product->id());

                $id = (int) $product->id();
            } else {
                $this->log()->debug("Unable to retrieve '{$this->getConfig('contribution_primary_setting')}' setting.");
            }
        }

        return $id;
    }

    /**
     * @param ProductEntityInterface $contribution
     * @return bool
     */
    protected function isActive(ProductEntityInterface $contribution)
    {
        /** @var LocalProduct $localProduct */
        $localProduct = $contribution->getLocalEntity();

        $test = ((int) $localProduct->getStatus() === LocalProductStatus::STATUS_ENABLED);

        if (!$test) {
            $this->log()->warning("Inactivation detected for Climate contribution #{$contribution->id()}.");
        }

        return $test;
    }

    /**
     * @param ProductEntityInterface $contribution
     * @return bool
     */
    protected function isVirtual(ProductEntityInterface $contribution)
    {
        /** @var LocalProduct $localProduct */
        $localProduct = $contribution->getLocalEntity();

        $test = ($localProduct->getTypeId() === 'virtual');

        if (!$test) {
            $this->log()->warning("Current Climate contribution #{$contribution->id()} is not virtual product.");
        }

        return $test;
    }

    /**
     * @param ProductEntityInterface $contribution
     * @return bool
     */
    protected function isNotEligibleToTaxes(ProductEntityInterface $contribution)
    {
        /** @var LocalProduct $localProduct */
        $localProduct = $contribution->getLocalEntity();

        $test = ((int) $localProduct->getTaxClassId() === 0);

        if (!$test) {
            $this->log()->warning("Invalid tax detected for Climate contribution #{$contribution->id()}.");
        }

        return $test;
    }

    /**
     * @param ProductEntityInterface $contribution
     * @param ShopEntityInterface $shop
     * @return bool
     */
    protected function isAssociatedWithShop(ProductEntityInterface $contribution, ShopEntityInterface $shop)
    {
        /** @var LocalProduct $localProduct */
        $localProduct = $contribution->getLocalEntity();

        /** @var LocalShop $localShop */
        $localShop = $shop->getLocalEntity();

        $test = in_array($localShop->getWebsite()->getId(), $localProduct->getWebsiteIds());

        if (!$test) {
            $this->log()->warning("Invalid shop detected for Climate contribution #{$contribution->id()}.");
        }

        return $test;
    }
}
