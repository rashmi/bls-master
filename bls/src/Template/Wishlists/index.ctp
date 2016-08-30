<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Wishlist'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wishlists index large-9 medium-8 columns content">
    <h3><?= __('Wishlists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wishlists as $wishlist): ?>
            <tr>
                <td><?= $this->Number->format($wishlist->id) ?></td>
                <td><?= $wishlist->has('user') ? $this->Html->link($wishlist->user->id, ['controller' => 'Users', 'action' => 'view', $wishlist->user->id]) : '' ?></td>
                <td><?= $wishlist->has('product') ? $this->Html->link($wishlist->product->title, ['controller' => 'Products', 'action' => 'view', $wishlist->product->id]) : '' ?></td>
                <td><?= h($wishlist->created) ?></td>
                <td><?= h($wishlist->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wishlist->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wishlist->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wishlist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wishlist->id)]) ?>
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
