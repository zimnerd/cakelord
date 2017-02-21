<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Type'), ['action' => 'edit', $type->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type'), ['action' => 'delete', $type->id], ['confirm' => __('Are you sure you want to delete # {0}?', $type->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="types view large-10 medium-9 columns">
    <h2><?= h($type->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($type->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($type->id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($type->description)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Applications') ?></h4>
    <?php if (!empty($type->applications)): ?>
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
        <?php foreach ($type->applications as $applications): ?>
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
    <h4 class="subheader"><?= __('Related Properties') ?></h4>
    <?php if (!empty($type->properties)): ?>
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
        <?php foreach ($type->properties as $properties): ?>
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
