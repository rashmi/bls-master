<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Products Related'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsRelateds index large-9 medium-8 columns content">
    <h3><?= __('Products Relateds') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('related_product_1') ?></th>
                <th><?= $this->Paginator->sort('related_product_2') ?></th>
                <th><?= $this->Paginator->sort('related_product_3') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productsRelateds as $productsRelated): ?>
            <tr>
                <td><?= $this->Number->format($productsRelated->id) ?></td>
                <td><?= $productsRelated->has('product') ? $this->Html->link($productsRelated->product->title, ['controller' => 'Products', 'action' => 'view', $productsRelated->product->id]) : '' ?></td>
                <td><?= h($productsRelated->related_product_1) ?></td>
                <td><?= h($productsRelated->related_product_2) ?></td>
                <td><?= h($productsRelated->related_product_3) ?></td>
                <td><?= h($productsRelated->created) ?></td>
                <td><?= h($productsRelated->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productsRelated->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsRelated->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsRelated->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsRelated->id)]) ?>
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
