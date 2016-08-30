<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $user_addresses_id
 * @property string $user_comments
 * @property string $admin_comments
 * @property int $transactionCode
 * @property int $refrenceCode
 * @property int $invoiceCode
 * @property int $otherCode
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\UserAddress $user_address
 * @property \App\Model\Entity\OrderUpdateStatus[] $order_update_statuses
 * @property \App\Model\Entity\OrdersShipping[] $orders_shippings
 * @property \App\Model\Entity\Product[] $products
 */
class Order extends Entity
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
