<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order Shipping'), ['action' => 'edit', $orderShipping->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Shipping'), ['action' => 'delete', $orderShipping->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderShipping->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Shippings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Shipping'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orderShippings view large-9 medium-8 columns content">
    <h3><?= h($orderShipping->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= $orderShipping->has('order') ? $this->Html->link($orderShipping->order->id, ['controller' => 'Orders', 'action' => 'view', $orderShipping->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Firstname') ?></th>
            <td><?= h($orderShipping->firstname) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname') ?></th>
            <td><?= h($orderShipping->lastname) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($orderShipping->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Street Address') ?></th>
            <td><?= h($orderShipping->street_address) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($orderShipping->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($orderShipping->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Pincode') ?></th>
            <td><?= h($orderShipping->pincode) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($orderShipping->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile') ?></th>
            <td><?= h($orderShipping->mobile) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($orderShipping->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($orderShipping->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($orderShipping->modified) ?></td>
        </tr>
    </table>
</div>
