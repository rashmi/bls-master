<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Promotion Entity
 *
 * @property int $id
 * @property string $promo_code
 * @property int $product_id
 * @property string $discounted_amount_parent
 * @property int $quantity_parent
 * @property \Cake\I18n\Time $start_date
 * @property \Cake\I18n\Time $end_date
 * @property string $associated_product
 * @property int $child_product_id
 * @property string $discounted_amount_child
 * @property int $quantity_child
 * @property string $discount_parent_in
 * @property string $discount_child_in
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\ChildProduct $child_product
 */
class Promotion extends Entity
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
