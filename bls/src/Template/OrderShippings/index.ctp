<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order Shipping'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderShippings index large-9 medium-8 columns content">
    <h3><?= __('Order Shippings') ?></h3>
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
            <?php foreach ($orderShippings as $orderShipping): ?>
            <tr>
                <td><?= $this->Number->format($orderShipping->id) ?></td>
                <td><?= $orderShipping->has('order') ? $this->Html->link($orderShipping->order->id, ['controller' => 'Orders', 'action' => 'view', $orderShipping->order->id]) : '' ?></td>
                <td><?= h($orderShipping->firstname) ?></td>
                <td><?= h($orderShipping->lastname) ?></td>
                <td><?= h($orderShipping->email) ?></td>
                <td><?= h($orderShipping->street_address) ?></td>
                <td><?= h($orderShipping->city) ?></td>
                <td><?= h($orderShipping->country) ?></td>
                <td><?= h($orderShipping->pincode) ?></td>
                <td><?= h($orderShipping->phone) ?></td>
                <td><?= h($orderShipping->mobile) ?></td>
                <td><?= h($orderShipping->created) ?></td>
                <td><?= h($orderShipping->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orderShipping->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderShipping->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderShipping->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderShipping->id)]) ?>
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
