<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order Update Status'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order Statuses'), ['controller' => 'OrderStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Status'), ['controller' => 'OrderStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderUpdateStatuses index large-9 medium-8 columns content">
    <h3><?= __('Order Update Statuses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('order_id') ?></th>
                <th><?= $this->Paginator->sort('order_status_id') ?></th>
                <th><?= $this->Paginator->sort('admin_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orderUpdateStatuses as $orderUpdateStatus): ?>
            <tr>
                <td><?= $this->Number->format($orderUpdateStatus->id) ?></td>
                <td><?= $orderUpdateStatus->has('order') ? $this->Html->link($orderUpdateStatus->order->id, ['controller' => 'Orders', 'action' => 'view', $orderUpdateStatus->order->id]) : '' ?></td>
                <td><?= $orderUpdateStatus->has('order_status') ? $this->Html->link($orderUpdateStatus->order_status->name, ['controller' => 'OrderStatuses', 'action' => 'view', $orderUpdateStatus->order_status->id]) : '' ?></td>
                <td><?= $orderUpdateStatus->has('admin') ? $this->Html->link($orderUpdateStatus->admin->id, ['controller' => 'Admins', 'action' => 'view', $orderUpdateStatus->admin->id]) : '' ?></td>
                <td><?= h($orderUpdateStatus->created) ?></td>
                <td><?= h($orderUpdateStatus->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orderUpdateStatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderUpdateStatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderUpdateStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderUpdateStatus->id)]) ?>
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
