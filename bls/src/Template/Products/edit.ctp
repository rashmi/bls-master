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
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        
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
	

                  </div>
                  <!-- End SmartWizard Content -->
			<?= $this->Form->end() ?>	
	
	

	
	
	
 <!-- Marketing Images -->	
 
 
 
	<div class="productsImages form large-9 medium-8 columns content">
		<?= $this->Form->create('productsMarketingImage', ['type'=>'file','class'=>'form-horizontal form-label-left', 'url' =>['controller'=>'ProductsMarketingImages', 'action' => 'add']]) ?>
		<fieldset>
		
		
        <legend><?= __('Marketing Images') ?></legend>
		  <?php foreach ($product->products_marketing_images as $productsmarketingImage): ?>
        
               
        <div class="col-sm-2"> 
			  <div class="box-thumb">
			  
              <div class="thumb-product">  
			  <?= $this->Html->image('files/ProductsMarketingImages/image/'.$productsmarketingImage->image, ['alt'=>'Image','class'=>'img-responsive']); ?>
			  </div>
			  
			  <div class="clearfix"></div>				
				
				
                <div class="col-xs-12 text-right action">
                    <?= $this->Html->link('', ['controller' => 'ProductsMarketingImages','action' => 'edit', $productsmarketingImage->id], ['class'=>'fa fa-pencil']) ?>
                    <?= $this->Form->postLink('', ['controller' => 'ProductsMarketingImages','action' => 'deleteimage', $productsmarketingImage->id], ['class'=>'fa fa-trash','confirm' => __('Are you sure you want to delete # {0}?', $productsmarketingImage->id)]) ?>
                </div>
				  <div class="clearfix"></div>
				</div>
        </div>
        <?php endforeach; ?>
		<div class="clearfix"></div>
	
					
			<?php 
			echo $this->Form->input('product_id', ['value'=>$product->id, 'type'=>'hidden']);
            echo $this->Form->input('image_dir', ['type'=>'hidden']);
           
        ?>

		<div class="form-group gray form-horizontal">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Add Marketing Images
                      </label>
                      <div class="col-md-3 col-sm-6 col-xs-12 mtop10">
						<?php echo $this->Form->input('image', ['label'=>'Images','type'=>'file','required'=> true, 'label' => false, 'class'=>'col-md-7 col-xs-12']); ?>
						
                      </div>
					  <div class="col-md-2">
						<div class="form-group">
										 <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
					
									  </div>
						</div>	
        </div>
		
						
		
			</fieldset>
		<?= $this->Form->end() ?>
	
	</div>

	
<!-- Color Images  -->	
	<div class="productsImages form large-9 medium-8 columns content">
		<?= $this->Form->create('productimage', ['type'=>'file','class'=>'form-horizontal form-label-left', 'url' =>['controller'=>'ProductsImages', 'action' => 'add']]) ?>
		<fieldset>
        <legend><?= __('Add Products Image') ?></legend>

		

    <?php foreach ($product->products_images as $productsImage): ?>
       
					
			 <div class="col-sm-2"> 
			  <div class="box-thumb">
			  
              <div class="thumb-product">  
			  <?= $this->Html->image('files/ProductsImages/image/'.$productsImage->image, ['alt'=>'Image','class'=>'img-responsive']); ?>
			  	
			  </div>
			  
			  <div class="clearfix"></div>				
				
				
                <div class="col-xs-12 text-right action">
				
                    <?= $this->Html->link('', ['controller' => 'ProductsImages','action' => 'edit', $productsImage->id], ['class'=>'fa fa-pencil']) ?>
                    <?= $this->Form->postLink('', ['controller' => 'ProductsImages','action' => 'deleteimage', $productsImage->id], ['class'=>'fa fa-trash','confirm' => __('Are you sure you want to delete # {0}?', $productsImage->id)]) ?>
					
					<?= $this->Html->image('files/Colors/image/'.$productsImage->color->image, ['alt'=>'Color','height' => 20,'width' => 20]); ?>
                </div>
				  <div class="clearfix"></div>
				</div>
        </div>		
					
 
            <?php endforeach; ?>
			
		 <div class="clearfix"></div>
		 
		 <div class="ln_solid"></div>
		 <div class="col-sm-7">
		<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Add Color Images
                      </label>
                      <div class="col-md-9 col-xs-12">
						<?php echo $this->Form->input('image', ['label'=>'Images','type'=>'file','required'=> true, 'label' => false, 'class'=>'col-md-7 col-xs-12']); ?>
                      </div>
        </div>
				</div>	
					
			 <div class="col-sm-3">		
		<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Color<span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-xs-12">
						<?php echo $this->Form->input('color_id', ['options' => $colors, 'label'=>'Color', 'required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
        </div>		
			</div>			
									  <div class="col-md-2 col-xs-12 ">
									  <div class="form-group">
										 <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
									  </div>
									</div>	
			
			<?php 
			echo $this->Form->input('status', ['type'=>'hidden', 'value'=>1]);
			echo $this->Form->input('product_code', ['type'=>'hidden', 'value'=>'HCGS-07']);
			echo $this->Form->input('product_id', ['value'=>$product->id, 'type'=>'hidden']);
            echo $this->Form->input('image_dir', ['type'=>'hidden']);
           
        ?>
		</fieldset>
		
		
									
		
		
		<?= $this->Form->end() ?>
	
	</div>
	
	
	
	
	<div class="clearfix"></div>
		 
		 <div class="ln_solid"></div>
	
	
	<!--Promotions -->

    <h3><?= __('Promotions') ?></h3>	
<?= $this->Form->create("promotion", ['url'=>['controller'=>'Promotions', 'action'=>'addPromotion'], ['class'=>'form-inline']]) ?>
    <table  class="table table-striped responsive-utilities jambo_table bulk_action" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               
                <th><?= h('Promo Code') ?></th>
                <th><?= h('Discounted Amount') ?></th>
				<th><?= h('Discount In') ?></th>
                <th><?= h('QTY') ?></th>
                <th><?= h('Start Date') ?></th>
                <th><?= h('End Date') ?></th>
                <th><?= h('Associated') ?></th>
                <th><?= h('Assoc/Product') ?></th>
                <th><?= h('Assoc/Amount') ?></th>
                <th><?= h('Assoc/QTY') ?></th>
                <th><?= h('Assoc/Discount In') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
	
            <?php foreach ($product->promotions as $promotion): ?>
            <tr>
             
                <td><?= h($promotion->promo_code) ?></td>
                <td><?= h($promotion->discounted_amount_parent) ?></td>
				<td><?= h($promotion->discount_parent_in) ?></td>
                <td><?= $this->Number->format($promotion->quantity_parent) ?></td>
                <td><?= h($promotion->start_date) ?></td>
                <td><?= h($promotion->end_date) ?></td>
                <td><?= h(ucfirst($promotion->associated_product)) ?></td>
                <td><?= $this->Number->format($promotion->child_product_id) ?></td>
                <td><?= h($promotion->discounted_amount_child) ?></td>
                <td><?= $this->Number->format($promotion->quantity_child) ?></td>
               
                <td><?= h($promotion->discount_child_in) ?></td>
         
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller'=>'Promotions', 'action' => 'view', $promotion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller'=>'Promotions','action' => 'edit', $promotion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller'=>'Promotions','action' => 'delete', $promotion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $promotion->id)]) ?>
                </td>
            </tr>
			
		
			
            <?php endforeach; ?>
	<tr>
			<td><div class="form-group"> <?= $this->Form->input('promo_code', ['label' => false, 'class'=>'form-control']); ?></div></td>
			<td><div class="form-group"> <?= $this->Form->input('discounted_amount_parent',['label' => false, 'class'=>'form-control']);?></div></td>
			<td><div class="form-group"> <?= $this->Form->input('discount_parent_in', ['options'=>['$'=>'$','%'=>'%'], 'label' => false, 'class'=>'form-control']);?></div></td>
			<td><div class="form-group"> <?= $this->Form->input('quantity_parent',['label' => false, 'class'=>'form-control']);?></div></td>
			<td><div class="form-group"> <?= $this->Form->input('start_date',['label' => false, 'class'=>'form-control']);?></div></td>
			<td><div class="form-group"> <?= $this->Form->input('end_date',['label' => false, 'class'=>'form-control']);?></div></td>
			<td><div class="form-group"> <?= $this->Form->input('associated_product', ['options'=>['True','False'], 'label' => false, 'class'=>'form-control']);?></div></td>
			<td><div class="form-group"> <?= $this->Form->input('child_product_id', ['options'=> $childproducts, 'label' => false, 'class'=>'form-control']);?></div></td>
			<td><div class="form-group"> <?= $this->Form->input('discounted_amount_child',['label' => false, 'class'=>'form-control']);?></div></td>
			<td><div class="form-group"> <?= $this->Form->input('quantity_child',['label' => false, 'class'=>'form-control']);?></div> </td>       
			<td><div class="form-group"> <?= $this->Form->input('discount_child_in',['options'=>['$'=>'$','%'=>'%'], 'label' => false, 'class'=>'form-control']); ?></div></td>
			<?= $this->Form->input('product_id', ['value'=>$product->id,'type'=>'hidden']);?>
			<td><div class="form-group"> <?= $this->Form->button(__('Submit'), ['label' => false, 'class'=>'btn btn-success']) ?></div></td>
			</tr>
	
			</tbody>
		</table>
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
