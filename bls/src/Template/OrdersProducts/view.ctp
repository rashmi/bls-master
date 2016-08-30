<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Orders Product'), ['action' => 'edit', $ordersProduct->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orders Product'), ['action' => 'delete', $ordersProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersProduct->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orders Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordersProducts view large-9 medium-8 columns content">
    <h3><?= h($ordersProduct->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= $ordersProduct->has('order') ? $this->Html->link($ordersProduct->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersProduct->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $ordersProduct->has('product') ? $this->Html->link($ordersProduct->product->title, ['controller' => 'Products', 'action' => 'view', $ordersProduct->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= h($ordersProduct->price) ?></td>
        </tr>
        <tr>
            <th><?= __('Discounted Price') ?></th>
            <td><?= h($ordersProduct->discounted_price) ?></td>
        </tr>
        <tr>
            <th><?= __('Final Price') ?></th>
            <td><?= h($ordersProduct->final_price) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ordersProduct->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Product Quantity') ?></th>
            <td><?= $this->Number->format($ordersProduct->product_quantity) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($ordersProduct->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($ordersProduct->modified) ?></td>
        </tr>
    </table>
</div>
