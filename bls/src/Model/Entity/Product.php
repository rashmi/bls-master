<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $item_code
 * @property string $title
 * @property string $product_desc
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $status
 *
 * @property \App\Model\Entity\ProductsAttr[] $products_attrs
 * @property \App\Model\Entity\ProductsImage[] $products_images
 * @property \App\Model\Entity\ProductsMarketingImage[] $products_marketing_images
 * @property \App\Model\Entity\ProductsPrice[] $products_prices
 * @property \App\Model\Entity\ProductsPromo[] $products_promos
 * @property \App\Model\Entity\ProductsRelated[] $products_relateds
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\Category[] $categories
 */
class Product extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
