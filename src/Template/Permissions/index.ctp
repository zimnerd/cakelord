<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Permission'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="permissions index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('tableName') ?></th>
            <th><?= $this->Paginator->sort('allowInsert') ?></th>
            <th><?= $this->Paginator->sort('allowView') ?></th>
            <th><?= $this->Paginator->sort('allowEdit') ?></th>
            <th><?= $this->Paginator->sort('allowDelete') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($permissions as $permission): ?>
        <tr>
            <td><?= $this->Number->format($permission->id) ?></td>
            <td>
                <?= $permission->has('user') ? $this->Html->link($permission->user->id, ['controller' => 'Users', 'action' => 'view', $permission->user->id]) : '' ?>
            </td>
            <td><?= h($permission->tableName) ?></td>
            <td><?= $this->Number->format($permission->allowInsert) ?></td>
            <td><?= $this->Number->format($permission->allowView) ?></td>
            <td><?= $this->Number->format($permission->allowEdit) ?></td>
            <td><?= $this->Number->format($permission->allowDelete) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $permission->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $permission->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $permission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permission->id)]) ?>
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
