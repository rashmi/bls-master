<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Orders Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordersProducts form large-9 medium-8 columns content">
    <?= $this->Form->create($ordersProduct) ?>
    <fieldset>
        <legend><?= __('Add Orders Product') ?></legend>
        <?php
            echo $this->Form->input('order_id', ['options' => $orders]);
            echo $this->Form->input('product_id', ['options' => $products]);
            echo $this->Form->input('product_quantity');
            echo $this->Form->input('price');
            echo $this->Form->input('discounted_price');
            echo $this->Form->input('final_price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
