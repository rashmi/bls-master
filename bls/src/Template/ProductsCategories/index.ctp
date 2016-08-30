<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Products Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsCategories index large-9 medium-8 columns content">
    <h3><?= __('Products Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('category_id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productsCategories as $productsCategory): ?>
            <tr>
                <td><?= $this->Number->format($productsCategory->id) ?></td>
                <td><?= $productsCategory->has('category') ? $this->Html->link($productsCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $productsCategory->category->id]) : '' ?></td>
                <td><?= $productsCategory->has('product') ? $this->Html->link($productsCategory->product->title, ['controller' => 'Products', 'action' => 'view', $productsCategory->product->id]) : '' ?></td>
                <td><?= h($productsCategory->created) ?></td>
                <td><?= h($productsCategory->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productsCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsCategory->id)]) ?>
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
