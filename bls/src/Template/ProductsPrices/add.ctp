<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Products Prices'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsPrices form large-9 medium-8 columns content">
    <?= $this->Form->create($productsPrice) ?>
    <fieldset>
        <legend><?= __('Add Products Price') ?></legend>
        <?php
            echo $this->Form->input('product_id', ['options' => $products]);
            echo $this->Form->input('net_price');
            echo $this->Form->input('sale_price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
