<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoryDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoryDetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Category Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoryDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($categoryDetail, ['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Edit Category Detail') ?></legend>
        <?php
            echo $this->Form->input('category_id', ['options' => $categories]);
            echo $this->Form->input('image', ['type'=>'file']);
            echo $this->Form->input('image_dir', ['type'=>'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
