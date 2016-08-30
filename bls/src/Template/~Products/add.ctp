<?= $this->Html->css('admin/bootstrap-multiselect.css') ?>
<?= $this->Html->script('admin/bootstrap-multiselect.min.js');?>

<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
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

		<?= $this->Form->create($product, ['type'=>'file','class'=>'form-horizontal form-label-left']) ?>
	<!-- Smart Wizard -->
                  <div id="wizard" class="form_wizard wizard_horizontal">
                    <ul class="wizard_steps">
                      <li>
                        <a href="#step-1">
                          <span class="step_no">1</span>
                          <span class="step_descr">
                                            Step 1<br />
                                            <small>Product Details</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-2">
                          <span class="step_no">2</span>
                          <span class="step_descr">
                                            Step 2<br />
                                            <small>Product Prices</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-3">
                          <span class="step_no">3</span>
                          <span class="step_descr">
                                            Step 3<br />
                                            <small>Dependants</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-4">
                          <span class="step_no">4</span>
                          <span class="step_descr">
                                            Step 4<br />
                                            <small>Images & Colors</small>
                                        </span>
                        </a>
                      </li>
					  <li>
                        <a href="#step-5">
                          <span class="step_no">5</span>
                          <span class="step_descr">
                                            Step 5<br />
                                            <small>Attributes</small>
                                        </span>
                        </a>
                      </li>
                    </ul>
        <div id="step-1">
              <h2 class="StepTitle">Product Details</h2>             
		<!--Title-->
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('title', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<!--Description-->
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('product_desc', ['type'=>'textarea','required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>	
                    </div>
        
		
		<div id="step-2">
                      <h2 class="StepTitle">Product Prices</h2>
                     <!--Net Price-->
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Net price<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_price.net_price', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); 
						?>
                      </div>
                    </div>
					
					<!--Sale Price-->
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sale price<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_price.sale_price', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
                    </div>
        
		
		<div id="step-3">
            <h2 class="StepTitle">Keywords, Categories & Brands</h2>
                     <!--Brands-->
					<!--<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Brands<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('brands._ids', ['id'=>'example-getting-started-brands', 'options' => $brands, 'multiple'=>true,'required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12'],['escape' => false]); ?>
                      </div>
                    </div>-->
					
					<!--Categories-->
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Categories<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('categories._ids', ['id'=>'example-getting-started-categories', 'options' => $categories, 'multiple'=>true,'required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12'],['escape' => false]); ?>
                      </div>
                    </div>
					
					
        
		<div id="step-4">
                      <h2 class="StepTitle">Images & Colors</h2>
                    
					<!--Images-->
					
					
				<div class="form-group">
						<label  class="control-label col-md-3">					
							Images						
						</label>
                   
						<label class="control-label col-md-4">
							Color
						</label>
						
						<label class="control-label col-md-2">
                            Marketing Photos   
                        </label>
				</div>
					
	
					<div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Images<span class="required">*</span>
                      </label>
                      <div  class="col-md-3 col-sm-3 col-xs-12">
						<?php $aa=1; echo $this->Form->input('products_image.file.'.$aa.'.image[]',['multiple'=>true,'type'=>'file', 'required'=> true, 'label' => false, 'class'=>'form-control col-md-3 col-xs-12']); ?>
						<?php echo $this->Form->input('products_image.file.'.$aa.'.image_dir',['type'=>'hidden']); ?>
						<div class="clearfix"></div>
						
                      </div>
                   
					<div class="col-sm-2"><?php echo $this->Form->input('products_image.file.'.$aa.'.color_id',[ 'required'=> true, 'options' => $colors,  'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
						</div>
						
						<div class="col-sm-2 radio">
                          <label class="">
                            <div class="iradio_flat-green checked" style="position: relative;">
								<input type="radio" name="iCheck" value="1" checked="" class="flat" style="position: absolute; opacity: 0;">	
							</div>
                          </label>
                        </div>
						
						
					 </div>
					<div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Images<span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
						<?php $ab=2; echo $this->Form->input('products_image.file.'.$ab.'.image[]',['multiple'=>true,'type'=>'file', 'required'=> true, 'label' => false, 'class'=>'form-control col-md-3 col-xs-12']); ?>
						<?php echo $this->Form->input('products_image.file.'.$ab.'.image_dir',['type'=>'hidden']); ?>
					  </div>
					  
						<div class="col-sm-2"><?php echo $this->Form->input('products_image.file.'.$ab.'.color_id',[ 'required'=> true, 'options' => $colors,  'label' => false,  'class'=>'form-control col-md-7 col-xs-12']); ?>
						</div>
						<div class="col-sm-2 radio">
                          <label class="">
                            <div class="iradio_flat-green checked" style="position: relative;">
								<input type="radio" name="iCheck" value="1"  class="flat" style="position: absolute; opacity: 0;">
							</div>
                          </label>
                        </div> 
                      
                    </div>
					
					<!--<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Colors<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_image.color_id',[ 'required'=> true, 'options' => $colors,  'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>-->
					
				
                    </div>
			
				<div id="step-5">
                      <h2 class="StepTitle">Attributes</h2>
                      	<!--Attributes-->
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Attributes<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_attr.attributes', ['required'=> true,  'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
					  </div>
					  
					  
					  <!--<div class="form-group">
					  <div class="multi-field-wrapper">
					  
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Attributes<span class="required">*</span>
                      </label>
                     	
									<div class="multi-fields col-md-3 col-sm-3 col-xs-12">
									<div class="multi-field ">
									<input type="text" class="form-control col-md-6 col-xs-12" name="stuff[]">
									<i class="fa fa-remove remove-field"></i>
									</div>
									
									</div>
									<i class="fa fa-plus add-field"></i>
									</div>
					  
					  
					  </div> -->
					  
				  
					  
                    
					
					
					<!--<div class="ln_solid"></div>
									<div class="form-group">
									  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
										<button type="submit" class="btn btn-primary">Cancel</button>
										 <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
					
									  </div>
									</div>-->	
					
                    </div>

			
                  </div>
                  <!-- End SmartWizard Content -->
			<?= $this->Form->end() ?>	
	
</div>
              </div>
            </div>
          </div>



<?= $this->Html->script('admin/wizard/jquery.smartWizard.js');?>
<?php  /* $this->Html->script('admin/dropzone/dropzone.js'); */?>



 <!-- Initialize the plugin: -->
    <script type="text/javascript">
        $(document).ready(function() {
			
			
		// Smart Wizard
		$('#wizard').smartWizard();
  
			
			
            $('#example-getting-started-brands').multiselect({
			enableClickableOptGroups: true,
            enableCollapsibleOptGroups: true,
            enableFiltering: true,
            includeSelectAllOption: true
			});
			
			$('#example-getting-started-categories').multiselect({
			enableClickableOptGroups: true,
            enableCollapsibleOptGroups: true,
            enableFiltering: true,
            includeSelectAllOption: true
			});
			
			$('#example-getting-started-keywords').multiselect({
			enableClickableOptGroups: true,
            enableCollapsibleOptGroups: true,
            enableFiltering: true,
            includeSelectAllOption: true
			});
			
			
			
			
			
$('.multi-field-wrapper').each(function() {
    var $wrapper = $('.multi-fields', this);
    $(".add-field", $(this)).click(function(e) {
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
    });
    $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
    });
});
			
			
			
        });
		</script>