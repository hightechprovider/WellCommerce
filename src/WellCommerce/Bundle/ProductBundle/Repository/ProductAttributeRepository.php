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
namespace WellCommerce\Bundle\ProductBundle\Repository;

use WellCommerce\Bundle\AppBundle\Entity\Product;
use WellCommerce\Bundle\CoreBundle\Repository\AbstractEntityRepository;

/**
 * Class ProductAttributeRepository
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ProductAttributeRepository extends AbstractEntityRepository implements ProductAttributeRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function findProductAttribute($id, Product $product)
    {
        return $this->findOneBy([
            'product' => $product,
            'id'      => $id
        ]);
    }
}
