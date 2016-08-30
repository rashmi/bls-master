<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Orders Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordersProducts index large-9 medium-8 columns content">
    <h3><?= __('Orders Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('order_id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('product_quantity') ?></th>
                <th><?= $this->Paginator->sort('price') ?></th>
                <th><?= $this->Paginator->sort('discounted_price') ?></th>
                <th><?= $this->Paginator->sort('final_price') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordersProducts as $ordersProduct): ?>
            <tr>
                <td><?= $this->Number->format($ordersProduct->id) ?></td>
                <td><?= $ordersProduct->has('order') ? $this->Html->link($ordersProduct->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersProduct->order->id]) : '' ?></td>
                <td><?= $ordersProduct->has('product') ? $this->Html->link($ordersProduct->product->title, ['controller' => 'Products', 'action' => 'view', $ordersProduct->product->id]) : '' ?></td>
                <td><?= $this->Number->format($ordersProduct->product_quantity) ?></td>
                <td><?= h($ordersProduct->price) ?></td>
                <td><?= h($ordersProduct->discounted_price) ?></td>
                <td><?= h($ordersProduct->final_price) ?></td>
                <td><?= h($ordersProduct->created) ?></td>
                <td><?= h($ordersProduct->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ordersProduct->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordersProduct->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordersProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersProduct->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
