<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reference->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reference->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List References'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="references form large-10 medium-9 columns">
    <?= $this->Form->create($reference) ?>
    <fieldset>
        <legend><?= __('Edit Reference') ?></legend>
        <?php
            echo $this->Form->input('tenant_id', ['options' => $tenants, 'empty' => true]);
            echo $this->Form->input('name');
            echo $this->Form->input('phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
