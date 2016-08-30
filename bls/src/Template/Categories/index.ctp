<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?></li>
      
    </ul>
</nav>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= __('List Users') ?> <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <!--<th>
                          <input type="checkbox" id="check-all" class="flat">
                        </th>-->
       
                <!--<th class="column-title"><?= $this->Paginator->sort('id') ?></th>-->
                <!--<th class="column-title"><?= $this->Paginator->sort('parent_id') ?></th>-->
                <th class="column-title"><?= $this->Paginator->sort('name') ?></th>
				<th class="column-title">Image</th>
                <th class="column-title"><?= $this->Paginator->sort('created') ?></th>
                <th class="column-title"><?= $this->Paginator->sort('modified') ?></th>
                <th colspan="3" class="column-title text-center no-link last"><span class="nobr">Action</span>
                        </th>
            </tr>
        </thead>
		
			
        <tbody>
            <?php foreach ($categories as $category): ?>
            <tr class="even pointer">
			<!--<td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records" value="<?= $this->Number->format($category->id) ?>">
                        </td>-->
                <!--<td ><?= $this->Number->format($category->id) ?></td>-->
                
                <td><b><?= h($category->name) ?></b><small> (<?= $category->has('parent_category') ? $this->Html->link($category->parent_category->name, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?>)</small></td>
			
				
				<td><?= $this->Html->image('files/CategoryDetails/image/'.@$category->category_detail->image, ['alt'=>'Category Image', 'class'=>'img-thumbnail', 'width'=>'100px', 'height'=>'75px']); ?></td>
				
                <td><?= h($category->created) ?></td>
                <td><?= h($category->modified) ?></td>
					
						<td class="last">  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id]) ?></td>
						<td class="last"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?></td>
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
              </div>
            </div>
</div>
