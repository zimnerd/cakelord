<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Groups Permission'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="groupsPermissions index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('permission_id') ?></th>
            <th><?= $this->Paginator->sort('group_id') ?></th>
            <th><?= $this->Paginator->sort('tableName') ?></th>
            <th><?= $this->Paginator->sort('allowInsert') ?></th>
            <th><?= $this->Paginator->sort('allowView') ?></th>
            <th><?= $this->Paginator->sort('allowEdit') ?></th>
            <th><?= $this->Paginator->sort('allowDelete') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($groupsPermissions as $groupsPermission): ?>
        <tr>
            <td>
                <?= $groupsPermission->has('permission') ? $this->Html->link($groupsPermission->permission->id, ['controller' => 'Permissions', 'action' => 'view', $groupsPermission->permission->id]) : '' ?>
            </td>
            <td>
                <?= $groupsPermission->has('group') ? $this->Html->link($groupsPermission->group->name, ['controller' => 'Groups', 'action' => 'view', $groupsPermission->group->id]) : '' ?>
            </td>
            <td><?= h($groupsPermission->tableName) ?></td>
            <td><?= $this->Number->format($groupsPermission->allowInsert) ?></td>
            <td><?= $this->Number->format($groupsPermission->allowView) ?></td>
            <td><?= $this->Number->format($groupsPermission->allowEdit) ?></td>
            <td><?= $this->Number->format($groupsPermission->allowDelete) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $groupsPermission->permission_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $groupsPermission->permission_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $groupsPermission->permission_id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupsPermission->permission_id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
