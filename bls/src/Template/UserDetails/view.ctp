<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User Detail'), ['action' => 'edit', $userDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Detail'), ['action' => 'delete', $userDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userDetails view large-9 medium-8 columns content">
    <h3><?= h($userDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $userDetail->has('user') ? $this->Html->link($userDetail->user->id, ['controller' => 'Users', 'action' => 'view', $userDetail->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Firstname') ?></th>
            <td><?= h($userDetail->firstname) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname') ?></th>
            <td><?= h($userDetail->lastname) ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><!--<?= h($userDetail->image) ?>-->
			<?= $this->Html->image('files/Userdetails/image/'.$userDetail->image, ['alt'=>'Avatar']); ?> </td>
        </tr>
        <tr>
            <th><?= __('Dob') ?></th>
            <td><?= h($userDetail->dob) ?></td>
        </tr>
        <tr>
            <th><?= __('Gender') ?></th>
            <td><?= h($userDetail->gender) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile') ?></th>
            <td><?= h($userDetail->mobile) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($userDetail->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($userDetail->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($userDetail->modified) ?></td>
        </tr>
    </table>
</div>
