<?php
namespace App\Model\Table;

use App\Model\Entity\Group;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Groups Model
 *
 * @property \Cake\ORM\Association\HasMany $Users
 * @property \Cake\ORM\Association\BelongsToMany $Permissions
 */
class GroupsTable extends Table
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

        $this->table('groups');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'group_id'
        ]);
        $this->belongsToMany('Permissions', [
            'foreignKey' => 'group_id',
            'targetForeignKey' => 'permission_id',
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
            ->allowEmpty('name');

        $validator
            ->allowEmpty('description');

        $validator
            ->add('allowSignup', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('allowSignup');

        $validator
            ->add('needsApproval', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('needsApproval');

        return $validator;
    }
}
