<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Order Shippings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderShippings form large-9 medium-8 columns content">
    <?= $this->Form->create($orderShipping) ?>
    <fieldset>
        <legend><?= __('Add Order Shipping') ?></legend>
        <?php
            echo $this->Form->input('order_id', ['options' => $orders]);
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('email');
            echo $this->Form->input('street_address');
            echo $this->Form->input('city');
            echo $this->Form->input('country');
            echo $this->Form->input('pincode');
            echo $this->Form->input('phone');
            echo $this->Form->input('mobile');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
