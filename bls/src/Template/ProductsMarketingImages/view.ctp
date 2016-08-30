<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Products Marketing Image'), ['action' => 'edit', $productsMarketingImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products Marketing Image'), ['action' => 'delete', $productsMarketingImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsMarketingImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Marketing Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Marketing Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productsMarketingImages view large-9 medium-8 columns content">
    <h3><?= h($productsMarketingImage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $productsMarketingImage->has('product') ? $this->Html->link($productsMarketingImage->product->title, ['controller' => 'Products', 'action' => 'view', $productsMarketingImage->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($productsMarketingImage->image) ?></td>
        </tr>
        <tr>
            <th><?= __('Image Dir') ?></th>
            <td><?= h($productsMarketingImage->image_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($productsMarketingImage->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($productsMarketingImage->created) ?></td>
        </tr>
    </table>
</div>
