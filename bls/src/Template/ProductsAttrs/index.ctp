<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Products Attr'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsAttrs index large-9 medium-8 columns content">
    <h3><?= __('Products Attrs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('brand_id') ?></th>
                <th><?= $this->Paginator->sort('model') ?></th>
                <th><?= $this->Paginator->sort('video_link') ?></th>
                <th><?= $this->Paginator->sort('size') ?></th>
                <th><?= $this->Paginator->sort('weight') ?></th>
                <th><?= $this->Paginator->sort('packaging') ?></th>
                <th><?= $this->Paginator->sort('uom') ?></th>
                <th><?= $this->Paginator->sort('quantity') ?></th>
                <th><?= $this->Paginator->sort('attributes') ?></th>
                <th><?= $this->Paginator->sort('main_promo_1') ?></th>
                <th><?= $this->Paginator->sort('main_promo_2') ?></th>
                <th><?= $this->Paginator->sort('main_promo_3') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productsAttrs as $productsAttr): ?>
            <tr>
                <td><?= $this->Number->format($productsAttr->id) ?></td>
                <td><?= $productsAttr->has('product') ? $this->Html->link($productsAttr->product->title, ['controller' => 'Products', 'action' => 'view', $productsAttr->product->id]) : '' ?></td>
                <td><?= $productsAttr->has('brand') ? $this->Html->link($productsAttr->brand->name, ['controller' => 'Brands', 'action' => 'view', $productsAttr->brand->id]) : '' ?></td>
                <td><?= h($productsAttr->model) ?></td>
                <td><?= h($productsAttr->video_link) ?></td>
                <td><?= h($productsAttr->size) ?></td>
                <td><?= h($productsAttr->weight) ?></td>
                <td><?= h($productsAttr->packaging) ?></td>
                <td><?= h($productsAttr->uom) ?></td>
                <td><?= $this->Number->format($productsAttr->quantity) ?></td>
                <td><?= h($productsAttr->attributes) ?></td>
                <td><?= $this->Number->format($productsAttr->main_promo_1) ?></td>
                <td><?= $this->Number->format($productsAttr->main_promo_2) ?></td>
                <td><?= $this->Number->format($productsAttr->main_promo_3) ?></td>
                <td><?= h($productsAttr->created) ?></td>
                <td><?= h($productsAttr->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productsAttr->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsAttr->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsAttr->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsAttr->id)]) ?>
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
