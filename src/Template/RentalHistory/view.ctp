<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Rental History'), ['action' => 'edit', $rentalHistory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rental History'), ['action' => 'delete', $rentalHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rentalHistory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rental History'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental History'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rentalHistory view large-10 medium-9 columns">
    <h2><?= h($rentalHistory->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Tenant') ?></h6>
            <p><?= $rentalHistory->has('tenant') ? $this->Html->link($rentalHistory->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $rentalHistory->tenant->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= h($rentalHistory->address) ?></p>
            <h6 class="subheader"><?= __('Owner') ?></h6>
            <p><?= $rentalHistory->has('owner') ? $this->Html->link($rentalHistory->owner->name, ['controller' => 'Owners', 'action' => 'view', $rentalHistory->owner->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Owner Name') ?></h6>
            <p><?= h($rentalHistory->owner_name) ?></p>
            <h6 class="subheader"><?= __('Reason For Leaving') ?></h6>
            <p><?= h($rentalHistory->reason_for_leaving) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($rentalHistory->id) ?></p>
            <h6 class="subheader"><?= __('Monthly Rent') ?></h6>
            <p><?= $this->Number->format($rentalHistory->monthly_rent) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Duration Of Residency From') ?></h6>
            <p><?= h($rentalHistory->duration_of_residency_from) ?></p>
            <h6 class="subheader"><?= __('To') ?></h6>
            <p><?= h($rentalHistory->to) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Notes') ?></h6>
            <?= $this->Text->autoParagraph(h($rentalHistory->notes)) ?>
        </div>
    </div>
</div>
