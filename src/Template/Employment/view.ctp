<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Employment'), ['action' => 'edit', $employment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employment'), ['action' => 'delete', $employment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employment'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="employment view large-10 medium-9 columns">
    <h2><?= h($employment->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Tenant') ?></h6>
            <p><?= $employment->has('tenant') ? $this->Html->link($employment->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $employment->tenant->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Employer Name') ?></h6>
            <p><?= h($employment->employer_name) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= $employment->has('city') ? $this->Html->link($employment->city->name, ['controller' => 'Cities', 'action' => 'view', $employment->city->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Employer Phone') ?></h6>
            <p><?= h($employment->employer_phone) ?></p>
            <h6 class="subheader"><?= __('Occupation') ?></h6>
            <p><?= h($employment->occupation) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($employment->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Employed From') ?></h6>
            <p><?= h($employment->employed_from) ?></p>
            <h6 class="subheader"><?= __('Employed Till') ?></h6>
            <p><?= h($employment->employed_till) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Notes') ?></h6>
            <?= $this->Text->autoParagraph(h($employment->notes)) ?>
        </div>
    </div>
</div>
