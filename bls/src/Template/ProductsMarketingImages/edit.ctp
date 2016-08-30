<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productsMarketingImage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productsMarketingImage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products Marketing Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsMarketingImages form large-9 medium-8 columns content">
    <?= $this->Form->create($productsMarketingImage) ?>
    <fieldset>
        <legend><?= __('Edit Products Marketing Image') ?></legend>
        <?php
            echo $this->Form->input('product_id', ['options' => $products]);
            echo $this->Form->input('image');
            echo $this->Form->input('image_dir');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
