<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Products Category'), ['action' => 'edit', $productsCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products Category'), ['action' => 'delete', $productsCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productsCategories view large-9 medium-8 columns content">
    <h3><?= h($productsCategory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Category') ?></th>
            <td><?= $productsCategory->has('category') ? $this->Html->link($productsCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $productsCategory->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $productsCategory->has('product') ? $this->Html->link($productsCategory->product->title, ['controller' => 'Products', 'action' => 'view', $productsCategory->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($productsCategory->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($productsCategory->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($productsCategory->modified) ?></td>
        </tr>
    </table>
</div>
