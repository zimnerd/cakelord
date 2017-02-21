<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $owner->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rental History'), ['controller' => 'RentalHistory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rental History'), ['controller' => 'RentalHistory', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="owners form large-10 medium-9 columns">
    <?= $this->Form->create($owner) ?>
    <fieldset>
        <legend><?= __('Edit Owner') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('company_name');
            echo $this->Form->input('date_of_birth', ['empty' => true, 'default' => '']);
            echo $this->Form->input('primary_email');
            echo $this->Form->input('alternate_email');
            echo $this->Form->input('phone');
            echo $this->Form->input('country_id', ['options' => $countries, 'empty' => true]);
            echo $this->Form->input('address');
            echo $this->Form->input('city_id', ['options' => $cities, 'empty' => true]);
            echo $this->Form->input('state_id', ['options' => $states, 'empty' => true]);
            echo $this->Form->input('zip');
            echo $this->Form->input('comments');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
