<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('Edit User Address'), ['action' => 'edit', $userAddress->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Address'), ['action' => 'delete', $userAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAddress->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Addresses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Address'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userAddresses view large-9 medium-8 columns content">
    <h3><?= h($userAddress->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $userAddress->has('user') ? $this->Html->link($userAddress->user->id, ['controller' => 'Users', 'action' => 'view', $userAddress->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Street Address') ?></th>
            <td><?= h($userAddress->street_address) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($userAddress->city) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= h($userAddress->state) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($userAddress->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Pincode') ?></th>
            <td><?= h($userAddress->pincode) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($userAddress->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($userAddress->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($userAddress->modified) ?></td>
        </tr>
    </table>
</div>
