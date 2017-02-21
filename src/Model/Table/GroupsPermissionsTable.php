<?php
namespace App\Model\Table;

use App\Model\Entity\GroupsPermission;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GroupsPermissions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Permissions
 * @property \Cake\ORM\Association\BelongsTo $Groups
 */
class GroupsPermissionsTable extends Table
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

        $this->table('groups_permissions');
        $this->displayField('permission_id');
        $this->primaryKey('permission_id');

        $this->belongsTo('Permissions', [
            'foreignKey' => 'permission_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id'
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
        $rules->add($rules->existsIn(['permission_id'], 'Permissions'));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));
        return $rules;
    }
}
