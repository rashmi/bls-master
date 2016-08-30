<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Orders Shipping'), ['action' => 'edit', $ordersShipping->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orders Shipping'), ['action' => 'delete', $ordersShipping->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersShipping->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders Shippings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orders Shipping'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordersShippings view large-9 medium-8 columns content">
    <h3><?= h($ordersShipping->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= $ordersShipping->has('order') ? $this->Html->link($ordersShipping->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersShipping->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Firstname') ?></th>
            <td><?= h($ordersShipping->firstname) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname') ?></th>
            <td><?= h($ordersShipping->lastname) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($ordersShipping->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Street Address') ?></th>
            <td><?= h($ordersShipping->street_address) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($ordersShipping->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($ordersShipping->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Pincode') ?></th>
            <td><?= h($ordersShipping->pincode) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($ordersShipping->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile') ?></th>
            <td><?= h($ordersShipping->mobile) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ordersShipping->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($ordersShipping->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($ordersShipping->modified) ?></td>
        </tr>
    </table>
</div>
