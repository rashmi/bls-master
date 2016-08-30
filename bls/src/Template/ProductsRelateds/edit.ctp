<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productsRelated->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productsRelated->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products Relateds'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsRelateds form large-9 medium-8 columns content">
    <?= $this->Form->create($productsRelated) ?>
    <fieldset>
        <legend><?= __('Edit Products Related') ?></legend>
        <?php
            echo $this->Form->input('product_id', ['options' => $products]);
            echo $this->Form->input('related_product_1');
            echo $this->Form->input('related_product_2');
            echo $this->Form->input('related_product_3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
