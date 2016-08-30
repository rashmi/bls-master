<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productsAttr->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productsAttr->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products Attrs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsAttrs form large-9 medium-8 columns content">
    <?= $this->Form->create($productsAttr) ?>
    <fieldset>
        <legend><?= __('Edit Products Attr') ?></legend>
        <?php
            echo $this->Form->input('product_id', ['options' => $products]);
            echo $this->Form->input('brand_id', ['options' => $brands]);
            echo $this->Form->input('model');
            echo $this->Form->input('video_link');
            echo $this->Form->input('size');
            echo $this->Form->input('weight');
            echo $this->Form->input('packaging');
            echo $this->Form->input('uom');
            echo $this->Form->input('quantity');
            echo $this->Form->input('attributes');
            echo $this->Form->input('main_promo_1');
            echo $this->Form->input('main_promo_2');
            echo $this->Form->input('main_promo_3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
