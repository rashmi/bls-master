<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order Update Status'), ['action' => 'edit', $orderUpdateStatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Update Status'), ['action' => 'delete', $orderUpdateStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderUpdateStatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Update Statuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Update Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Statuses'), ['controller' => 'OrderStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Status'), ['controller' => 'OrderStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orderUpdateStatuses view large-9 medium-8 columns content">
    <h3><?= h($orderUpdateStatus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= $orderUpdateStatus->has('order') ? $this->Html->link($orderUpdateStatus->order->id, ['controller' => 'Orders', 'action' => 'view', $orderUpdateStatus->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Order Status') ?></th>
            <td><?= $orderUpdateStatus->has('order_status') ? $this->Html->link($orderUpdateStatus->order_status->name, ['controller' => 'OrderStatuses', 'action' => 'view', $orderUpdateStatus->order_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Admin') ?></th>
            <td><?= $orderUpdateStatus->has('admin') ? $this->Html->link($orderUpdateStatus->admin->id, ['controller' => 'Admins', 'action' => 'view', $orderUpdateStatus->admin->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($orderUpdateStatus->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($orderUpdateStatus->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($orderUpdateStatus->modified) ?></td>
        </tr>
    </table>
</div>
