<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Permission'), ['action' => 'edit', $permission->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Permission'), ['action' => 'delete', $permission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permission->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="permissions view large-10 medium-9 columns">
    <h2><?= h($permission->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $permission->has('user') ? $this->Html->link($permission->user->id, ['controller' => 'Users', 'action' => 'view', $permission->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('TableName') ?></h6>
            <p><?= h($permission->tableName) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($permission->id) ?></p>
            <h6 class="subheader"><?= __('AllowInsert') ?></h6>
            <p><?= $this->Number->format($permission->allowInsert) ?></p>
            <h6 class="subheader"><?= __('AllowView') ?></h6>
            <p><?= $this->Number->format($permission->allowView) ?></p>
            <h6 class="subheader"><?= __('AllowEdit') ?></h6>
            <p><?= $this->Number->format($permission->allowEdit) ?></p>
            <h6 class="subheader"><?= __('AllowDelete') ?></h6>
            <p><?= $this->Number->format($permission->allowDelete) ?></p>
            <h6 class="subheader"><?= __('Permission Id') ?></h6>
            <p><?= $this->Number->format($permission->permission_id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Permissions') ?></h4>
    <?php if (!empty($permission->permissions)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('TableName') ?></th>
            <th><?= __('AllowInsert') ?></th>
            <th><?= __('AllowView') ?></th>
            <th><?= __('AllowEdit') ?></th>
            <th><?= __('AllowDelete') ?></th>
            <th><?= __('Permission Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($permission->permissions as $permissions): ?>
        <tr>
            <td><?= h($permissions->id) ?></td>
            <td><?= h($permissions->user_id) ?></td>
            <td><?= h($permissions->tableName) ?></td>
            <td><?= h($permissions->allowInsert) ?></td>
            <td><?= h($permissions->allowView) ?></td>
            <td><?= h($permissions->allowEdit) ?></td>
            <td><?= h($permissions->allowDelete) ?></td>
            <td><?= h($permissions->permission_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Permissions', 'action' => 'view', $permissions->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Permissions', 'action' => 'edit', $permissions->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Permissions', 'action' => 'delete', $permissions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permissions->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Groups') ?></h4>
    <?php if (!empty($permission->groups)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('AllowSignup') ?></th>
            <th><?= __('NeedsApproval') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($permission->groups as $groups): ?>
        <tr>
            <td><?= h($groups->id) ?></td>
            <td><?= h($groups->name) ?></td>
            <td><?= h($groups->description) ?></td>
            <td><?= h($groups->allowSignup) ?></td>
            <td><?= h($groups->needsApproval) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Groups', 'action' => 'view', $groups->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Groups', 'action' => 'edit', $groups->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Groups', 'action' => 'delete', $groups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groups->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
