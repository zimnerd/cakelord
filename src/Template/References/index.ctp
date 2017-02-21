<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Reference'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="references index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('tenant_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('phone') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($references as $reference): ?>
        <tr>
            <td><?= $this->Number->format($reference->id) ?></td>
            <td>
                <?= $reference->has('tenant') ? $this->Html->link($reference->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $reference->tenant->id]) : '' ?>
            </td>
            <td><?= h($reference->name) ?></td>
            <td><?= h($reference->phone) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $reference->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reference->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reference->id)]) ?>
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
