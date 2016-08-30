<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('List Admins'), ['action' => 'index']) ?></li>
    </ul>
</nav>

<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= __('Add Admin') ?>  <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                   <!-- <li class="dropdown">
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
                  <br />
                 <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">-->
				   <?= $this->Form->create($admin, ['type' => 'file', 'class'=>'form-horizontal form-label-left']) ?>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('firstname', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo $this->Form->input('lastname', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php echo $this->Form->input('email', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('image', ['type'=>'file', 'required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<?php echo $this->Form->input('image_dir', ['type'=>'hidden']); ?>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('password', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
                  <!--  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                          </label>
                          <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="female"> Female
                          </label>
                        </div>
                      </div>
                    </div>-->
					
					  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                     
						<?php echo $this->Form->input('mobile', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
						
                      </div>
                    </div>
					
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                     
						<?php echo $this->Form->input('dob', ['required'=> true, 'label' => false, 'class'=>'date-picker form-control col-md-7 col-xs-12', 'readonly']); ?>
						
                      </div>
                    </div>
					
						<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Admin Level<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                     
						<?php echo $this->Form->input('group_id', ['options' => $groups,'required'=> true, 'label' => false, 'class'=>'date-picker form-control col-md-7 col-xs-12']); ?>
						
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
		  