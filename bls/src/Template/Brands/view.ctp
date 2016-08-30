<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('Edit Brand'), ['action' => 'edit', $brand->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Brand'), ['action' => 'delete', $brand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brand->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Brands'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Brand'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= h($brand->name) ?>  <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div><div class="x_content">
                  <br />
				 <div class="col-sm-6">
					<table class="table table-striped responsive-utilities jambo_table bulk_action">
		<tr>
            <th class="column-title"><?= __('Name') ?></th>
            <td><?= h($brand->name) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Image') ?></th>
            <td><?= $this->Html->image('files/Brands/image/'.$brand->image, ['alt'=>'Logo', 'class'=>'img-thumbnail', 'width'=>'100px']); ?></td>
        </tr>
        
        <tr>
            <th class="column-title"><?= __('Status') ?></th>
            <td><?= h($brand->status) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Id') ?></th>
            <td><?= $this->Number->format($brand->id) ?></td>
        </tr>
		
		<tr>
            <th class="column-title"><?= __('Categories') ?></th>
            <td>
				<?php 
						foreach($cat_name as $cats){
						?><div class="keywords"><?= h($cats['id, name']); ?> </div> <?php 
							} ?>
		</td>
        </tr>
		
        <tr>
            <th class="column-title"><?= __('Created') ?></th>
            <td><?= h($brand->created) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Modified') ?></th>
            <td><?= h($brand->modified) ?></td>
        </tr>
    </table>
	</div>
 
    <!--<div class="related">
        <h4><?= __('Related Brand Categories') ?></h4>
        <?php if (!empty($brand->brand_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Brand Id') ?></th>
                <th><?= __('Category Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($brand->brand_categories as $brandCategories): ?>
            <tr>
                <td><?= h($brandCategories->id) ?></td>
                <td><?= h($brandCategories->brand_id) ?></td>
                <td><?= h($brandCategories->category_id) ?></td>
                <td><?= h($brandCategories->created) ?></td>
                <td><?= h($brandCategories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BrandCategories', 'action' => 'view', $brandCategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BrandCategories', 'action' => 'edit', $brandCategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BrandCategories', 'action' => 'delete', $brandCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brandCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>-->
   <!-- <div class="related">
	
	
        <h4><?= __('Related Prod Brands') ?></h4>
        <?php if (!empty($brand->prod_brands)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Brand Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($brand->prod_brands as $prodBrands): ?>
            <tr>
                <td><?= h($prodBrands->id) ?></td>
                <td><?= h($prodBrands->brand_id) ?></td>
                <td><?= h($prodBrands->product_id) ?></td>
                <td><?= h($prodBrands->created) ?></td>
                <td><?= h($prodBrands->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProdBrands', 'action' => 'view', $prodBrands->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProdBrands', 'action' => 'edit', $prodBrands->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProdBrands', 'action' => 'delete', $prodBrands->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prodBrands->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>-->
</div>
</div>
</div>
</div>
