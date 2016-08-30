<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Products Related'), ['action' => 'edit', $productsRelated->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products Related'), ['action' => 'delete', $productsRelated->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsRelated->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Relateds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Related'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productsRelateds view large-9 medium-8 columns content">
    <h3><?= h($productsRelated->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $productsRelated->has('product') ? $this->Html->link($productsRelated->product->title, ['controller' => 'Products', 'action' => 'view', $productsRelated->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Related Product 1') ?></th>
            <td><?= h($productsRelated->related_product_1) ?></td>
        </tr>
        <tr>
            <th><?= __('Related Product 2') ?></th>
            <td><?= h($productsRelated->related_product_2) ?></td>
        </tr>
        <tr>
            <th><?= __('Related Product 3') ?></th>
            <td><?= h($productsRelated->related_product_3) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($productsRelated->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($productsRelated->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($productsRelated->modified) ?></td>
        </tr>
    </table>
</div>
