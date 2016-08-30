<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groups view large-9 medium-8 columns content">
    <h3><?= h($group->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($group->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($group->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($group->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Admins') ?></h4>
        <?php if (!empty($group->admins)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Group Id') ?></th>
                <th><?= __('Image') ?></th>
                <th><?= __('Image Dir') ?></th>
                <th><?= __('Dob') ?></th>
                <th><?= __('Mobile') ?></th>
                <th><?= __('Firstname') ?></th>
                <th><?= __('Lastname') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($group->admins as $admins): ?>
            <tr>
                <td><?= h($admins->id) ?></td>
                <td><?= h($admins->email) ?></td>
                <td><?= h($admins->password) ?></td>
                <td><?= h($admins->group_id) ?></td>
                <td><?= h($admins->image) ?></td>
                <td><?= h($admins->image_dir) ?></td>
                <td><?= h($admins->dob) ?></td>
                <td><?= h($admins->mobile) ?></td>
                <td><?= h($admins->firstname) ?></td>
                <td><?= h($admins->lastname) ?></td>
                <td><?= h($admins->created) ?></td>
                <td><?= h($admins->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Admins', 'action' => 'view', $admins->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Admins', 'action' => 'edit', $admins->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Admins', 'action' => 'delete', $admins->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admins->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
