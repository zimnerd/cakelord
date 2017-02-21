<?php
namespace App\Model\Table;

use App\Model\Entity\Application;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Applications Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tenants
 * @property \Cake\ORM\Association\BelongsTo $Properties
 * @property \Cake\ORM\Association\BelongsTo $Units
 * @property \Cake\ORM\Association\BelongsTo $Types
 */
class ApplicationsTable extends Table
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

        $this->table('applications');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Tenants', [
            'foreignKey' => 'tenant_id'
        ]);
        $this->belongsTo('Properties', [
            'foreignKey' => 'property_id'
        ]);
        $this->belongsTo('Units', [
            'foreignKey' => 'unit_id'
        ]);
        $this->belongsTo('Types', [
            'foreignKey' => 'type_id',
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->allowEmpty('total_number_of_occupants');

        $validator
            ->add('start_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('start_date');

        $validator
            ->add('end_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('end_date');

        $validator
            ->requirePresence('recurring_charges_frequency', 'create')
            ->notEmpty('recurring_charges_frequency');

        $validator
            ->add('next_due_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('next_due_date');

        $validator
            ->add('rent', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('rent');

        $validator
            ->add('security_deposit', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('security_deposit');

        $validator
            ->add('security_deposit_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('security_deposit_date');

        $validator
            ->allowEmpty('emergency_contact');

        $validator
            ->allowEmpty('co_signer_details');

        $validator
            ->allowEmpty('notes');

        $validator
            ->allowEmpty('agreement');

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
        $rules->add($rules->existsIn(['property_id'], 'Properties'));
        $rules->add($rules->existsIn(['unit_id'], 'Units'));
        $rules->add($rules->existsIn(['type_id'], 'Types'));
        return $rules;
    }
}
