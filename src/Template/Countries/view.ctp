<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="countries view large-10 medium-9 columns">
    <h2><?= h($country->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Sortname') ?></h6>
            <p><?= h($country->sortname) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($country->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($country->id) ?></p>
            <h6 class="subheader"><?= __('Phonecode') ?></h6>
            <p><?= $this->Number->format($country->phonecode) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Owners') ?></h4>
    <?php if (!empty($country->owners)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('First Name') ?></th>
            <th><?= __('Last Name') ?></th>
            <th><?= __('Company Name') ?></th>
            <th><?= __('Date Of Birth') ?></th>
            <th><?= __('Primary Email') ?></th>
            <th><?= __('Alternate Email') ?></th>
            <th><?= __('Phone') ?></th>
            <th><?= __('Country Id') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('City Id') ?></th>
            <th><?= __('State Id') ?></th>
            <th><?= __('Zip') ?></th>
            <th><?= __('Comments') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($country->owners as $owners): ?>
        <tr>
            <td><?= h($owners->id) ?></td>
            <td><?= h($owners->name) ?></td>
            <td><?= h($owners->first_name) ?></td>
            <td><?= h($owners->last_name) ?></td>
            <td><?= h($owners->company_name) ?></td>
            <td><?= h($owners->date_of_birth) ?></td>
            <td><?= h($owners->primary_email) ?></td>
            <td><?= h($owners->alternate_email) ?></td>
            <td><?= h($owners->phone) ?></td>
            <td><?= h($owners->country_id) ?></td>
            <td><?= h($owners->address) ?></td>
            <td><?= h($owners->city_id) ?></td>
            <td><?= h($owners->state_id) ?></td>
            <td><?= h($owners->zip) ?></td>
            <td><?= h($owners->comments) ?></td>
            <td><?= h($owners->created) ?></td>
            <td><?= h($owners->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Owners', 'action' => 'view', $owners->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Owners', 'action' => 'edit', $owners->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Owners', 'action' => 'delete', $owners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owners->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Properties') ?></h4>
    <?php if (!empty($country->properties)): ?>
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
        <?php foreach ($country->properties as $properties): ?>
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
    <h4 class="subheader"><?= __('Related States') ?></h4>
    <?php if (!empty($country->states)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Country Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($country->states as $states): ?>
        <tr>
            <td><?= h($states->id) ?></td>
            <td><?= h($states->name) ?></td>
            <td><?= h($states->country_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'States', 'action' => 'view', $states->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'States', 'action' => 'edit', $states->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'States', 'action' => 'delete', $states->id], ['confirm' => __('Are you sure you want to delete # {0}?', $states->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Tenants') ?></h4>
    <?php if (!empty($country->tenants)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Last Name') ?></th>
            <th><?= __('First Name') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Phone') ?></th>
            <th><?= __('Birth Date') ?></th>
            <th><?= __('Driver License Number') ?></th>
            <th><?= __('Country Id') ?></th>
            <th><?= __('Requested Lease Term') ?></th>
            <th><?= __('Monthly Gross Pay') ?></th>
            <th><?= __('Additional Income') ?></th>
            <th><?= __('Assets') ?></th>
            <th><?= __('Status') ?></th>
            <th><?= __('Notes') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($country->tenants as $tenants): ?>
        <tr>
            <td><?= h($tenants->id) ?></td>
            <td><?= h($tenants->name) ?></td>
            <td><?= h($tenants->last_name) ?></td>
            <td><?= h($tenants->first_name) ?></td>
            <td><?= h($tenants->email) ?></td>
            <td><?= h($tenants->phone) ?></td>
            <td><?= h($tenants->birth_date) ?></td>
            <td><?= h($tenants->driver_license_number) ?></td>
            <td><?= h($tenants->country_id) ?></td>
            <td><?= h($tenants->requested_lease_term) ?></td>
            <td><?= h($tenants->monthly_gross_pay) ?></td>
            <td><?= h($tenants->additional_income) ?></td>
            <td><?= h($tenants->assets) ?></td>
            <td><?= h($tenants->status) ?></td>
            <td><?= h($tenants->notes) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Tenants', 'action' => 'view', $tenants->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Tenants', 'action' => 'edit', $tenants->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tenants', 'action' => 'delete', $tenants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenants->id)]) ?>

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
    <?php if (!empty($country->units)): ?>
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
        <?php foreach ($country->units as $units): ?>
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
