<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Applications'), ['action' => 'index']) ?></li>
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
<div class="applications form large-10 medium-9 columns">
    <?= $this->Form->create($application) ?>
    <fieldset>
        <legend><?= __('Add Application') ?></legend>
        <?php
            echo $this->Form->input('tenant_id', ['options' => $tenants, 'empty' => true]);
            echo $this->Form->input('status');
            echo $this->Form->input('property_id', ['options' => $properties, 'empty' => true]);
            echo $this->Form->input('unit_id', ['options' => $units, 'empty' => true]);
            echo $this->Form->input('type_id', ['options' => $types]);
            echo $this->Form->input('total_number_of_occupants');
            echo $this->Form->input('start_date', ['empty' => true, 'default' => '']);
            echo $this->Form->input('end_date', ['empty' => true, 'default' => '']);
            echo $this->Form->input('recurring_charges_frequency');
            echo $this->Form->input('next_due_date', ['empty' => true, 'default' => '']);
            echo $this->Form->input('rent');
            echo $this->Form->input('security_deposit');
            echo $this->Form->input('security_deposit_date', ['empty' => true, 'default' => '']);
            echo $this->Form->input('emergency_contact');
            echo $this->Form->input('co_signer_details');
            echo $this->Form->input('notes');
            echo $this->Form->input('agreement');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
