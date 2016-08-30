<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Configration'), ['action' => 'edit', $configration->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Configration'), ['action' => 'delete', $configration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $configration->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Configrations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Configration'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="configrations view large-9 medium-8 columns content">
    <h3><?= h($configration->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Store Name') ?></th>
            <td><?= h($configration->store_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Logo') ?></th>
            <td><?= h($configration->logo) ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($configration->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Facebook Link') ?></th>
            <td><?= h($configration->facebook_link) ?></td>
        </tr>
        <tr>
            <th><?= __('Twitter Link') ?></th>
            <td><?= h($configration->twitter_link) ?></td>
        </tr>
        <tr>
            <th><?= __('Home Link') ?></th>
            <td><?= h($configration->home_link) ?></td>
        </tr>
        <tr>
            <th><?= __('Currency') ?></th>
            <td><?= h($configration->currency) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($configration->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($configration->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($configration->modified) ?></td>
        </tr>
    </table>
</div>
