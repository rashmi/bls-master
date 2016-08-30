<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <!--<li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>-->
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
       <!-- <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>-->
        <!--<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>-->
       <!--<li> <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>-->
        <!--<li><?= $this->Html->link(__('List User Addresses'), ['controller' => 'UserAddresses', 'action' => 'index']) ?> </li>-->
        <!--<li><?= $this->Html->link(__('New User Address'), ['controller' => 'UserAddresses', 'action' => 'add']) ?> </li>-->
        <li><?= $this->Html->link(__('List Order Update Statuses'), ['controller' => 'OrderUpdateStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Update Status'), ['controller' => 'OrderUpdateStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders Shippings'), ['controller' => 'OrdersShippings', 'action' => 'index']) ?> </li>
        <!--<li><?= $this->Html->link(__('New Orders Shipping'), ['controller' => 'OrdersShippings', 'action' => 'add']) ?> </li>-->
        <!--<li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>-->
       <!--<li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>-->
    </ul>
</nav>
  <div class="row">
     <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
  <div class="x_title">
	  <h2>Order Details</h2>
		  <ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>
					
				<li><a class="close-link"><i class="fa fa-close"></i></a>
				</li>
		  </ul>
	  <div class="clearfix"></div>
  </div>

<div class="x_content">
 <br /><?php 

 ?>
 
				 	 <div class="col-sm-12">
					  <!--<h3><?= h($order->id) ?></h3>-->
					<table class="table table-striped responsive-utilities jambo_table bulk_action">
					 <!--<tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>-->
		<tr>
            <th class="column-title"><?= __('User') ?></th>
            <td><?= $order->has('user') ? $this->Html->link($order->user->user_detail->firstname." ".ucfirst($order->user->user_detail->lastname), ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('User Address') ?></th>
            <td><?= $order->has('user_address') ? $this->Html->link($order->user_address->street_address." ".$order->user_address->city." ".$order->user_address->country, ['controller' => 'UserAddresses', 'action' => 'view', $order->user_address->id]) : '' ?></td>
        </tr>
        
        <tr>
            <th class="column-title"><?= __('User Comments') ?></th>
            <td><?= h($order->user_comments) ?></td>
        </tr>
       <!-- <tr>
            <th class="column-title"><?= __('Admin Comments') ?></th>
            <td><?= h($order->admin_comments) ?></td>
        </tr>-->
		 <tr>
            <th class="column-title"><?= __('Status') ?></th>
			<?php  foreach($order->order_update_statuses as $order_update_status):
					//debug($order_update_status);
			   endforeach; ?>
            <td><?= h($order_update_status->order_status->name); ?></td>
        </tr>
		<tr>
            <th class="column-title"><?= __('TransactionCode') ?></th>
            <td>
				<?= $this->Number->format($order->transactionCode) ?>
		</td>
        </tr>
		
        <tr>
            <th class="column-title"><?=  __('RefrenceCode') ?></th>
            <td><?= $this->Number->format($order->refrenceCode) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?=__('InvoiceCode') ?></th>
            <td><?= $this->Number->format($order->invoiceCode) ?></td>
        </tr>
		<tr>
            <th class="column-title"><?=__('OtherCode') ?></th>
            <td><?= $this->Number->format($order->otherCode) ?></td>
        </tr>
		<tr>
            <th class="column-title"><?= __('Created') ?></th>
            <td><?= h($order->created) ?></td>
        </tr>
		<tr>
            <th class="column-title"><?= __('Modified') ?></th>
            <td><?= h($order->modified) ?></td>
        </tr>
		<tr>
            <th class="column-title"><?= __('Update Order Status') ?></th>
			<?= $this->Form->create("order_update_status") ?>
            <td><?= $this->Form->input('order_status_id', ['options' => $orderStatuses]); ?><?= $this->Form->button(__('Submit')) ?></td>
			
			<?= $this->Form->end() ?>
        </tr>
    </table>
	</div>
	
	<div class="col-sm-12">
    
        <h4><?= __('Related Order Update Statuses') ?></h4>
        <?php if (!empty($order->order_update_statuses)): ?>
        <table class="table table-striped responsive-utilities jambo_table bulk_action">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Order Id') ?></th>
                <th><?= __('Order Status Id') ?></th>
                <th><?= __('Admin Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->order_update_statuses as $orderUpdateStatuses): 
			?>
            <tr>
                <td><?= h($orderUpdateStatuses->id) ?></td>
                <td><?= h($orderUpdateStatuses->order_id) ?></td>
                <td><?= h($orderUpdateStatuses->order_status->name) ?></td>
                <td><?= h($orderUpdateStatuses->admin->firstname." ".$orderUpdateStatuses->admin->lastname) ?></td>
                <td><?= h($orderUpdateStatuses->created) ?></td>
                <td><?= h($orderUpdateStatuses->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrderUpdateStatuses', 'action' => 'view', $orderUpdateStatuses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrderUpdateStatuses', 'action' => 'edit', $orderUpdateStatuses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderUpdateStatuses', 'action' => 'delete', $orderUpdateStatuses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderUpdateStatuses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Orders Shippings') ?></h4>
        <?php if (!empty($order->orders_shippings)): ?>
        <table class="table table-striped responsive-utilities jambo_table bulk_action">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Order Id') ?></th>
                <th><?= __('Firstname') ?></th>
                <th><?= __('Lastname') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Street Address') ?></th>
                <th><?= __('City') ?></th>
                <th><?= __('Country') ?></th>
                <th><?= __('Pincode') ?></th>
                <th><?= __('Phone') ?></th>
                <th><?= __('Mobile') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->orders_shippings as $ordersShippings): ?>
            <tr>
                <td><?= h($ordersShippings->id) ?></td>
                <td><?= h($ordersShippings->order_id) ?></td>
                <td><?= h($ordersShippings->firstname) ?></td>
                <td><?= h($ordersShippings->lastname) ?></td>
                <td><?= h($ordersShippings->email) ?></td>
                <td><?= h($ordersShippings->street_address) ?></td>
                <td><?= h($ordersShippings->city) ?></td>
                <td><?= h($ordersShippings->country) ?></td>
                <td><?= h($ordersShippings->pincode) ?></td>
                <td><?= h($ordersShippings->phone) ?></td>
                <td><?= h($ordersShippings->mobile) ?></td>
                <td><?= h($ordersShippings->created) ?></td>
                <td><?= h($ordersShippings->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrdersShippings', 'action' => 'view', $ordersShippings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrdersShippings', 'action' => 'edit', $ordersShippings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrdersShippings', 'action' => 'delete', $ordersShippings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersShippings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($order->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->title) ?></td>
                <td><?= h($products->created) ?></td>
                <td><?= h($products->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
</div>
</div>
