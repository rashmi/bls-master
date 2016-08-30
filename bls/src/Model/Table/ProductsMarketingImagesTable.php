<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsMarketingImages Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\ProductsMarketingImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductsMarketingImage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductsMarketingImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsMarketingImage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsMarketingImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsMarketingImage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsMarketingImage findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsMarketingImagesTable extends Table
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

        $this->table('products_marketing_images');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
		$this->addBehavior('Josegonzalez/Upload.Upload', [
            'image' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'image_dir', // defaults to `dir`
                    'size' => 'image_size', // defaults to `size`
                    'type' => 'image_type', // defaults to `type`
                ],
				'path' => 'webroot{DS}img{DS}files{DS}{model}{DS}{field}{DS}'
                   
            ],
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
            ->allowEmpty('image');

        $validator
           ->allowEmpty('image_dir');

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
