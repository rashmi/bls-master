<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsRelateds Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\ProductsRelated get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductsRelated newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductsRelated[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsRelated|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsRelated patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsRelated[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsRelated findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsRelatedsTable extends Table
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

        $this->table('products_relateds');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);	
		
		$this->belongsTo('relatedproduct1', [
			'className'=>'Products',
            'foreignKey' => 'related_product_1'  
        ]);	
		$this->belongsTo('relatedproduct2', [
			'className'=>'Products',
            'foreignKey' => 'related_product_2'  
        ]);	
		$this->belongsTo('relatedproduct3', [
			'className'=>'Products',
            'foreignKey' => 'related_product_3'  
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
            ->requirePresence('related_product_1', 'create')
            ->notEmpty('related_product_1');

        $validator
            ->requirePresence('related_product_2', 'create')
            ->notEmpty('related_product_2');

        $validator
            ->requirePresence('related_product_3', 'create')
            ->notEmpty('related_product_3');

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
        return $rules;
    }
}
