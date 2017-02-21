<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Employment'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="employment form large-10 medium-9 columns">
    <?= $this->Form->create($employment) ?>
    <fieldset>
        <legend><?= __('Add Employment') ?></legend>
        <?php
            echo $this->Form->input('tenant_id', ['options' => $tenants, 'empty' => true]);
            echo $this->Form->input('employer_name');
            echo $this->Form->input('city_id', ['options' => $cities, 'empty' => true]);
            echo $this->Form->input('employer_phone');
            echo $this->Form->input('employed_from', ['empty' => true, 'default' => '']);
            echo $this->Form->input('employed_till', ['empty' => true, 'default' => '']);
            echo $this->Form->input('occupation');
            echo $this->Form->input('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
