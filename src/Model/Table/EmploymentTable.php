<?php
namespace App\Model\Table;

use App\Model\Entity\Employment;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employment Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tenants
 * @property \Cake\ORM\Association\BelongsTo $Cities
 */
class EmploymentTable extends Table
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

        $this->table('employment');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Tenants', [
            'foreignKey' => 'tenant_id'
        ]);
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id'
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
            ->allowEmpty('employer_name');

        $validator
            ->allowEmpty('employer_phone');

        $validator
            ->add('employed_from', 'valid', ['rule' => 'date'])
            ->allowEmpty('employed_from');

        $validator
            ->add('employed_till', 'valid', ['rule' => 'date'])
            ->allowEmpty('employed_till');

        $validator
            ->allowEmpty('occupation');

        $validator
            ->allowEmpty('notes');

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
        $rules->add($rules->existsIn(['tenant_id'], 'Tenants'));
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        return $rules;
    }
}
