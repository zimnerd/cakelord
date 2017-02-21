<?php
namespace App\Model\Table;

use App\Model\Entity\Country;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Countries Model
 *
 * @property \Cake\ORM\Association\HasMany $Owners
 * @property \Cake\ORM\Association\HasMany $Properties
 * @property \Cake\ORM\Association\HasMany $States
 * @property \Cake\ORM\Association\HasMany $Tenants
 * @property \Cake\ORM\Association\HasMany $Units
 */
class CountriesTable extends Table
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

        $this->table('countries');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Owners', [
            'foreignKey' => 'country_id'
        ]);
        $this->hasMany('Properties', [
            'foreignKey' => 'country_id'
        ]);
        $this->hasMany('States', [
            'foreignKey' => 'country_id'
        ]);
        $this->hasMany('Tenants', [
            'foreignKey' => 'country_id'
        ]);
        $this->hasMany('Units', [
            'foreignKey' => 'country_id'
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
            ->requirePresence('sortname', 'create')
            ->notEmpty('sortname');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->add('phonecode', 'valid', ['rule' => 'numeric'])
            ->requirePresence('phonecode', 'create')
            ->notEmpty('phonecode');

        return $validator;
    }
}
