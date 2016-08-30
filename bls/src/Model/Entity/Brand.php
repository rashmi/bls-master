<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Brand Entity
 *
 * @property int $id
 * @property string $name
 * @property $image
 * @property string $image_dir
 * @property string $categories_ids
 * @property string $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\BrandCategory[] $brand_categories
 * @property \App\Model\Entity\ProdBrand[] $prod_brands
 */
class Brand extends Entity
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
