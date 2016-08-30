<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * Admin Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $dob
 * @property string $mobile
 * @property string $firstname
 * @property string $lastname
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Admin extends Entity
{	

	public function parentNode()
{
    if (!$this->id) {
        return null;
    }
    if (isset($this->group_id)) {
        $groupId = $this->group_id;
    } else {
        $Users = TableRegistry::get('Admins');
        $user = $Users->find('all', ['fields' => ['group_id']])->where(['id' => $this->id])->first();
        $groupId = $user->group_id;
    }
    if (!$groupId) {
        return null;
    }
    return ['Groups' => ['id' => $groupId]];
}

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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
	
	
	 protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
          return (new DefaultPasswordHasher)->hash($password);
        }
    }
	
}
