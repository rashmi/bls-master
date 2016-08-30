<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category Detail'), ['action' => 'edit', $categoryDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category Detail'), ['action' => 'delete', $categoryDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Category Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoryDetails view large-9 medium-8 columns content">
    <h3><?= h($categoryDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Category') ?></th>
            <td><?= $categoryDetail->has('category') ? $this->Html->link($categoryDetail->category->name, ['controller' => 'Categories', 'action' => 'view', $categoryDetail->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($categoryDetail->image) ?></td>
        </tr>
        <tr>
            <th><?= __('Image Dir') ?></th>
            <td><?= h($categoryDetail->image_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoryDetail->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($categoryDetail->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($categoryDetail->modified) ?></td>
        </tr>
    </table>
</div>
