<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('Edit Promotion'), ['action' => 'edit', $promotion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Promotion'), ['action' => 'delete', $promotion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $promotion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Promotions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Promotion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?php  echo "Promotion Detail"; ?>  <small></small></h2>
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
            <th class="column-title"><?= __('Promo Code') ?></th>
            <td><?= h($promotion->promo_code) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Product') ?></th>
            <td><?= $promotion->has('product') ? $this->Html->link($promotion->product->title, ['controller' => 'Products', 'action' => 'view', $promotion->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Discounted Amount Parent') ?></th>
            <td><?= h($promotion->discounted_amount_parent) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Associated Product') ?></th>
            <td><?= h($promotion->associated_product) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Discounted Amount Child') ?></th>
            <td><?= h($promotion->discounted_amount_child) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Discount Parent In') ?></th>
            <td><?= h($promotion->discount_parent_in) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Discount Child In') ?></th>
            <td><?= h($promotion->discount_child_in) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Id') ?></th>
            <td><?= $this->Number->format($promotion->id) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Quantity Parent') ?></th>
            <td><?= $this->Number->format($promotion->quantity_parent) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Child Product Id') ?></th>
            <td><?= $this->Number->format($promotion->child_product_id) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Quantity Child') ?></th>
            <td><?= $this->Number->format($promotion->quantity_child) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Start Date') ?></th>
            <td><?= h($promotion->start_date) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('End Date') ?></th>
            <td><?= h($promotion->end_date) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Created') ?></th>
            <td><?= h($promotion->created) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Modified') ?></th>
            <td><?= h($promotion->modified) ?></td>
        </tr>
  
					</table>
				</div>
   </div>
</div>
</div>
</div>





        
    
