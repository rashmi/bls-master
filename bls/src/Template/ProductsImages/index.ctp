<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Products Image'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colors'), ['controller' => 'Colors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Color'), ['controller' => 'Colors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsImages index large-9 medium-8 columns content">
    <h3><?= __('Products Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('product_code') ?></th>
                <th><?= $this->Paginator->sort('image') ?></th>
                <th><?= $this->Paginator->sort('image_dir') ?></th>
                <th><?= $this->Paginator->sort('color_id') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productsImages as $productsImage): ?>
            <tr>
                <td><?= $this->Number->format($productsImage->id) ?></td>
                <td><?= $productsImage->has('product') ? $this->Html->link($productsImage->product->title, ['controller' => 'Products', 'action' => 'view', $productsImage->product->id]) : '' ?></td>
                <td><?= h($productsImage->product_code) ?></td>
                <td><?= h($productsImage->image) ?></td>
                <td><?= h($productsImage->image_dir) ?></td>
                <td><?= $productsImage->has('color') ? $this->Html->link($productsImage->color->name, ['controller' => 'Colors', 'action' => 'view', $productsImage->color->id]) : '' ?></td>
                <td><?= $this->Number->format($productsImage->status) ?></td>
                <td><?= h($productsImage->created) ?></td>
                <td><?= h($productsImage->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productsImage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsImage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsImage->id)]) ?>
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
