<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Products Attr'), ['action' => 'edit', $productsAttr->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products Attr'), ['action' => 'delete', $productsAttr->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsAttr->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Attrs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Attr'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productsAttrs view large-9 medium-8 columns content">
    <h3><?= h($productsAttr->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $productsAttr->has('product') ? $this->Html->link($productsAttr->product->title, ['controller' => 'Products', 'action' => 'view', $productsAttr->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Brand') ?></th>
            <td><?= $productsAttr->has('brand') ? $this->Html->link($productsAttr->brand->name, ['controller' => 'Brands', 'action' => 'view', $productsAttr->brand->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Model') ?></th>
            <td><?= h($productsAttr->model) ?></td>
        </tr>
        <tr>
            <th><?= __('Video Link') ?></th>
            <td><?= h($productsAttr->video_link) ?></td>
        </tr>
        <tr>
            <th><?= __('Size') ?></th>
            <td><?= h($productsAttr->size) ?></td>
        </tr>
        <tr>
            <th><?= __('Weight') ?></th>
            <td><?= h($productsAttr->weight) ?></td>
        </tr>
        <tr>
            <th><?= __('Packaging') ?></th>
            <td><?= h($productsAttr->packaging) ?></td>
        </tr>
        <tr>
            <th><?= __('Uom') ?></th>
            <td><?= h($productsAttr->uom) ?></td>
        </tr>
        <tr>
            <th><?= __('Attributes') ?></th>
            <td><?= h($productsAttr->attributes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($productsAttr->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($productsAttr->quantity) ?></td>
        </tr>
        <tr>
            <th><?= __('Main Promo 1') ?></th>
            <td><?= $this->Number->format($productsAttr->main_promo_1) ?></td>
        </tr>
        <tr>
            <th><?= __('Main Promo 2') ?></th>
            <td><?= $this->Number->format($productsAttr->main_promo_2) ?></td>
        </tr>
        <tr>
            <th><?= __('Main Promo 3') ?></th>
            <td><?= $this->Number->format($productsAttr->main_promo_3) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($productsAttr->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($productsAttr->modified) ?></td>
        </tr>
    </table>
</div>
