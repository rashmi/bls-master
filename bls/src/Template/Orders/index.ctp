<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('List Order Update Statuses'), ['controller' => 'OrderUpdateStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Update Status'), ['controller' => 'OrderUpdateStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders Shippings'), ['controller' => 'OrdersShippings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orders Shipping'), ['controller' => 'OrdersShippings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
			 <?php  
							echo '<div  id="completedOrdersDiv" class="btn btn-success status" >Completed Orders</div>' ;
							
							echo '<div id="nonCompletedOrdersDiv"  class="btn btn-success status">Non Completed Orders</div>' ;
							 
							?>
                <div class="x_title">
                  <h2><?= __('Orders') ?> <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
				
    <table class="table table-striped responsive-utilities jambo_table bulk_action completed">
	<thead>
                      <tr class="headings">
                       <!-- <th>
                          <input type="checkbox" id="check-all" class="flat">
                        </th>-->
        
                <!--<th><?= $this->Paginator->sort('id') ?></th>-->
                <th class="column-title"><?= $this->Paginator->sort('user_id') ?></th>
				<th class="column-title">Total Price</th>
				<th class="column-title"><?= $this->Paginator->sort('status') ?></th>
                <!--<th class="column-title"><?= $this->Paginator->sort('user_addresses_id') ?></th>-->
               <!-- <th class="column-title"><?= $this->Paginator->sort('user_comments') ?></th>-->
                <!--<th class="column-title"><?= $this->Paginator->sort('admin_comments') ?></th>-->
                <!--<th class="column-title"><?= $this->Paginator->sort('transactionCode') ?></th>-->
                <!--<th class="column-title"><?= $this->Paginator->sort('refrenceCode') ?></th>-->
                <!--<th class="column-title"><?= $this->Paginator->sort('invoiceCode') ?></th>-->
                <!--<th class="column-title"><?= $this->Paginator->sort('otherCode') ?></th>-->
                <th class="column-title"><?= $this->Paginator->sort('created') ?></th>
                <!--<th class="column-title"><?= $this->Paginator->sort('modified') ?></th>-->
                <!--<th class="actions"><?= __('Actions') ?></th>-->
				<th colspan="3" class="column-title text-center no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="8">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
            </tr>
        </thead>
        <tbody>
            <?php 
			
			foreach ($orders as $order):  
               foreach($order->orders_products as $order_pro):
					$price_sum[] = $order_pro->final_price ;
			   endforeach;
	
			    $price_total = array_sum($price_sum);
				
               foreach ($order->order_update_statuses as $order_status):
			   //debug($order_status);
					$order_status_new[] = $order_status->order_status ;
					$order_status_created[] = $order_status->created ;
					//$def = $order_status->order_status->name ;
					$c = array_combine($order_status_new, $order_status_created);
					//print_r($c);die;

					
			   endforeach;
			   //$order_latest_status[] =  $order_status_new[0]->created;

foreach ($order_status_new as $order_latest):

					$order_status_res = $order_latest->name ;
			   endforeach;
			  if($order_latest->code==4){
				 $status ="completed";
			  } else {
				  $status ="noncompleted" ;  
			  }
			?>
			
           <tr class="even pointer status_<?php echo $status;?>">
		  <!-- <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records" value="<?= $this->Number->format($order->id) ?>">
                        </td>-->
                <!--<td><?= $this->Number->format($order->id) ?></td>-->
                <td><?= $order->has('user') ? $this->Html->link($order->user->user_detail->firstname." ".ucfirst($order->user->user_detail->lastname), ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                <!--<td><?= $order->has('user_address') ? $this->Html->link($order->user_address->id, ['controller' => 'UserAddresses', 'action' => 'view', $order->user_address->id]) : '' ?></td>-->
                <!--<td><?= h($order->user_comments) ?></td>-->
                <!--<td><?= h($order->admin_comments) ?></td>-->
                <!--<td><?= $this->Number->format($order->transactionCode) ?></td>-->
                <!--<td><?= $this->Number->format($order->refrenceCode) ?></td>-->
                <!--<td><?= $this->Number->format($order->invoiceCode) ?></td>
                <td><?= $this->Number->format($order->otherCode) ?></td>-->
					<td><?= h( $price_total) ?></td>
					<td><?= h( $order_status_res) ?></td>					
                <td><?= h($order->created) ?></td>
                <!--<td><?= h($order->modified) ?></td>-->
				<td class="last"><?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?></td>
						<!--<td class="last"> <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?></td>-->
						<td class="last"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?></td>
                
            </tr>
			
			  <?php  endforeach; ?>
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

<script>
$(document).ready(function(){
	$('#completedOrdersDiv').on('click',function(){ 
		$(".status_completed").show(); $(".status_noncompleted").hide();
	});
	
	$('#nonCompletedOrdersDiv').on('click',function(){  
		$(".status_completed").hide(); $(".status_noncompleted").show();
        
	});
});



</script>
