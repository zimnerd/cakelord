<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Rental History'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="rentalHistory index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('tenant_id') ?></th>
            <th><?= $this->Paginator->sort('address') ?></th>
            <th><?= $this->Paginator->sort('owner_id') ?></th>
            <th><?= $this->Paginator->sort('owner_name') ?></th>
            <th><?= $this->Paginator->sort('monthly_rent') ?></th>
            <th><?= $this->Paginator->sort('duration_of_residency_from') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($rentalHistory as $rentalHistory): ?>
        <tr>
            <td><?= $this->Number->format($rentalHistory->id) ?></td>
            <td>
                <?= $rentalHistory->has('tenant') ? $this->Html->link($rentalHistory->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $rentalHistory->tenant->id]) : '' ?>
            </td>
            <td><?= h($rentalHistory->address) ?></td>
            <td>
                <?= $rentalHistory->has('owner') ? $this->Html->link($rentalHistory->owner->name, ['controller' => 'Owners', 'action' => 'view', $rentalHistory->owner->id]) : '' ?>
            </td>
            <td><?= h($rentalHistory->owner_name) ?></td>
            <td><?= $this->Number->format($rentalHistory->monthly_rent) ?></td>
            <td><?= h($rentalHistory->duration_of_residency_from) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $rentalHistory->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rentalHistory->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rentalHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rentalHistory->id)]) ?>
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
