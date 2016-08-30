<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrderUpdateStatuses Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Orders
 * @property \Cake\ORM\Association\BelongsTo $OrderStatuses
 * @property \Cake\ORM\Association\BelongsTo $Admins
 *
 * @method \App\Model\Entity\OrderUpdateStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrderUpdateStatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrderUpdateStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrderUpdateStatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrderUpdateStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrderUpdateStatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrderUpdateStatus findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrderUpdateStatusesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('order_update_statuses');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('OrderStatuses', [
            'foreignKey' => 'order_status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Admins', [
            'foreignKey' => 'admin_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['order_id'], 'Orders'));
        $rules->add($rules->existsIn(['order_status_id'], 'OrderStatuses'));
        $rules->add($rules->existsIn(['admin_id'], 'Admins'));
        return $rules;
    }
}
