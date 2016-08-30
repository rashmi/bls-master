<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order Status'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order Update Statuses'), ['controller' => 'OrderUpdateStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Update Status'), ['controller' => 'OrderUpdateStatuses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderStatuses index large-9 medium-8 columns content">
    <h3><?= __('Order Statuses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('code') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orderStatuses as $orderStatus): ?>
            <tr>
                <td><?= $this->Number->format($orderStatus->id) ?></td>
                <td><?= h($orderStatus->code) ?></td>
                <td><?= h($orderStatus->name) ?></td>
                <td><?= h($orderStatus->created) ?></td>
                <td><?= h($orderStatus->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orderStatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderStatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderStatus->id)]) ?>
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
