<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Owner'), ['action' => 'edit', $owner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Owner'), ['action' => 'delete', $owner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rental History'), ['controller' => 'RentalHistory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental History'), ['controller' => 'RentalHistory', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="owners view large-10 medium-9 columns">
    <h2><?= h($owner->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($owner->name) ?></p>
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($owner->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($owner->last_name) ?></p>
            <h6 class="subheader"><?= __('Company Name') ?></h6>
            <p><?= h($owner->company_name) ?></p>
            <h6 class="subheader"><?= __('Primary Email') ?></h6>
            <p><?= h($owner->primary_email) ?></p>
            <h6 class="subheader"><?= __('Alternate Email') ?></h6>
            <p><?= h($owner->alternate_email) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($owner->phone) ?></p>
            <h6 class="subheader"><?= __('Country') ?></h6>
            <p><?= $owner->has('country') ? $this->Html->link($owner->country->name, ['controller' => 'Countries', 'action' => 'view', $owner->country->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= h($owner->address) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= $owner->has('city') ? $this->Html->link($owner->city->name, ['controller' => 'Cities', 'action' => 'view', $owner->city->id]) : '' ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= $owner->has('state') ? $this->Html->link($owner->state->name, ['controller' => 'States', 'action' => 'view', $owner->state->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($owner->id) ?></p>
            <h6 class="subheader"><?= __('Zip') ?></h6>
            <p><?= $this->Number->format($owner->zip) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Of Birth') ?></h6>
            <p><?= h($owner->date_of_birth) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($owner->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($owner->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Comments') ?></h6>
            <?= $this->Text->autoParagraph(h($owner->comments)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Properties') ?></h4>
    <?php if (!empty($owner->properties)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Type Id') ?></th>
            <th><?= __('Number Of Units') ?></th>
            <th><?= __('Photo') ?></th>
            <th><?= __('Photo Dir') ?></th>
            <th><?= __('Owner Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Operating Account') ?></th>
            <th><?= __('Property Reserve') ?></th>
            <th><?= __('Lease Term') ?></th>
            <th><?= __('Country Id') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('City Id') ?></th>
            <th><?= __('State Id') ?></th>
            <th><?= __('Zip') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($owner->properties as $properties): ?>
        <tr>
            <td><?= h($properties->id) ?></td>
            <td><?= h($properties->name) ?></td>
            <td><?= h($properties->type_id) ?></td>
            <td><?= h($properties->number_of_units) ?></td>
            <td><?= h($properties->photo) ?></td>
            <td><?= h($properties->photo_dir) ?></td>
            <td><?= h($properties->owner_id) ?></td>
            <td><?= h($properties->user_id) ?></td>
            <td><?= h($properties->operating_account) ?></td>
            <td><?= h($properties->property_reserve) ?></td>
            <td><?= h($properties->lease_term) ?></td>
            <td><?= h($properties->country_id) ?></td>
            <td><?= h($properties->address) ?></td>
            <td><?= h($properties->city_id) ?></td>
            <td><?= h($properties->state_id) ?></td>
            <td><?= h($properties->zip) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Properties', 'action' => 'view', $properties->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Properties', 'action' => 'edit', $properties->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Properties', 'action' => 'delete', $properties->id], ['confirm' => __('Are you sure you want to delete # {0}?', $properties->id)]) ?>

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
    <?php if (!empty($owner->rental_history)): ?>
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
        <?php foreach ($owner->rental_history as $rentalHistory): ?>
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
