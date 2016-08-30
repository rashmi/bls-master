<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products Attrs'), ['controller' => 'ProductsAttrs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Attr'), ['controller' => 'ProductsAttrs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products Images'), ['controller' => 'ProductsImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Image'), ['controller' => 'ProductsImages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products Marketing Images'), ['controller' => 'ProductsMarketingImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Marketing Image'), ['controller' => 'ProductsMarketingImages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products Prices'), ['controller' => 'ProductsPrices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Price'), ['controller' => 'ProductsPrices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products Promos'), ['controller' => 'ProductsPromos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Promo'), ['controller' => 'ProductsPromos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products Relateds'), ['controller' => 'ProductsRelateds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Related'), ['controller' => 'ProductsRelateds', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->input('item_code');
            echo $this->Form->input('title');
            echo $this->Form->input('product_desc');
            echo $this->Form->input('status');
            echo $this->Form->input('orders._ids', ['options' => $orders]);
            echo $this->Form->input('categories._ids', ['options' => $categories]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
