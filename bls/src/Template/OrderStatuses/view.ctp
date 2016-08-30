<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order Status'), ['action' => 'edit', $orderStatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Status'), ['action' => 'delete', $orderStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderStatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Statuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Update Statuses'), ['controller' => 'OrderUpdateStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Update Status'), ['controller' => 'OrderUpdateStatuses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orderStatuses view large-9 medium-8 columns content">
    <h3><?= h($orderStatus->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Code') ?></th>
            <td><?= h($orderStatus->code) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($orderStatus->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($orderStatus->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($orderStatus->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($orderStatus->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Order Update Statuses') ?></h4>
        <?php if (!empty($orderStatus->order_update_statuses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Order Id') ?></th>
                <th><?= __('Order Status Id') ?></th>
                <th><?= __('Admin Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($orderStatus->order_update_statuses as $orderUpdateStatuses): ?>
            <tr>
                <td><?= h($orderUpdateStatuses->id) ?></td>
                <td><?= h($orderUpdateStatuses->order_id) ?></td>
                <td><?= h($orderUpdateStatuses->order_status_id) ?></td>
                <td><?= h($orderUpdateStatuses->admin_id) ?></td>
                <td><?= h($orderUpdateStatuses->created) ?></td>
                <td><?= h($orderUpdateStatuses->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrderUpdateStatuses', 'action' => 'view', $orderUpdateStatuses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrderUpdateStatuses', 'action' => 'edit', $orderUpdateStatuses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderUpdateStatuses', 'action' => 'delete', $orderUpdateStatuses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderUpdateStatuses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
