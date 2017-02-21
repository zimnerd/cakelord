<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Employment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="employment index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('tenant_id') ?></th>
            <th><?= $this->Paginator->sort('employer_name') ?></th>
            <th><?= $this->Paginator->sort('city_id') ?></th>
            <th><?= $this->Paginator->sort('employer_phone') ?></th>
            <th><?= $this->Paginator->sort('employed_from') ?></th>
            <th><?= $this->Paginator->sort('employed_till') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($employment as $employment): ?>
        <tr>
            <td><?= $this->Number->format($employment->id) ?></td>
            <td>
                <?= $employment->has('tenant') ? $this->Html->link($employment->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $employment->tenant->id]) : '' ?>
            </td>
            <td><?= h($employment->employer_name) ?></td>
            <td>
                <?= $employment->has('city') ? $this->Html->link($employment->city->name, ['controller' => 'Cities', 'action' => 'view', $employment->city->id]) : '' ?>
            </td>
            <td><?= h($employment->employer_phone) ?></td>
            <td><?= h($employment->employed_from) ?></td>
            <td><?= h($employment->employed_till) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $employment->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employment->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employment->id)]) ?>
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
