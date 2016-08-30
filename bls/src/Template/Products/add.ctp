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
                  <h2><?= __('Edit Product') ?>  <small></small></h2>
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
                                            <small>Basics</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-2">
                          <span class="step_no">2</span>
                          <span class="step_descr">
                                            Step 2<br />
                                            <small>Prices</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-3">
                          <span class="step_no">3</span>
                          <span class="step_descr">
                                            Step 3<br />
                                            <small>Categories & Brand</small>
                                        </span>
                        </a>
                      </li>
                      
					   <li>
                        <a href="#step-4">
                          <span class="step_no">4</span>
                          <span class="step_descr">
                                            Step 4<br />
                                            <small>Related & Main Promos</small>
                                        </span>
                        </a>
                      </li>
					  
					   <li>
                        <a href="#step-5">
                          <span class="step_no">5</span>
                          <span class="step_descr">
                                            Step 5<br />
                                            <small>Colored & Marketing Images</small>
                                        </span>
                        </a>
                      </li>
					  
					
					 
                    </ul>
        <div id="step-1">
              <h2 class="StepTitle">Basics</h2>             
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
					
		<!--Other-->
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Model<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_attr.model', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Video link<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_attr.video_link', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Size<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_attr.size', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Weight<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_attr.weight', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Packaging<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_attr.packaging', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">UOM<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_attr.uom', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Quantity<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_attr.quantity', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
        </div>
        
		
		<div id="step-2">
                      <h2 class="StepTitle">Prices</h2>
      
					
		<!--List Price-->
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">List price(without GST)<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_price.list_price', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
        </div>
        
		
		<div id="step-3">
            <h2 class="StepTitle">Categories & Brand</h2>
        <!--Categories-->
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Brands<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_attr.brand_id', [ 'options' => $brands,'required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
		<!--Brand-->
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Categories<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_category.category_id', ['options' => $categories,'required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>						
                      </div>
                    </div>
			
					
        </div>
        
			
		<div id="step-4">
                      <h2 class="StepTitle">Main Promos Pages</h2>
        <!--Related & Main Promos-->
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Main Promos 1
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_attr.main_promo_1', ['options' => $main_promos, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
					  </div>
					  
					  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Main Promos 2
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_attr.main_promo_2', ['options' => $main_promos, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
					  </div>
					  
					  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Main Promos 3
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_attr.main_promo_3', ['options' => $main_promos, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
					  </div>
				<h2 class="StepTitle">Related Products</h2>	 
					  
					  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Related Product 1
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_related.relatedproduct1.item_code',['label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
					  </div>
					  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Related Product 2
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_related.relatedproduct2.item_code', ['label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
					  </div>
					  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Related Product 3
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_related.relatedproduct3.item_code', ['label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
					  </div>
					
        </div>
	

		<div id="step-5">
            <h2 class="StepTitle">Colored & Marketing Images</h2>
        <!--Marketing Images-->
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Marketing Images
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('products_marketing_image.image[]', ['label'=>'Images','multiple'=>true,'type'=>'file','required'=> true, 'label' => false, 'class'=>'col-md-7 col-xs-12']); ?>
						<?php echo $this->Form->input('products_marketing_image.image_dir', ['type'=>'hidden']); ?>
                      </div>
                    </div>
					<div class="clearfix"></div>
		 
		 <div class="ln_solid"></div>
		<!--Color Images-->
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Color & Colored Images
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-6">
						<?php echo $this->Form->input('products_image.image', ['label'=>'Images','type'=>'file','required'=> true, 'label' => false, 'class'=>'col-md-5 col-xs-12']); ?>		
						<?php echo $this->Form->input('products_image.image_dir', ['type'=>'hidden']); ?>						
                      </div>
					  <div class="col-md-2 col-sm-2 col-xs-6">
						<?php echo $this->Form->input('products_image.color_id', ['options' => $colors, 'label'=>'Color', 'required'=> true, 'label' => false, 'class'=>'form-control col-md-2 col-xs-12']); ?>						
                      </div>
	  
                    </div>
				
        </div>	

                  </div>
                  <!-- End SmartWizard Content -->
		

		<?= $this->Form->end() ?>	
	
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