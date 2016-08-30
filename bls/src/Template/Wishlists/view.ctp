<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Wishlist'), ['action' => 'edit', $wishlist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wishlist'), ['action' => 'delete', $wishlist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wishlist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wishlists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wishlist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wishlists view large-9 medium-8 columns content">
    <h3><?= h($wishlist->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $wishlist->has('user') ? $this->Html->link($wishlist->user->id, ['controller' => 'Users', 'action' => 'view', $wishlist->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $wishlist->has('product') ? $this->Html->link($wishlist->product->title, ['controller' => 'Products', 'action' => 'view', $wishlist->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($wishlist->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($wishlist->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($wishlist->modified) ?></td>
        </tr>
    </table>
</div>
