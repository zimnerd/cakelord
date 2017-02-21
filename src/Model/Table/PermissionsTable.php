<?php
namespace App\Model\Table;

use App\Model\Entity\Permission;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Permissions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Permissions
 * @property \Cake\ORM\Association\HasMany $Permissions
 * @property \Cake\ORM\Association\BelongsToMany $Groups
 */
class PermissionsTable extends Table
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

        $this->table('permissions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Permissions', [
            'foreignKey' => 'permission_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Permissions', [
            'foreignKey' => 'permission_id'
        ]);
        $this->belongsToMany('Groups', [
            'foreignKey' => 'permission_id',
            'targetForeignKey' => 'group_id',
            'joinTable' => 'groups_permissions'
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
            ->allowEmpty('tableName');

        $validator
            ->add('allowInsert', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('allowInsert');

        $validator
            ->add('allowView', 'valid', ['rule' => 'numeric'])
            ->requirePresence('allowView', 'create')
            ->notEmpty('allowView');

        $validator
            ->add('allowEdit', 'valid', ['rule' => 'numeric'])
            ->requirePresence('allowEdit', 'create')
            ->notEmpty('allowEdit');

        $validator
            ->add('allowDelete', 'valid', ['rule' => 'numeric'])
            ->requirePresence('allowDelete', 'create')
            ->notEmpty('allowDelete');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['permission_id'], 'Permissions'));
        return $rules;
    }
}
