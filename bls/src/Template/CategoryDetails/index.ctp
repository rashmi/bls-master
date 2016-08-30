<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Category Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoryDetails index large-9 medium-8 columns content">
    <h3><?= __('Category Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('category_id') ?></th>
                <th><?= $this->Paginator->sort('image') ?></th>
                <th><?= $this->Paginator->sort('image_dir') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoryDetails as $categoryDetail): ?>
            <tr>
                <td><?= $this->Number->format($categoryDetail->id) ?></td>
                <td><?= $categoryDetail->has('category') ? $this->Html->link($categoryDetail->category->name, ['controller' => 'Categories', 'action' => 'view', $categoryDetail->category->id]) : '' ?></td>
                <td><?= h($categoryDetail->image) ?></td>
                <td><?= h($categoryDetail->image_dir) ?></td>
                <td><?= h($categoryDetail->created) ?></td>
                <td><?= h($categoryDetail->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoryDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoryDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoryDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryDetail->id)]) ?>
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
