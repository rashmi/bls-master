<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>



<!--<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($user->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
	 <div class="related">
        <h4><?= __('Related User Address') ?></h4>
        <?php if (!empty($user->user_addresses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Street Address') ?></th>
                <th><?= __('City') ?></th>
                <th><?= __('State') ?></th>
                <th><?= __('Country') ?></th>
                <th><?= __('Pincode') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_addresses as $userAddress): ?>
            <tr>
                <td><?= h($userAddress->id) ?></td>
                <td><?= h($userAddress->user_id) ?></td>
                <td><?= h($userAddress->street_address) ?></td>
                <td><?= h($userAddress->city) ?></td>
                <td><?= h($userAddress->state) ?></td>
                <td><?= h($userAddress->country) ?></td>
                <td><?= h($userAddress->pincode) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserAddresses', 'action' => 'view', $userAddress->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserAddresses', 'action' => 'edit', $userAddress->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserAddresses', 'action' => 'delete', $userAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAddress->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
	

	
        <h4><?= __('Related User Details') ?></h4>
        <?php if (!empty($user->user_detail)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Firstname') ?></th>
                <th><?= __('Lastname') ?></th>
                <th><?= __('Image') ?></th>
                <th><?= __('Dob') ?></th>
                <th><?= __('Gender') ?></th>
                <th><?= __('Mobile') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
           
			<tr>
                <td><?= h($user->user_detail->id) ?></td>
                <td><?= h($user->user_detail->user_id) ?></td>
                <td><?= h($user->user_detail->firstname) ?></td>
                <td><?= h($user->user_detail->lastname) ?></td>
                <td><?= h($user->user_detail->image) ?></td>
                <td><?= h($user->user_detail->dob) ?></td>
                <td><?= h($user->user_detail->gender) ?></td>
                <td><?= h($user->user_detail->mobile) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserDetails', 'action' => 'view', $user->user_detail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserDetails', 'action' => 'edit', $user->user_detail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserDetails', 'action' => 'delete', $user->user_detail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_detail->id)]) ?>
                </td>
            </tr>
        </table>
        <?php endif; ?>
    </div>
	
	
    <div class="related">
        <h4><?= __('Related Cart') ?></h4>
        <?php if (!empty($user->cart)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('User Comments') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->cart as $cart): ?>
            <tr>
                <td><?= h($cart->id) ?></td>
                <td><?= h($cart->user_id) ?></td>
                <td><?= h($cart->user_comments) ?></td>
                <td><?= h($cart->created) ?></td>
                <td><?= h($cart->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cart', 'action' => 'view', $cart->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cart', 'action' => 'edit', $cart->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cart', 'action' => 'delete', $cart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cart->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Orders') ?></h4>
        <?php if (!empty($user->orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Shipping Address Id') ?></th>
                <th><?= __('Order Status') ?></th>
                <th><?= __('User Comments') ?></th>
                <th><?= __('Admin Comments') ?></th>
                <th><?= __('Transaction Id') ?></th>
                <th><?= __('Refrence Id') ?></th>
                <th><?= __('Invoice Id') ?></th>
                <th><?= __('Other Id') ?></th>          
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->orders as $orders): ?>
            <tr>
                <td><?= h($orders->id) ?></td>
                <td><?= h($orders->user_id) ?></td>
                <td><?= h($orders->shipping_address_id) ?></td>
                <td><?= h($orders->order_status) ?></td>
                <td><?= h($orders->user_comments) ?></td>
                <td><?= h($orders->admin_comments) ?></td>
                <td><?= h($orders->transaction_id) ?></td>
                <td><?= h($orders->refrence_id) ?></td>
                <td><?= h($orders->invoice_id) ?></td>
                <td><?= h($orders->other_id) ?></td>
             
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
   
</div>-->






   <div class="row">
     <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
  <div class="x_title">
	  <h2>User Profile<small>

	  <?php  if($user->status==1){
		  echo '<small class="label label-success">Active</small>' ;
		}else{
		  echo '<small class="label label-danger">Inactive</small>' ;
		} 
	  
	  ?>
		</h2>
		  <ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>
					<!--<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
					  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
						</li>
					  </ul>
					</li>-->
				<li><a class="close-link"><i class="fa fa-close"></i></a>
				</li>
		  </ul>
	  <div class="clearfix"></div>
  </div>

<div class="x_content">
<div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                    <div class="profile_img">

				
					
					
                      <!-- end of image cropping -->
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div class="avatar-view" title="Change the avatar">
						<?php if(@$user->user_detail->image!=''){ ?> 
							<?= $this->Html->image('files/Userdetails/image/'.@$user->user_detail->image, ['alt'=>'Avatar']); ?>		
						<?php }else{ ?> 
							<?= $this->Html->image('files/Noimage/no-man.png', ['alt'=>'Avatar']); ?>		
						<?php } ?>
										  
                        </div>
                        <!-- Loading state -->
                       
                      </div>
                      <!-- end of image cropping -->

                    </div>
                    <h3><?= h(ucfirst(@$user->user_detail->firstname)) ?> <?= h(ucfirst(@$user->user_detail->lastname)) ?></h3>

                    <ul class="list-unstyled user_data">
                      <li><i class="fa fa-map-marker user-profile-icon"></i> <?= h(@$user->user_detail->dob) ?>
                      </li>

                      <li>
                        <i class="fa fa-briefcase user-profile-icon"></i> <?= h(@$user->user_detail->mobile) ?>
                      </li>

                      <li class="m-top-xs">
                        <i class="fa fa-external-link user-profile-icon"></i>
                        <?= h($user->email) ?>
                      </li>
					  
					  <li class="m-top-xs">
                        <i class="fa fa-external-link user-profile-icon"></i>
						
				<?php  if(@$user->user_detail->gender=='M'){
				  echo 'Male' ;
				}elseif(@$user->user_detail->gender=='F'){
				  echo 'Female' ;
				} 
			  ?>
		</li>
                    </ul>
					<?= $this->Html->link(__('Edit User Details'), ['controller'=>'UserDetails', 'action' => 'edit', $user->user_detail->id], ['class'=>'btn btn-success']) ?>
                   <!-- <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>-->
   		
			
					<br />

                    

                  </div>
				  
				  
				  
				  
    <div class="col-md-9 col-sm-9 col-xs-12">

             
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Addresses</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Cart</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Orders</a>
                        </li>
                      </ul>
					  
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

    <!-- start user addresses -->
	 <?php if (!empty($user->user_addresses)){ ?>
        <table class="data table table-striped no-margin">
			<thead>
                              <tr>
                                <th>#</th>
                                <th><?= __('Street Address') ?></th>
                                <th><?= __('City') ?></th>
                                <th><?= __('State') ?></th>
								 <th><?= __('Country') ?></th>
								 <th><?= __('Pincode') ?></th>
								  <th colspan="2" class="text-center"><?= __('Action') ?></th>
                              </tr>
			</thead>
						
							
		<tbody>				
		<?php foreach ($user->user_addresses as $userAddress): ?>
            <tr>
                <td><?= h($userAddress->id) ?></td>
                <td><?= h($userAddress->street_address) ?></td>
                <td><?= h($userAddress->city) ?></td>
                <td><?= h($userAddress->state) ?></td>
                <td><?= h($userAddress->country) ?></td>
                <td><?= h($userAddress->pincode) ?></td>
                <td class="actions text-center">
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserAddresses', 'action' => 'edit', $userAddress->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserAddresses', 'action' => 'delete', $userAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAddress->id)]) ?>
                </td>
            </tr>
		<?php endforeach; ?>
			
		</tbody>
	</table> 
	<?= $this->Html->link(__('Add New Address'), ['controller' => 'UserAddresses', 'action' => 'add'], ['class'=>'btn btn-success']) ?>
	 <?php }else {
		 echo 'Address not added!'; 
			 echo '<br>'.$this->Html->link(__('Add New Address'), ['controller' => 'UserAddresses', 'action' => 'add'], ['class'=>'btn btn-success']);		 
		} ?>
    <!-- end user Addresses-->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

    <!-- start user Cart -->
			<?php if (!empty($user->cart)){ ?>
                          <table class="data table table-striped no-margin">
                            <thead>
                              <tr>
                               
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Item Price</th>
                                <th>Items Price</th>
                              </tr>
                            </thead>
							
						
                            <tbody>
                              <tr>
                                
                                <td><?= h($user->cart->user_comments) ?></td>
                                <td>2</td>
                                <td >$20</td>
                                <td>$40</td>
                              </tr>
                             
                            </tbody>
						
                          </table>
			<?php }else{
				
				echo "Cart is Empty!!!";
				
			} ?>					  				  
    <!-- end user Cart -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                            photo booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>
                      </div>
                    </div>
    </div>
    </div>
    </div>
    </div>
    </div>