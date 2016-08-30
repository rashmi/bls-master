<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prod Categories'), ['controller' => 'ProdCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prod Category'), ['controller' => 'ProdCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>

<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Parent Category') ?></th>
            <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->name, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($category->name) ?></td>
        </tr>
		 <tr>
            <th><?= __('Image') ?></th>
            <td><?= $this->Html->image('files/CategoryDetails/image/'.@$category->category_detail->image, ['alt'=>'Category Image', 'class'=>'img-thumbnail', 'width'=>'200px', 'height'=>'150px']); ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Lft') ?></th>
            <td><?= $this->Number->format($category->lft) ?></td>
        </tr>
        <tr>
            <th><?= __('Rght') ?></th>
            <td><?= $this->Number->format($category->rght) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($category->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($category->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Categories') ?></h4>
        <?php if (!empty($category->child_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Parent Id') ?></th>
                <th><?= __('Lft') ?></th>
                <th><?= __('Rght') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->child_categories as $childCategories): ?>
            <tr>
                <td><?= h($childCategories->id) ?></td>
                <td><?= h($childCategories->parent_id) ?></td>
                <td><?= h($childCategories->lft) ?></td>
                <td><?= h($childCategories->rght) ?></td>
                <td><?= h($childCategories->name) ?></td>
                <td><?= h($childCategories->created) ?></td>
                <td><?= h($childCategories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $childCategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $childCategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $childCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
   <!-- <div class="related">
        <h4><?= __('Related Prod Categories') ?></h4>
        <?php if (!empty($category->products_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Category Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->products_categories as $prodCategories): ?>
            <tr>
                <td><?= h($prodCategories->id) ?></td>
                <td><?= h($prodCategories->category_id) ?></td>
                <td><?= h($prodCategories->product_id) ?></td>
                <td><?= h($prodCategories->created) ?></td>
                <td><?= h($prodCategories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProdCategories', 'action' => 'view', $prodCategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProdCategories', 'action' => 'edit', $prodCategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProdCategories', 'action' => 'delete', $prodCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prodCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>-->
</div>
