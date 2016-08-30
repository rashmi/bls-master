<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderUpdateStatus Entity
 *
 * @property int $id
 * @property int $order_id
 * @property int $order_status_id
 * @property int $admin_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\OrderStatus $order_status
 * @property \App\Model\Entity\Admin $admin
 */
class OrderUpdateStatus extends Entity
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
