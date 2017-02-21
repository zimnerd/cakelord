<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $groupsPermission->permission_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $groupsPermission->permission_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Groups Permissions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="groupsPermissions form large-10 medium-9 columns">
    <?= $this->Form->create($groupsPermission) ?>
    <fieldset>
        <legend><?= __('Edit Groups Permission') ?></legend>
        <?php
            echo $this->Form->input('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->input('tableName');
            echo $this->Form->input('allowInsert');
            echo $this->Form->input('allowView');
            echo $this->Form->input('allowEdit');
            echo $this->Form->input('allowDelete');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
