<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('List Configrations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= __('Edit Configration') ?>  <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div><div class="x_content">
                  <br />

    <?= $this->Form->create($configration, ['type'=>'file','class'=>'form-horizontal form-label-left']) ?>
					<h3>Basic Settings</h3>
					 <div class="ln_solid"></div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Store Name<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('store_name', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Logo<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					 <?php  echo $this->Html->image('files/Configrations/logo/'.$configration->logo, ['alt'=>'Logo']);
							echo $this->Form->input('logo', ['type'=>'file','label' => false,'class'=>'form-control col-md-7 col-xs-12']);
							echo $this->Form->input('logo_dir', ['type'=>'hidden']); ?>
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('title', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook Link<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('facebook_link', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter Link<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('twitter_link', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Home Link<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('home_link', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<h3>Store Settings</h3>
					 <div class="ln_solid"></div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Currency<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('currency', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">GST<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('gst', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Delivery Charge<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('delivery_charge', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Minimum Net Total Order amount for free delivery<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('min_amt_free_delivery', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email Address of the Admin to receive the Feedback<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('adm_fdbk_email', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Minimum Amount to Avail Promo<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('min_amt_for_promotion', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Invoice Message<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('invoice_msg', ['type'=>'textarea','label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Promotional Page 1<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('promo_page_1', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Promotional Page 2<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('promo_page_2', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Promotional Page 3<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('promo_page_3', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					
					
        
   
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
