<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsAttrs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Products
 * @property \Cake\ORM\Association\BelongsTo $Brands
 *
 * @method \App\Model\Entity\ProductsAttr get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductsAttr newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductsAttr[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsAttr|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsAttr patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsAttr[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsAttr findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsAttrsTable extends Table
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

        $this->table('products_attrs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Brands', [
            'foreignKey' => 'brand_id',
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
            ->requirePresence('model', 'create')
            ->notEmpty('model');

        $validator
            ->requirePresence('video_link', 'create')
            ->notEmpty('video_link');

        $validator
            ->requirePresence('size', 'create')
            ->notEmpty('size');

        $validator
            ->requirePresence('weight', 'create')
            ->notEmpty('weight');

        $validator
            ->requirePresence('packaging', 'create')
            ->notEmpty('packaging');

        $validator
            ->requirePresence('uom', 'create')
            ->notEmpty('uom');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

        $validator
            ->requirePresence('main_promo_1', 'create')
            ->notEmpty('main_promo_1');

        $validator
            ->requirePresence('main_promo_2', 'create')
            ->notEmpty('main_promo_2');

        $validator
            ->requirePresence('main_promo_3', 'create')
            ->notEmpty('main_promo_3');

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
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        $rules->add($rules->existsIn(['brand_id'], 'Brands'));
        return $rules;
    }
}
