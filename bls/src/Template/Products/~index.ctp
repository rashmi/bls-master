<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products Attrs'), ['controller' => 'ProductsAttrs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Attr'), ['controller' => 'ProductsAttrs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products Images'), ['controller' => 'ProductsImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Image'), ['controller' => 'ProductsImages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products Marketing Images'), ['controller' => 'ProductsMarketingImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Marketing Image'), ['controller' => 'ProductsMarketingImages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products Prices'), ['controller' => 'ProductsPrices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Price'), ['controller' => 'ProductsPrices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products Promos'), ['controller' => 'ProductsPromos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Promo'), ['controller' => 'ProductsPromos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products Relateds'), ['controller' => 'ProductsRelateds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Products Related'), ['controller' => 'ProductsRelateds', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('item_code') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= h($product->item_code) ?></td>
                <td><?= h($product->title) ?></td>
                <td><?= h($product->created) ?></td>
                <td><?= h($product->modified) ?></td>
                <td><?= h($product->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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
