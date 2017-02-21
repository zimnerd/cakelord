<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Reference'), ['action' => 'edit', $reference->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reference'), ['action' => 'delete', $reference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reference->id)]) ?> </li>
        <li><?= $this->Html->link(__('List References'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reference'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="references view large-10 medium-9 columns">
    <h2><?= h($reference->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Tenant') ?></h6>
            <p><?= $reference->has('tenant') ? $this->Html->link($reference->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $reference->tenant->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($reference->name) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($reference->phone) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($reference->id) ?></p>
        </div>
    </div>
</div>
