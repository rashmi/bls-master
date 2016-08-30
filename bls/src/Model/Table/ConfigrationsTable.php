<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Configrations Model
 *
 * @method \App\Model\Entity\Configration get($primaryKey, $options = [])
 * @method \App\Model\Entity\Configration newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Configration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Configration|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Configration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Configration[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Configration findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConfigrationsTable extends Table
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

        $this->table('configrations');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
		$this->addBehavior('Josegonzalez/Upload.Upload', [
            'logo' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'logo_dir', // defaults to `dir`
                    'size' => 'logo_size', // defaults to `size`
                    'type' => 'logo_type', // defaults to `type`
                ],
				'path' => 'webroot{DS}img{DS}files{DS}{model}{DS}{field}{DS}'
                   
            ],
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
            ->requirePresence('store_name', 'create')
            ->notEmpty('store_name');

        $validator
            ->allowEmpty('logo');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('facebook_link', 'create')
            ->notEmpty('facebook_link');

        $validator
            ->requirePresence('twitter_link', 'create')
            ->notEmpty('twitter_link');

        $validator
            ->requirePresence('home_link', 'create')
            ->notEmpty('home_link');

        $validator
            ->requirePresence('currency', 'create')
            ->notEmpty('currency');
		
		/////
		$validator
            ->requirePresence('gst', 'create')
            ->notEmpty('gst');
		$validator
            ->requirePresence('delivery_charge', 'create')
            ->notEmpty('delivery_charge');
		$validator
            ->requirePresence('min_amt_free_delivery', 'create')
            ->notEmpty('min_amt_free_delivery');
		$validator
            ->requirePresence('adm_fdbk_email', 'create')
            ->notEmpty('adm_fdbk_email');
		$validator
            ->requirePresence('min_amt_for_promotion', 'create')
            ->notEmpty('min_amt_for_promotion');
		$validator
            ->requirePresence('invoice_msg', 'create')
            ->notEmpty('invoice_msg');
			

        return $validator;
    }
}
