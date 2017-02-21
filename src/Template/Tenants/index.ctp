<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Tenant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employment'), ['controller' => 'Employment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employment'), ['controller' => 'Employment', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List References'), ['controller' => 'References', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reference'), ['controller' => 'References', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rental History'), ['controller' => 'RentalHistory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rental History'), ['controller' => 'RentalHistory', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="tenants index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('last_name') ?></th>
            <th><?= $this->Paginator->sort('first_name') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('phone') ?></th>
            <th><?= $this->Paginator->sort('birth_date') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tenants as $tenant): ?>
        <tr>
            <td><?= $this->Number->format($tenant->id) ?></td>
            <td><?= h($tenant->name) ?></td>
            <td><?= h($tenant->last_name) ?></td>
            <td><?= h($tenant->first_name) ?></td>
            <td><?= h($tenant->email) ?></td>
            <td><?= h($tenant->phone) ?></td>
            <td><?= h($tenant->birth_date) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $tenant->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tenant->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tenant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenant->id)]) ?>
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
