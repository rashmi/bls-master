<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('List User Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= __('Add User Detail') ?>  <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div><div class="x_content">
                  <br />
    <?= $this->Form->create($userDetail, ['type' => 'file','class'=>'form-horizontal form-label-left']) ?>
    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Id <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('user_id', ['options' => $users,'label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Firstname<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('firstname', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Lastname<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('lastname', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <?php echo $this->Form->input('image', ['type' => 'file','label' => false,'class'=>'form-control col-md-7 col-xs-12']); 
					        echo $this->Form->input('image_dir', ['type' => 'hidden']);
					   ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dob<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('dob', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gender<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('gender', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mobile<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('mobile', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
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

