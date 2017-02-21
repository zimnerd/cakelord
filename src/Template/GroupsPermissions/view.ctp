<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Groups Permission'), ['action' => 'edit', $groupsPermission->permission_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Groups Permission'), ['action' => 'delete', $groupsPermission->permission_id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupsPermission->permission_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups Permissions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Groups Permission'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="groupsPermissions view large-10 medium-9 columns">
    <h2><?= h($groupsPermission->permission_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Permission') ?></h6>
            <p><?= $groupsPermission->has('permission') ? $this->Html->link($groupsPermission->permission->id, ['controller' => 'Permissions', 'action' => 'view', $groupsPermission->permission->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Group') ?></h6>
            <p><?= $groupsPermission->has('group') ? $this->Html->link($groupsPermission->group->name, ['controller' => 'Groups', 'action' => 'view', $groupsPermission->group->id]) : '' ?></p>
            <h6 class="subheader"><?= __('TableName') ?></h6>
            <p><?= h($groupsPermission->tableName) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('AllowInsert') ?></h6>
            <p><?= $this->Number->format($groupsPermission->allowInsert) ?></p>
            <h6 class="subheader"><?= __('AllowView') ?></h6>
            <p><?= $this->Number->format($groupsPermission->allowView) ?></p>
            <h6 class="subheader"><?= __('AllowEdit') ?></h6>
            <p><?= $this->Number->format($groupsPermission->allowEdit) ?></p>
            <h6 class="subheader"><?= __('AllowDelete') ?></h6>
            <p><?= $this->Number->format($groupsPermission->allowDelete) ?></p>
        </div>
    </div>
</div>
