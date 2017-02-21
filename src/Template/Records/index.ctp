<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Record'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="records index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th><?= $this->Paginator->sort('type') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($records as $record): ?>
        <tr>
            <td><?= $this->Number->format($record->id) ?></td>
            <td><?= h($record->description) ?></td>
            <td><?= h($record->type) ?></td>
            <td><?= h($record->created) ?></td>
            <td><?= h($record->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $record->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $record->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $record->id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->id)]) ?>
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
