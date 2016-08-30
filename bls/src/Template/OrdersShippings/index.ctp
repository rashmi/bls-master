<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Orders Shipping'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordersShippings index large-9 medium-8 columns content">
    <h3><?= __('Orders Shippings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('order_id') ?></th>
                <th><?= $this->Paginator->sort('firstname') ?></th>
                <th><?= $this->Paginator->sort('lastname') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('street_address') ?></th>
                <th><?= $this->Paginator->sort('city') ?></th>
                <th><?= $this->Paginator->sort('country') ?></th>
                <th><?= $this->Paginator->sort('pincode') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('mobile') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordersShippings as $ordersShipping): ?>
            <tr>
                <td><?= $this->Number->format($ordersShipping->id) ?></td>
                <td><?= $ordersShipping->has('order') ? $this->Html->link($ordersShipping->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersShipping->order->id]) : '' ?></td>
                <td><?= h($ordersShipping->firstname) ?></td>
                <td><?= h($ordersShipping->lastname) ?></td>
                <td><?= h($ordersShipping->email) ?></td>
                <td><?= h($ordersShipping->street_address) ?></td>
                <td><?= h($ordersShipping->city) ?></td>
                <td><?= h($ordersShipping->country) ?></td>
                <td><?= h($ordersShipping->pincode) ?></td>
                <td><?= h($ordersShipping->phone) ?></td>
                <td><?= h($ordersShipping->mobile) ?></td>
                <td><?= h($ordersShipping->created) ?></td>
                <td><?= h($ordersShipping->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ordersShipping->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordersShipping->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordersShipping->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersShipping->id)]) ?>
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
