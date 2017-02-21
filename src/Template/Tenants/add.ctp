<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Tenants'), ['action' => 'index']) ?></li>
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
<div class="tenants form large-10 medium-9 columns">
    <?= $this->Form->create($tenant) ?>
    <fieldset>
        <legend><?= __('Add Tenant') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('first_name');
            echo $this->Form->input('email');
            echo $this->Form->input('phone');
            echo $this->Form->input('birth_date', ['empty' => true, 'default' => '']);
            echo $this->Form->input('driver_license_number');
            echo $this->Form->input('country_id', ['options' => $countries, 'empty' => true]);
            echo $this->Form->input('requested_lease_term');
            echo $this->Form->input('monthly_gross_pay');
            echo $this->Form->input('additional_income');
            echo $this->Form->input('assets');
            echo $this->Form->input('status');
            echo $this->Form->input('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
