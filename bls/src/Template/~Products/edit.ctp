<?= $this->Html->css('admin/bootstrap-multiselect.css') ?>
<?= $this->Html->script('admin/bootstrap-multiselect.min.js');?>
<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('New Keyword'), ['controller' => 'Keywords', 'action' => 'add']) ?></li>
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
					
		<!--Keywords-->
					
        </div>
        
		
			
				<div id="step-4">
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
	
	
	
	<div class="productsImages form large-9 medium-8 columns content">
		<?= $this->Form->create('productimage', ['type'=>'file','class'=>'form-horizontal form-label-left', 'url' =>['controller'=>'ProductsImages', 'action' => 'addimage']]) ?>
		<fieldset>
        <legend><?= __('Add Products Image') ?></legend>
		
		
		<table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                
                <th><?= $this->Paginator->sort('image') ?></th>
                <th><?= $this->Paginator->sort('color_id') ?></th>
               
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product->products_images as $productsImage): ?>
            <tr>
               
               
                <td><?= $this->Html->image('files/ProductsImages/image/'.$productsImage->image, ['alt'=>'Image','height' => 75, 'width' => 100]); ?></td>  
				<td>
				<?= $this->Html->image('files/Colors/image/'.$productsImage->color->image, ['alt'=>'Color','height' => 25, 'width' => 25]); ?>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductsImages','action' => 'edit', $productsImage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductsImages','action' => 'deleteimage', $productsImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsImage->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
		<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Images<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('file.image[]', ['label'=>'Images','type'=>'file', 'multiple'=>true,'required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					
					
					
			<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Color<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('color_id', ['options' => $colors, 'label'=>'Color', 'required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
            </div>		
			
			
			
			
			<?php 
			echo $this->Form->input('product_id', ['value'=>$product->id, 'type'=>'hidden']);
            echo $this->Form->input('image_dir', ['type'=>'hidden']);
           
        ?>
		</fieldset>
		
		
		
		
		<div class="ln_solid"></div>
									<div class="form-group">
									  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
										 <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
					
									  </div>
									</div>	
		
		
		<?= $this->Form->end() ?>
	
	</div>
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
