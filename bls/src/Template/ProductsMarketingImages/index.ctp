<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Products Marketing Image'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsMarketingImages index large-9 medium-8 columns content">
    <h3><?= __('Products Marketing Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('image') ?></th>
                <th><?= $this->Paginator->sort('image_dir') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productsMarketingImages as $productsMarketingImage): ?>
            <tr>
                <td><?= $this->Number->format($productsMarketingImage->id) ?></td>
                <td><?= $productsMarketingImage->has('product') ? $this->Html->link($productsMarketingImage->product->title, ['controller' => 'Products', 'action' => 'view', $productsMarketingImage->product->id]) : '' ?></td>
                <td><?= h($productsMarketingImage->image) ?></td>
                <td><?= h($productsMarketingImage->image_dir) ?></td>
                <td><?= h($productsMarketingImage->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productsMarketingImage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsMarketingImage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsMarketingImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsMarketingImage->id)]) ?>
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
