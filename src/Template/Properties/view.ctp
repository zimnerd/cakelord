<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Property'), ['action' => 'edit', $property->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Property'), ['action' => 'delete', $property->id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="properties view large-10 medium-9 columns">
    <h2><?= h($property->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($property->name) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= $property->has('type') ? $this->Html->link($property->type->name, ['controller' => 'Types', 'action' => 'view', $property->type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Photo') ?></h6>
            <p><?= h($property->photo) ?></p>
            <h6 class="subheader"><?= __('Photo Dir') ?></h6>
            <p><?= h($property->photo_dir) ?></p>
            <h6 class="subheader"><?= __('Owner') ?></h6>
            <p><?= $property->has('owner') ? $this->Html->link($property->owner->name, ['controller' => 'Owners', 'action' => 'view', $property->owner->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $property->has('user') ? $this->Html->link($property->user->id, ['controller' => 'Users', 'action' => 'view', $property->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Operating Account') ?></h6>
            <p><?= h($property->operating_account) ?></p>
            <h6 class="subheader"><?= __('Lease Term') ?></h6>
            <p><?= h($property->lease_term) ?></p>
            <h6 class="subheader"><?= __('Country') ?></h6>
            <p><?= $property->has('country') ? $this->Html->link($property->country->name, ['controller' => 'Countries', 'action' => 'view', $property->country->id]) : '' ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= $property->has('city') ? $this->Html->link($property->city->name, ['controller' => 'Cities', 'action' => 'view', $property->city->id]) : '' ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= $property->has('state') ? $this->Html->link($property->state->name, ['controller' => 'States', 'action' => 'view', $property->state->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($property->id) ?></p>
            <h6 class="subheader"><?= __('Number Of Units') ?></h6>
            <p><?= $this->Number->format($property->number_of_units) ?></p>
            <h6 class="subheader"><?= __('Property Reserve') ?></h6>
            <p><?= $this->Number->format($property->property_reserve) ?></p>
            <h6 class="subheader"><?= __('Zip') ?></h6>
            <p><?= $this->Number->format($property->zip) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Address') ?></h6>
            <?= $this->Text->autoParagraph(h($property->address)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Applications') ?></h4>
    <?php if (!empty($property->applications)): ?>
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
        <?php foreach ($property->applications as $applications): ?>
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
    <h4 class="subheader"><?= __('Related Units') ?></h4>
    <?php if (!empty($property->units)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Property Id') ?></th>
            <th><?= __('Unit Number') ?></th>
            <th><?= __('Photo') ?></th>
            <th><?= __('Photo Dir') ?></th>
            <th><?= __('Status') ?></th>
            <th><?= __('Size') ?></th>
            <th><?= __('Country Id') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('City Id') ?></th>
            <th><?= __('State Id') ?></th>
            <th><?= __('Zip') ?></th>
            <th><?= __('Rooms') ?></th>
            <th><?= __('Bathroom') ?></th>
            <th><?= __('Features') ?></th>
            <th><?= __('Market Rent') ?></th>
            <th><?= __('Rental Amount') ?></th>
            <th><?= __('Deposit Amount') ?></th>
            <th><?= __('Description') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($property->units as $units): ?>
        <tr>
            <td><?= h($units->id) ?></td>
            <td><?= h($units->property_id) ?></td>
            <td><?= h($units->unit_number) ?></td>
            <td><?= h($units->photo) ?></td>
            <td><?= h($units->photo_dir) ?></td>
            <td><?= h($units->status) ?></td>
            <td><?= h($units->size) ?></td>
            <td><?= h($units->country_id) ?></td>
            <td><?= h($units->address) ?></td>
            <td><?= h($units->city_id) ?></td>
            <td><?= h($units->state_id) ?></td>
            <td><?= h($units->zip) ?></td>
            <td><?= h($units->rooms) ?></td>
            <td><?= h($units->bathroom) ?></td>
            <td><?= h($units->features) ?></td>
            <td><?= h($units->market_rent) ?></td>
            <td><?= h($units->rental_amount) ?></td>
            <td><?= h($units->deposit_amount) ?></td>
            <td><?= h($units->description) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Units', 'action' => 'view', $units->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Units', 'action' => 'edit', $units->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Units', 'action' => 'delete', $units->id], ['confirm' => __('Are you sure you want to delete # {0}?', $units->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
