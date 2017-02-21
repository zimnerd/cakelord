<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Unit'), ['action' => 'edit', $unit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Unit'), ['action' => 'delete', $unit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Units'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="units view large-10 medium-9 columns">
    <h2><?= h($unit->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Property') ?></h6>
            <p><?= $unit->has('property') ? $this->Html->link($unit->property->name, ['controller' => 'Properties', 'action' => 'view', $unit->property->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Unit Number') ?></h6>
            <p><?= h($unit->unit_number) ?></p>
            <h6 class="subheader"><?= __('Photo') ?></h6>
            <p><?= h($unit->photo) ?></p>
            <h6 class="subheader"><?= __('Photo Dir') ?></h6>
            <p><?= h($unit->photo_dir) ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= h($unit->status) ?></p>
            <h6 class="subheader"><?= __('Size') ?></h6>
            <p><?= h($unit->size) ?></p>
            <h6 class="subheader"><?= __('Country') ?></h6>
            <p><?= $unit->has('country') ? $this->Html->link($unit->country->name, ['controller' => 'Countries', 'action' => 'view', $unit->country->id]) : '' ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= $unit->has('city') ? $this->Html->link($unit->city->name, ['controller' => 'Cities', 'action' => 'view', $unit->city->id]) : '' ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= $unit->has('state') ? $this->Html->link($unit->state->name, ['controller' => 'States', 'action' => 'view', $unit->state->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Rooms') ?></h6>
            <p><?= h($unit->rooms) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($unit->id) ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= $this->Number->format($unit->address) ?></p>
            <h6 class="subheader"><?= __('Zip') ?></h6>
            <p><?= $this->Number->format($unit->zip) ?></p>
            <h6 class="subheader"><?= __('Bathroom') ?></h6>
            <p><?= $this->Number->format($unit->bathroom) ?></p>
            <h6 class="subheader"><?= __('Market Rent') ?></h6>
            <p><?= $this->Number->format($unit->market_rent) ?></p>
            <h6 class="subheader"><?= __('Rental Amount') ?></h6>
            <p><?= $this->Number->format($unit->rental_amount) ?></p>
            <h6 class="subheader"><?= __('Deposit Amount') ?></h6>
            <p><?= $this->Number->format($unit->deposit_amount) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Features') ?></h6>
            <?= $this->Text->autoParagraph(h($unit->features)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($unit->description)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Applications') ?></h4>
    <?php if (!empty($unit->applications)): ?>
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
        <?php foreach ($unit->applications as $applications): ?>
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
