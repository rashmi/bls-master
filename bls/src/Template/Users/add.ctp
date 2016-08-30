<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">


  <ul class="nav nav-pills links-admin">
        
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>





<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= __('Add Customer') ?>  <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                 <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">-->
				   <?= $this->Form->create($user, ['type'=>'file', 'class'=>'form-horizontal form-label-left']) ?>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('email', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('password', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Firstname<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('user_detail.firstname', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Lastname<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('user_detail.lastname', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <?php echo $this->Form->input('user_detail.image', ['type' => 'file','label' => false,'class'=>'form-control col-md-7 col-xs-12']); 
					        echo $this->Form->input('user_detail.image_dir', ['type' => 'hidden']);
					   ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dob<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('user_detail.dob', ['label' => false,'class'=>'form-control col-md-7 col-xs-12','id' => 'dob', 'readonly']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gender<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   
					Male:<input type="radio" class="flat" name="gender" id="genderM" value = "Male" checked required /> 
					Female:<input type="radio" class="flat" name="gender" id="genderF" value="Female"/>	
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mobile
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('user_detail.mobile', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Block no
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('user_detail.blockno', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unit no
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('user_detail.unitno', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Company
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('user_detail.company', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Position
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('user_detail.position', ['label' => false,'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="status" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="status" value="1"> &nbsp; Active &nbsp;
                          </label>
                          <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="status" value="0"> Inactive
                          </label>
                        </div>
                      </div>
                    </div>
					
					
              
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <!--<button type="submit" class="btn btn-success">Submit</button>-->
						 <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
    
                      </div>
                    </div>
					<?= $this->Form->end() ?>
                  <!--</form>-->
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








