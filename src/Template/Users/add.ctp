<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('fullname');
            echo $this->Form->input('password');
            echo $this->Form->input('email');
            echo $this->Form->input('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->input('isBanned');
            echo $this->Form->input('isApproved');
            echo $this->Form->input('custom1');
            echo $this->Form->input('custom2');
            echo $this->Form->input('custom3');
            echo $this->Form->input('custom4');
            echo $this->Form->input('comments');
            echo $this->Form->input('pass_reset_key');
            echo $this->Form->input('pass_reset_expiry');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
