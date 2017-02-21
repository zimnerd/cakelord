<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Menu'), ['action' => 'edit', $menu->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Menu'), ['action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Menus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="menus view large-10 medium-9 columns">
    <h2><?= h($menu->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($menu->name) ?></p>
            <h6 class="subheader"><?= __('Controller') ?></h6>
            <p><?= h($menu->controller) ?></p>
            <h6 class="subheader"><?= __('Action') ?></h6>
            <p><?= h($menu->action) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($menu->id) ?></p>
            <h6 class="subheader"><?= __('Parent Menu') ?></h6>
            <p><?= $this->Number->format($menu->parent_menu) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($menu->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($menu->modified) ?></p>
        </div>
    </div>
</div>
