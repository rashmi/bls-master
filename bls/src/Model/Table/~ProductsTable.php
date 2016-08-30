<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \Cake\ORM\Association\HasMany $ProductsAttrs
 * @property \Cake\ORM\Association\HasMany $ProductsDescriptions
 * @property \Cake\ORM\Association\HasMany $ProductsImages
 * @property \Cake\ORM\Association\HasMany $ProductsPrices
 * @property \Cake\ORM\Association\BelongsToMany $Orders
 * @property \Cake\ORM\Association\BelongsToMany $Brands
 * @property \Cake\ORM\Association\BelongsToMany $Categories
 * @property \Cake\ORM\Association\BelongsToMany $Keywords
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsTable extends Table
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

        $this->table('products');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
		
        $this->hasOne('ProductsAttrs', [
			'dependent' => true,
			'cascadeCallbacks' => true,
            'foreignKey' => 'product_id'
        ]);
       
        $this->hasMany('ProductsImages', [
			'dependent' => true,
			'cascadeCallbacks' => true,
            'foreignKey' => 'product_id'
        ]);
        $this->hasOne('ProductsPrices', [
			'dependent' => true,
			'cascadeCallbacks' => true,
            'foreignKey' => 'product_id'
        ]);

        $this->belongsToMany('Categories', [
            'foreignKey' => 'product_id',
            'targetForeignKey' => 'category_id',
            'joinTable' => 'products_categories'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        return $validator;
    }
}
