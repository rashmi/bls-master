<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userDetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= __('Edit User Detail') ?>  <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div><div class="x_content">
                  <br />
    <?= $this->Form->create($userDetail, ['type' => 'file','class'=>'form-horizontal form-label-left']) ;
//debug($userDetail);
	?>
	
   <!-- <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Id <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('user_id', ['options' => $users,'label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>-->
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Firstname
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('firstname', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Lastname
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('lastname', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <?php echo $this->Html->image('files/Userdetails/image/'.$userDetail->image, ['alt'=>'Avatar', 'class'=>'thumbnail']);
					   echo $this->Form->input('image', ['type' => 'file','label' => false,'class'=>'form-control col-md-7 col-xs-12']); 
					   echo $this->Form->input('image_dir', ['type' => 'hidden'])
					   ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dob
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('dob', ['label' => false,'class'=>'form-control col-md-7 col-xs-12', 'readonly' ]); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gender
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  
					 <?php 
					  $gender = $userDetail['gender'];
					 ?>
					Male:<input type="radio" class="flat" name="gender" id="genderM" value = "Male" <?php if ($gender == 'Male'): ?> checked = "checked"  required <?php endif; ?>  /> 
					Female:<input type="radio" class="flat" name="gender" id="genderF" value="Female" <?php if ($gender == 'Female'): ?> checked = "checked" required <?php endif; ?> />					  
                      </div>
                    </div>

					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mobile
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
		  
		   <script type="text/javascript">
            $(document).ready(function() {
              $('#dob').daterangepicker({
				format: 'DD-MM-YYYY',
				maxDate: new Date,
				 showDropdowns: true,
                singleDatePicker: true,
                calender_style: "picker_4"
              }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
              });
            });
          </script>
