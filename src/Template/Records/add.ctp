<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Records'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="records form large-10 medium-9 columns">
    <?= $this->Form->create($record) ?>
    <fieldset>
        <legend><?= __('Add Record') ?></legend>
        <?php
            echo $this->Form->input('description');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
