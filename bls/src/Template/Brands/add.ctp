<?= $this->Html->css('admin/bootstrap-multiselect.css') ?>
<?= $this->Html->script('admin/bootstrap-multiselect.min.js');?>
<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('List Brands'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= __('Add Brand') ?>  <small></small></h2>
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
    <?= $this->Form->create($brand, ['type'=>'file', 'class'=>'form-horizontal form-label-left']) ?>
    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('name', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('image', ['type'=>'file','required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); 
						echo $this->Form->input('image_dir', ['type'=>'hidden']);
						?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cates<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('cates', ['id'=>'example-getting-started', 'options' => $list, 'multiple'=>true,'required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12'],['escape' => false]); ?>
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
					
        <?php
            /* echo $this->Form->input('name');
            echo $this->Form->input('image', ['type'=>'file']);
			echo $this->Form->input('image_dir', ['type'=>'hidden']); */
           // echo $this->Form->input('categories_ids');
			/* echo $this->Form->input('cates',[ /* 'default'=>$selected , */ //'id'=>'example-getting-started', 'options' => $list, 'multiple'=>true],['escape' => false]);
            //echo $this->Form->input('status'); */
        ?>
   
    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <!--<button type="submit" class="btn btn-success">Submit</button>-->
						 <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
    
                      </div>
                    </div>
    <?= $this->Form->end() ?>
</div>
              </div>
            </div>
          </div>
 <!-- Initialize the plugin: -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example-getting-started').multiselect({
			enableClickableOptGroups: true,
            enableCollapsibleOptGroups: true,
            enableFiltering: true,
            includeSelectAllOption: true
			});
			  
        });
    </script>