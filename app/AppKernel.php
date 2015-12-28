<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

/**
 * Class AppKernel
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new \Symfony\Bundle\TwigBundle\TwigBundle(),
            new \Symfony\Bundle\MonologBundle\MonologBundle(),
            new \Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new \Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle(),
            new \Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
            new \Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new \Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new \FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new \Bazinga\Bundle\JsTranslationBundle\BazingaJsTranslationBundle(),
            new \Liip\ImagineBundle\LiipImagineBundle(),
            new \Ivory\LuceneSearchBundle\IvoryLuceneSearchBundle(),
            new \Knp\DoctrineBehaviors\Bundle\DoctrineBehaviorsBundle(),

            new \WellCommerce\Bundle\AdminBundle\WellCommerceAdminBundle(),
            new \WellCommerce\Bundle\AppBundle\WellCommerceAppBundle(),
            new \WellCommerce\Bundle\AttributeBundle\WellCommerceAttributeBundle(),
            new \WellCommerce\Bundle\AvailabilityBundle\WellCommerceAvailabilityBundle(),
            new \WellCommerce\Bundle\CartBundle\WellCommerceCartBundle(),
            new \WellCommerce\Bundle\CategoryBundle\WellCommerceCategoryBundle(),
            new \WellCommerce\Bundle\ContactBundle\WellCommerceContactBundle(),
            new \WellCommerce\Bundle\ClientBundle\WellCommerceClientBundle(),
            new \WellCommerce\Bundle\CoreBundle\WellCommerceCoreBundle(),
            new \WellCommerce\Bundle\CountryBundle\WellCommerceCountryBundle(),
            new \WellCommerce\Bundle\CouponBundle\WellCommerceCouponBundle(),
            new \WellCommerce\Bundle\CurrencyBundle\WellCommerceCurrencyBundle(),
            new \WellCommerce\Bundle\DelivererBundle\WellCommerceDelivererBundle(),
            new \WellCommerce\Bundle\DictionaryBundle\WellCommerceDictionaryBundle(),
            new \WellCommerce\Bundle\LocaleBundle\WellCommerceLocaleBundle(),
            new \WellCommerce\Bundle\CompanyBundle\WellCommerceCompanyBundle(),
            new \WellCommerce\Bundle\ShopBundle\WellCommerceShopBundle(),
            new \WellCommerce\Bundle\LayeredNavigationBundle\WellCommerceLayeredNavigationBundle(),
            new \WellCommerce\Bundle\LayoutBundle\WellCommerceLayoutBundle(),
            new \WellCommerce\Bundle\MediaBundle\WellCommerceMediaBundle(),
            new \WellCommerce\Bundle\NewsBundle\WellCommerceNewsBundle(),
            new \WellCommerce\Bundle\ThemeBundle\WellCommerceThemeBundle(),
            new \WellCommerce\Bundle\OrderBundle\WellCommerceOrderBundle(),
            new \WellCommerce\Bundle\PageBundle\WellCommercePageBundle(),
            new \WellCommerce\Bundle\PaymentBundle\WellCommercePaymentBundle(),
            new \WellCommerce\Bundle\ProducerBundle\WellCommerceProducerBundle(),
            new \WellCommerce\Bundle\ProductBundle\WellCommerceProductBundle(),
            new \WellCommerce\Bundle\ProductStatusBundle\WellCommerceProductStatusBundle(),
            new \WellCommerce\Bundle\ReportBundle\WellCommerceReportBundle(),
            new \WellCommerce\Bundle\ReviewBundle\WellCommerceReviewBundle(),
            new \WellCommerce\Bundle\RoutingBundle\WellCommerceRoutingBundle(),
            new \WellCommerce\Bundle\SearchBundle\WellCommerceSearchBundle(),
            new \WellCommerce\Bundle\ShippingBundle\WellCommerceShippingBundle(),
            new \WellCommerce\Bundle\SmugglerBundle\WellCommerceSmugglerBundle(),
            new \WellCommerce\Bundle\TaxBundle\WellCommerceTaxBundle(),
            new \WellCommerce\Bundle\UnitBundle\WellCommerceUnitBundle(),
            new \WellCommerce\Bundle\WishlistBundle\WellCommerceWishlistBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'])) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir() . '/config/config_' . $this->getEnvironment() . '.yml');
    }
}
