<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Application'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="applications index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('tenant_id') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            <th><?= $this->Paginator->sort('property_id') ?></th>
            <th><?= $this->Paginator->sort('unit_id') ?></th>
            <th><?= $this->Paginator->sort('type_id') ?></th>
            <th><?= $this->Paginator->sort('total_number_of_occupants') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($applications as $application): ?>
        <tr>
            <td><?= $this->Number->format($application->id) ?></td>
            <td>
                <?= $application->has('tenant') ? $this->Html->link($application->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $application->tenant->id]) : '' ?>
            </td>
            <td><?= h($application->status) ?></td>
            <td>
                <?= $application->has('property') ? $this->Html->link($application->property->name, ['controller' => 'Properties', 'action' => 'view', $application->property->id]) : '' ?>
            </td>
            <td>
                <?= $application->has('unit') ? $this->Html->link($application->unit->id, ['controller' => 'Units', 'action' => 'view', $application->unit->id]) : '' ?>
            </td>
            <td>
                <?= $application->has('type') ? $this->Html->link($application->type->name, ['controller' => 'Types', 'action' => 'view', $application->type->id]) : '' ?>
            </td>
            <td><?= h($application->total_number_of_occupants) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $application->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $application->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id)]) ?>
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
