<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Configration Entity
 *
 * @property int $id
 * @property string $store_name
 * @property string $logo
 * @property string $title
 * @property string $facebook_link
 * @property string $twitter_link
 * @property string $home_link
 * @property string $currency
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Configration extends Entity
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
