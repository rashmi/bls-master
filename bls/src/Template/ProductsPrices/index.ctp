<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Products Price'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsPrices index large-9 medium-8 columns content">
    <h3><?= __('Products Prices') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('net_price') ?></th>
                <th><?= $this->Paginator->sort('sale_price') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productsPrices as $productsPrice): ?>
            <tr>
                <td><?= $this->Number->format($productsPrice->id) ?></td>
                <td><?= $productsPrice->has('product') ? $this->Html->link($productsPrice->product->title, ['controller' => 'Products', 'action' => 'view', $productsPrice->product->id]) : '' ?></td>
                <td><?= h($productsPrice->net_price) ?></td>
                <td><?= h($productsPrice->sale_price) ?></td>
                <td><?= h($productsPrice->created) ?></td>
                <td><?= h($productsPrice->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productsPrice->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsPrice->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsPrice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsPrice->id)]) ?>
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
