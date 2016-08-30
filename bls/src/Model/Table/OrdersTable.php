<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $UserAddresses
 * @property \Cake\ORM\Association\HasMany $OrderUpdateStatuses
 * @property \Cake\ORM\Association\HasMany $OrdersShippings
 * @property \Cake\ORM\Association\BelongsToMany $Products
 *
 * @method \App\Model\Entity\Order get($primaryKey, $options = [])
 * @method \App\Model\Entity\Order newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Order[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Order|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Order[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Order findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrdersTable extends Table
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

        $this->table('orders');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UserAddresses', [
            'foreignKey' => 'user_addresses_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('OrderUpdateStatuses', [
            'foreignKey' => 'order_id'
        ]);
		   $this->hasMany('OrdersProducts', [
            'foreignKey' => 'order_id'
        ]);
        $this->hasMany('OrdersShippings', [
            'foreignKey' => 'order_id'
        ]);
        $this->belongsToMany('Products', [
            'foreignKey' => 'order_id',
            'targetForeignKey' => 'product_id',
            'joinTable' => 'orders_products'
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

        $validator
            ->requirePresence('user_comments', 'create')
            ->notEmpty('user_comments');

        $validator
            ->requirePresence('admin_comments', 'create')
            ->notEmpty('admin_comments');

        $validator
            ->integer('transactionCode')
            ->requirePresence('transactionCode', 'create')
            ->notEmpty('transactionCode');

        $validator
            ->integer('refrenceCode')
            ->requirePresence('refrenceCode', 'create')
            ->notEmpty('refrenceCode');

        $validator
            ->integer('invoiceCode')
            ->requirePresence('invoiceCode', 'create')
            ->notEmpty('invoiceCode');

        $validator
            ->integer('otherCode')
            ->requirePresence('otherCode', 'create')
            ->notEmpty('otherCode');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['user_addresses_id'], 'UserAddresses'));
        return $rules;
    }
}
