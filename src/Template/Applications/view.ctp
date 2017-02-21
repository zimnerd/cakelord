<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Application'), ['action' => 'edit', $application->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Application'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="applications view large-10 medium-9 columns">
    <h2><?= h($application->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Tenant') ?></h6>
            <p><?= $application->has('tenant') ? $this->Html->link($application->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $application->tenant->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= h($application->status) ?></p>
            <h6 class="subheader"><?= __('Property') ?></h6>
            <p><?= $application->has('property') ? $this->Html->link($application->property->name, ['controller' => 'Properties', 'action' => 'view', $application->property->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Unit') ?></h6>
            <p><?= $application->has('unit') ? $this->Html->link($application->unit->id, ['controller' => 'Units', 'action' => 'view', $application->unit->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= $application->has('type') ? $this->Html->link($application->type->name, ['controller' => 'Types', 'action' => 'view', $application->type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Total Number Of Occupants') ?></h6>
            <p><?= h($application->total_number_of_occupants) ?></p>
            <h6 class="subheader"><?= __('Recurring Charges Frequency') ?></h6>
            <p><?= h($application->recurring_charges_frequency) ?></p>
            <h6 class="subheader"><?= __('Emergency Contact') ?></h6>
            <p><?= h($application->emergency_contact) ?></p>
            <h6 class="subheader"><?= __('Co Signer Details') ?></h6>
            <p><?= h($application->co_signer_details) ?></p>
            <h6 class="subheader"><?= __('Agreement') ?></h6>
            <p><?= h($application->agreement) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($application->id) ?></p>
            <h6 class="subheader"><?= __('Rent') ?></h6>
            <p><?= $this->Number->format($application->rent) ?></p>
            <h6 class="subheader"><?= __('Security Deposit') ?></h6>
            <p><?= $this->Number->format($application->security_deposit) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Start Date') ?></h6>
            <p><?= h($application->start_date) ?></p>
            <h6 class="subheader"><?= __('End Date') ?></h6>
            <p><?= h($application->end_date) ?></p>
            <h6 class="subheader"><?= __('Next Due Date') ?></h6>
            <p><?= h($application->next_due_date) ?></p>
            <h6 class="subheader"><?= __('Security Deposit Date') ?></h6>
            <p><?= h($application->security_deposit_date) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Notes') ?></h6>
            <?= $this->Text->autoParagraph(h($application->notes)) ?>
        </div>
    </div>
</div>
