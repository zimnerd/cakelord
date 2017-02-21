<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tenant'), ['action' => 'edit', $tenant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tenant'), ['action' => 'delete', $tenant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employment'), ['controller' => 'Employment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employment'), ['controller' => 'Employment', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List References'), ['controller' => 'References', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reference'), ['controller' => 'References', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rental History'), ['controller' => 'RentalHistory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental History'), ['controller' => 'RentalHistory', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tenants view large-10 medium-9 columns">
    <h2><?= h($tenant->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($tenant->name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($tenant->last_name) ?></p>
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($tenant->first_name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($tenant->email) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($tenant->phone) ?></p>
            <h6 class="subheader"><?= __('Driver License Number') ?></h6>
            <p><?= h($tenant->driver_license_number) ?></p>
            <h6 class="subheader"><?= __('Country') ?></h6>
            <p><?= $tenant->has('country') ? $this->Html->link($tenant->country->name, ['controller' => 'Countries', 'action' => 'view', $tenant->country->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Requested Lease Term') ?></h6>
            <p><?= h($tenant->requested_lease_term) ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= h($tenant->status) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($tenant->id) ?></p>
            <h6 class="subheader"><?= __('Monthly Gross Pay') ?></h6>
            <p><?= $this->Number->format($tenant->monthly_gross_pay) ?></p>
            <h6 class="subheader"><?= __('Additional Income') ?></h6>
            <p><?= $this->Number->format($tenant->additional_income) ?></p>
            <h6 class="subheader"><?= __('Assets') ?></h6>
            <p><?= $this->Number->format($tenant->assets) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Birth Date') ?></h6>
            <p><?= h($tenant->birth_date) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Notes') ?></h6>
            <?= $this->Text->autoParagraph(h($tenant->notes)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Applications') ?></h4>
    <?php if (!empty($tenant->applications)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Tenant Id') ?></th>
            <th><?= __('Status') ?></th>
            <th><?= __('Property Id') ?></th>
            <th><?= __('Unit Id') ?></th>
            <th><?= __('Type Id') ?></th>
            <th><?= __('Total Number Of Occupants') ?></th>
            <th><?= __('Start Date') ?></th>
            <th><?= __('End Date') ?></th>
            <th><?= __('Recurring Charges Frequency') ?></th>
            <th><?= __('Next Due Date') ?></th>
            <th><?= __('Rent') ?></th>
            <th><?= __('Security Deposit') ?></th>
            <th><?= __('Security Deposit Date') ?></th>
            <th><?= __('Emergency Contact') ?></th>
            <th><?= __('Co Signer Details') ?></th>
            <th><?= __('Notes') ?></th>
            <th><?= __('Agreement') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($tenant->applications as $applications): ?>
        <tr>
            <td><?= h($applications->id) ?></td>
            <td><?= h($applications->tenant_id) ?></td>
            <td><?= h($applications->status) ?></td>
            <td><?= h($applications->property_id) ?></td>
            <td><?= h($applications->unit_id) ?></td>
            <td><?= h($applications->type_id) ?></td>
            <td><?= h($applications->total_number_of_occupants) ?></td>
            <td><?= h($applications->start_date) ?></td>
            <td><?= h($applications->end_date) ?></td>
            <td><?= h($applications->recurring_charges_frequency) ?></td>
            <td><?= h($applications->next_due_date) ?></td>
            <td><?= h($applications->rent) ?></td>
            <td><?= h($applications->security_deposit) ?></td>
            <td><?= h($applications->security_deposit_date) ?></td>
            <td><?= h($applications->emergency_contact) ?></td>
            <td><?= h($applications->co_signer_details) ?></td>
            <td><?= h($applications->notes) ?></td>
            <td><?= h($applications->agreement) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Applications', 'action' => 'view', $applications->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Applications', 'action' => 'edit', $applications->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Applications', 'action' => 'delete', $applications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applications->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Employment') ?></h4>
    <?php if (!empty($tenant->employment)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Tenant Id') ?></th>
            <th><?= __('Employer Name') ?></th>
            <th><?= __('City Id') ?></th>
            <th><?= __('Employer Phone') ?></th>
            <th><?= __('Employed From') ?></th>
            <th><?= __('Employed Till') ?></th>
            <th><?= __('Occupation') ?></th>
            <th><?= __('Notes') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($tenant->employment as $employment): ?>
        <tr>
            <td><?= h($employment->id) ?></td>
            <td><?= h($employment->tenant_id) ?></td>
            <td><?= h($employment->employer_name) ?></td>
            <td><?= h($employment->city_id) ?></td>
            <td><?= h($employment->employer_phone) ?></td>
            <td><?= h($employment->employed_from) ?></td>
            <td><?= h($employment->employed_till) ?></td>
            <td><?= h($employment->occupation) ?></td>
            <td><?= h($employment->notes) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Employment', 'action' => 'view', $employment->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Employment', 'action' => 'edit', $employment->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employment', 'action' => 'delete', $employment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employment->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related References') ?></h4>
    <?php if (!empty($tenant->references)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Tenant Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Phone') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($tenant->references as $references): ?>
        <tr>
            <td><?= h($references->id) ?></td>
            <td><?= h($references->tenant_id) ?></td>
            <td><?= h($references->name) ?></td>
            <td><?= h($references->phone) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'References', 'action' => 'view', $references->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'References', 'action' => 'edit', $references->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'References', 'action' => 'delete', $references->id], ['confirm' => __('Are you sure you want to delete # {0}?', $references->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Rental History') ?></h4>
    <?php if (!empty($tenant->rental_history)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Tenant Id') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('Owner Id') ?></th>
            <th><?= __('Owner Name') ?></th>
            <th><?= __('Monthly Rent') ?></th>
            <th><?= __('Duration Of Residency From') ?></th>
            <th><?= __('To') ?></th>
            <th><?= __('Reason For Leaving') ?></th>
            <th><?= __('Notes') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($tenant->rental_history as $rentalHistory): ?>
        <tr>
            <td><?= h($rentalHistory->id) ?></td>
            <td><?= h($rentalHistory->tenant_id) ?></td>
            <td><?= h($rentalHistory->address) ?></td>
            <td><?= h($rentalHistory->owner_id) ?></td>
            <td><?= h($rentalHistory->owner_name) ?></td>
            <td><?= h($rentalHistory->monthly_rent) ?></td>
            <td><?= h($rentalHistory->duration_of_residency_from) ?></td>
            <td><?= h($rentalHistory->to) ?></td>
            <td><?= h($rentalHistory->reason_for_leaving) ?></td>
            <td><?= h($rentalHistory->notes) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'RentalHistory', 'action' => 'view', $rentalHistory->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'RentalHistory', 'action' => 'edit', $rentalHistory->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'RentalHistory', 'action' => 'delete', $rentalHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rentalHistory->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
