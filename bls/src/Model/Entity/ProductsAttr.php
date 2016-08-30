<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductsAttr Entity
 *
 * @property int $id
 * @property int $product_id
 * @property int $brand_id
 * @property string $model
 * @property string $video_link
 * @property string $size
 * @property string $weight
 * @property string $packaging
 * @property string $uom
 * @property int $quantity
 * @property string $attributes
 * @property int $main_promo_1
 * @property int $main_promo_2
 * @property int $main_promo_3
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Brand $brand
 */
class ProductsAttr extends Entity
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
