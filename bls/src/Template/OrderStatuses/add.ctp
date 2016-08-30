<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Order Statuses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Order Update Statuses'), ['controller' => 'OrderUpdateStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Update Status'), ['controller' => 'OrderUpdateStatuses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderStatuses form large-9 medium-8 columns content">
    <?= $this->Form->create($orderStatus) ?>
    <fieldset>
        <legend><?= __('Add Order Status') ?></legend>
        <?php
            echo $this->Form->input('code');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
