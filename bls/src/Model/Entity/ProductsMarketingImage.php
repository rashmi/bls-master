<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductsMarketingImage Entity
 *
 * @property int $id
 * @property int $product_id
 * @property string $image
 * @property string $image_dir
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\Product $product
 */
class ProductsMarketingImage extends Entity
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