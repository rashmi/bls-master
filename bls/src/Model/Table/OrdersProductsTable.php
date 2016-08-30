<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrdersProducts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Orders
 * @property \Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\OrdersProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrdersProduct newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrdersProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrdersProduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrdersProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrdersProduct[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrdersProduct findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrdersProductsTable extends Table
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

        $this->table('orders_products');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
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

        $validator
            ->integer('product_quantity')
            ->requirePresence('product_quantity', 'create')
            ->notEmpty('product_quantity');

        $validator
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->requirePresence('discounted_price', 'create')
            ->notEmpty('discounted_price');

        $validator
            ->requirePresence('final_price', 'create')
            ->notEmpty('final_price');

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
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        return $rules;
    }
}
