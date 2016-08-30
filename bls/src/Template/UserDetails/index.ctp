<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('New User Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userDetails index large-9 medium-8 columns content">
    <h3><?= __('User Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('firstname') ?></th>
                <th><?= $this->Paginator->sort('lastname') ?></th>
                <th><?= $this->Paginator->sort('image') ?></th>
                <th><?= $this->Paginator->sort('image_dir') ?></th>
                <th><?= $this->Paginator->sort('dob') ?></th>
                <th><?= $this->Paginator->sort('gender') ?></th>
                <th><?= $this->Paginator->sort('mobile') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userDetails as $userDetail): ?>
            <tr>
                <td><?= $this->Number->format($userDetail->id) ?></td>
                <td><?= $userDetail->has('user') ? $this->Html->link($userDetail->user->id, ['controller' => 'Users', 'action' => 'view', $userDetail->user->id]) : '' ?></td>
                <td><?= h($userDetail->firstname) ?></td>
                <td><?= h($userDetail->lastname) ?></td>
                <td><?= h($userDetail->image) ?></td>
                <td><?= h($userDetail->image_dir) ?></td>
                <td><?= h($userDetail->dob) ?></td>
                <td><?= h($userDetail->gender) ?></td>
                <td><?= h($userDetail->mobile) ?></td>
                <td><?= h($userDetail->created) ?></td>
                <td><?= h($userDetail->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDetail->id)]) ?>
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
