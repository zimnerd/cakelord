<?php
namespace App\Model\Table;

use App\Model\Entity\Property;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Properties Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Types
 * @property \Cake\ORM\Association\BelongsTo $Owners
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\BelongsTo $Cities
 * @property \Cake\ORM\Association\BelongsTo $States
 * @property \Cake\ORM\Association\HasMany $Applications
 * @property \Cake\ORM\Association\HasMany $Units
 */
class PropertiesTable extends Table
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

        $this->table('properties');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Types', [
            'foreignKey' => 'type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Owners', [
            'foreignKey' => 'owner_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id'
        ]);
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id'
        ]);
        $this->belongsTo('States', [
            'foreignKey' => 'state_id'
        ]);
        $this->hasMany('Applications', [
            'foreignKey' => 'property_id'
        ]);
        $this->hasMany('Units', [
            'foreignKey' => 'property_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->add('number_of_units', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('number_of_units');

        $validator
            ->allowEmpty('photo');

        $validator
            ->allowEmpty('photo_dir');

        $validator
            ->allowEmpty('operating_account');

        $validator
            ->add('property_reserve', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('property_reserve');

        $validator
            ->allowEmpty('lease_term');

        $validator
            ->allowEmpty('address');

        $validator
            ->add('zip', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('zip');

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
        $rules->add($rules->existsIn(['type_id'], 'Types'));
        $rules->add($rules->existsIn(['owner_id'], 'Owners'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        return $rules;
    }
}
