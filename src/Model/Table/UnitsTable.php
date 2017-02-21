<?php
namespace App\Model\Table;

use App\Model\Entity\Unit;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Units Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Properties
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\BelongsTo $Cities
 * @property \Cake\ORM\Association\BelongsTo $States
 * @property \Cake\ORM\Association\HasMany $Applications
 */
class UnitsTable extends Table
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

        $this->table('units');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Properties', [
            'foreignKey' => 'property_id'
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
            'foreignKey' => 'unit_id'
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
            ->allowEmpty('unit_number');

        $validator
            ->allowEmpty('photo');

        $validator
            ->allowEmpty('photo_dir');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->allowEmpty('size');

        $validator
            ->add('address', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('address');

        $validator
            ->add('zip', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('zip');

        $validator
            ->allowEmpty('rooms');

        $validator
            ->add('bathroom', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('bathroom');

        $validator
            ->allowEmpty('features');

        $validator
            ->add('market_rent', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('market_rent');

        $validator
            ->add('rental_amount', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('rental_amount');

        $validator
            ->add('deposit_amount', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('deposit_amount');

        $validator
            ->allowEmpty('description');

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
        $rules->add($rules->existsIn(['property_id'], 'Properties'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        return $rules;
    }
}
