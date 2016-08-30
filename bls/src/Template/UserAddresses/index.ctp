<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('New User Address'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userAddresses index large-9 medium-8 columns content">
    <h3><?= __('User Addresses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('street_address') ?></th>
                <th><?= $this->Paginator->sort('city') ?></th>
                <th><?= $this->Paginator->sort('state') ?></th>
                <th><?= $this->Paginator->sort('country') ?></th>
                <th><?= $this->Paginator->sort('pincode') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userAddresses as $userAddress): ?>
            <tr>
                <td><?= $this->Number->format($userAddress->id) ?></td>
                <td><?= $userAddress->has('user') ? $this->Html->link($userAddress->user->id, ['controller' => 'Users', 'action' => 'view', $userAddress->user->id]) : '' ?></td>
                <td><?= h($userAddress->street_address) ?></td>
                <td><?= h($userAddress->city) ?></td>
                <td><?= h($userAddress->state) ?></td>
                <td><?= h($userAddress->country) ?></td>
                <td><?= h($userAddress->pincode) ?></td>
                <td><?= h($userAddress->created) ?></td>
                <td><?= h($userAddress->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userAddress->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userAddress->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAddress->id)]) ?>
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
