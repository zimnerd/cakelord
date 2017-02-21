<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Unit'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="units index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('property_id') ?></th>
            <th><?= $this->Paginator->sort('unit_number') ?></th>
            <th><?= $this->Paginator->sort('photo') ?></th>
            <th><?= $this->Paginator->sort('photo_dir') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            <th><?= $this->Paginator->sort('size') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($units as $unit): ?>
        <tr>
            <td><?= $this->Number->format($unit->id) ?></td>
            <td>
                <?= $unit->has('property') ? $this->Html->link($unit->property->name, ['controller' => 'Properties', 'action' => 'view', $unit->property->id]) : '' ?>
            </td>
            <td><?= h($unit->unit_number) ?></td>
            <td><?= h($unit->photo) ?></td>
            <td><?= h($unit->photo_dir) ?></td>
            <td><?= h($unit->status) ?></td>
            <td><?= h($unit->size) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $unit->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $unit->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $unit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unit->id)]) ?>
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
