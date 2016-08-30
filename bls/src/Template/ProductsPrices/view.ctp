<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Products Price'), ['action' => 'edit', $productsPrice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products Price'), ['action' => 'delete', $productsPrice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsPrice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Prices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Price'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productsPrices view large-9 medium-8 columns content">
    <h3><?= h($productsPrice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $productsPrice->has('product') ? $this->Html->link($productsPrice->product->title, ['controller' => 'Products', 'action' => 'view', $productsPrice->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Net Price') ?></th>
            <td><?= h($productsPrice->net_price) ?></td>
        </tr>
        <tr>
            <th><?= __('Sale Price') ?></th>
            <td><?= h($productsPrice->sale_price) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($productsPrice->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($productsPrice->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($productsPrice->modified) ?></td>
        </tr>
    </table>
</div>
