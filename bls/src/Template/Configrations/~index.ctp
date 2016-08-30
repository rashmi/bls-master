<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Configration'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="configrations index large-9 medium-8 columns content">
    <h3><?= __('Configrations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('store_name') ?></th>
                <th><?= $this->Paginator->sort('logo') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('facebook_link') ?></th>
                <th><?= $this->Paginator->sort('twitter_link') ?></th>
                <th><?= $this->Paginator->sort('home_link') ?></th>
                <th><?= $this->Paginator->sort('currency') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($configrations as $configration): ?>
            <tr>
                <td><?= $this->Number->format($configration->id) ?></td>
                <td><?= h($configration->store_name) ?></td>
                <td><?= h($configration->logo) ?></td>
                <td><?= h($configration->title) ?></td>
                <td><?= h($configration->facebook_link) ?></td>
                <td><?= h($configration->twitter_link) ?></td>
                <td><?= h($configration->home_link) ?></td>
                <td><?= h($configration->currency) ?></td>
                <td><?= h($configration->created) ?></td>
                <td><?= h($configration->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $configration->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $configration->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $configration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $configration->id)]) ?>
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
