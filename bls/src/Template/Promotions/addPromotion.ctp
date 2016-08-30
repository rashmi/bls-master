<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Promotions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="promotions form large-9 medium-8 columns content">
    <?= $this->Form->create($promotion) ?>
    <fieldset>
        <legend><?= __('Add Promotion') ?></legend>
        <?php
            echo $this->Form->input('promo_code');
            echo $this->Form->input('product_id', ['options' => $products]);
            echo $this->Form->input('discounted_amount_parent');
            echo $this->Form->input('quantity_parent');
            echo $this->Form->input('start_date');
            echo $this->Form->input('end_date');
            echo $this->Form->input('associated_product');
            echo $this->Form->input('child_product_id');
            echo $this->Form->input('discounted_amount_child');
            echo $this->Form->input('quantity_child');
            echo $this->Form->input('discount_parent_in');
            echo $this->Form->input('discount_child_in');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
