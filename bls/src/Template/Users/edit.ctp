<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Form->postLink(__('Delete'),['action' => 'delete', $user->id],['confirm' => __('Are you sure you want to delete # {0}?', $user->id)])
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cart'), ['controller' => 'Cart', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cart'), ['controller' => 'Cart', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Address'), ['controller' => 'UserAddress', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Addres'), ['controller' => 'UserAddress', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Details'), ['controller' => 'UserDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Detail'), ['controller' => 'UserDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= __('Edit Customer Details') ?>  <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div><div class="x_content">
                  <br />
    <?= $this->Form->create($user, ['class'=>'form-horizontal form-label-left']) ?>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('email', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					   <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('password', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
        <?php
            echo $this->Form->input('status');
        ?>
    <div class="ln_solid"></div>
	 <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <!--<button type="submit" class="btn btn-success">Submit</button>-->
						 <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
     
                      </div>
                    </div>
    <?= $this->Form->end() ?>

</div>
              </div>
            </div>
          </div>
