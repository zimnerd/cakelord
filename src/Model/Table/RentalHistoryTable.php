<?php
namespace App\Model\Table;

use App\Model\Entity\RentalHistory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RentalHistory Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tenants
 * @property \Cake\ORM\Association\BelongsTo $Owners
 */
class RentalHistoryTable extends Table
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

        $this->table('rental_history');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Tenants', [
            'foreignKey' => 'tenant_id'
        ]);
        $this->belongsTo('Owners', [
            'foreignKey' => 'owner_id'
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
            ->allowEmpty('address');

        $validator
            ->allowEmpty('owner_name');

        $validator
            ->add('monthly_rent', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('monthly_rent');

        $validator
            ->add('duration_of_residency_from', 'valid', ['rule' => 'date'])
            ->allowEmpty('duration_of_residency_from');

        $validator
            ->add('to', 'valid', ['rule' => 'date'])
            ->allowEmpty('to');

        $validator
            ->allowEmpty('reason_for_leaving');

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
        $rules->add($rules->existsIn(['owner_id'], 'Owners'));
        return $rules;
    }
}
