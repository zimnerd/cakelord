<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="groups view large-10 medium-9 columns">
    <h2><?= h($group->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($group->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($group->id) ?></p>
            <h6 class="subheader"><?= __('AllowSignup') ?></h6>
            <p><?= $this->Number->format($group->allowSignup) ?></p>
            <h6 class="subheader"><?= __('NeedsApproval') ?></h6>
            <p><?= $this->Number->format($group->needsApproval) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($group->description)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($group->users)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Username') ?></th>
            <th><?= __('Fullname') ?></th>
            <th><?= __('Password') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Group Id') ?></th>
            <th><?= __('IsBanned') ?></th>
            <th><?= __('IsApproved') ?></th>
            <th><?= __('Custom1') ?></th>
            <th><?= __('Custom2') ?></th>
            <th><?= __('Custom3') ?></th>
            <th><?= __('Custom4') ?></th>
            <th><?= __('Comments') ?></th>
            <th><?= __('Pass Reset Key') ?></th>
            <th><?= __('Pass Reset Expiry') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($group->users as $users): ?>
        <tr>
            <td><?= h($users->id) ?></td>
            <td><?= h($users->username) ?></td>
            <td><?= h($users->fullname) ?></td>
            <td><?= h($users->password) ?></td>
            <td><?= h($users->email) ?></td>
            <td><?= h($users->created) ?></td>
            <td><?= h($users->modified) ?></td>
            <td><?= h($users->group_id) ?></td>
            <td><?= h($users->isBanned) ?></td>
            <td><?= h($users->isApproved) ?></td>
            <td><?= h($users->custom1) ?></td>
            <td><?= h($users->custom2) ?></td>
            <td><?= h($users->custom3) ?></td>
            <td><?= h($users->custom4) ?></td>
            <td><?= h($users->comments) ?></td>
            <td><?= h($users->pass_reset_key) ?></td>
            <td><?= h($users->pass_reset_expiry) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Permissions') ?></h4>
    <?php if (!empty($group->permissions)): ?>
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
        <?php foreach ($group->permissions as $permissions): ?>
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
