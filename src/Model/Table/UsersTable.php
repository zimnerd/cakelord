<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Groups
 * @property \Cake\ORM\Association\HasMany $Permissions
 * @property \Cake\ORM\Association\HasMany $Properties
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id'
        ]);
        $this->hasMany('Permissions', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Properties', [
            'foreignKey' => 'user_id'
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
            ->allowEmpty('username');

        $validator
            ->allowEmpty('fullname');

        $validator
            ->allowEmpty('password');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email');

        $validator
            ->add('isBanned', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('isBanned');

        $validator
            ->add('isApproved', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('isApproved');

        $validator
            ->allowEmpty('custom1');

        $validator
            ->allowEmpty('custom2');

        $validator
            ->allowEmpty('custom3');

        $validator
            ->allowEmpty('custom4');

        $validator
            ->allowEmpty('comments');

        $validator
            ->allowEmpty('pass_reset_key');

        $validator
            ->add('pass_reset_expiry', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('pass_reset_expiry');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));
        return $rules;
    }
}
