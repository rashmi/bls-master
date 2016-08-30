<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
     <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<!--<div class="products view large-9 medium-8 columns content">
   
	
    <div class="related">
     
    </div>
    <div class="related">

        
    </div>
	<div class="related">
        
    </div>
   
    <div class="related">
        
    </div>
	
    <div class="related">
        
       
    </div>
    <div class="related">
        
    </div>
    
	 <div class="related">
        
    </div>
</div>-->

<div class="row">
     <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
  <div class="x_title">
	  <h2>User Profile
		</h2>
		  <ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>
				<li><a class="close-link"><i class="fa fa-close"></i></a>
				</li>
		  </ul>
	  <div class="clearfix"></div>
  </div>

<div class="x_content">
<h3><?= h($product->title) ?></h3>
<div class="col-md-8 col-lg-8 col-sm-7">

<blockquote>
                      <p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                        posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>



</div>
<div class="col-md-12 col-sm-12 col-xs-12">

          <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Product Prices</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Categories</a>
                        </li>
						<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Brands</a>
                        </li>
						<li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Keywords</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Images $ Colors</a>
                        </li>
						 </li>
                        <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Attributes</a>
                        </li>
                      </ul>
					  
	<div id="myTabContent" class="tab-content">
	
					<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

								<!-- start Product Prices -->
										
												<h4><?= __('Related Products Prices') ?></h4>
												<div>Net Price: <?= h($product->products_price->net_price) ?></div>
												<div>Sale Price: <?= h($product->products_price->sale_price) ?></div>
											
										


										
								<!-- end Product Prices-->

					</div>
					<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

								<!-- start Categories -->
													<h4><?= __('Related Categories') ?></h4>
													<?php if (!empty($product->categories)): ?>
													<?php foreach ($product->categories as $categories): ?>
														<div class="keywords"><?= h($categories->name) ?></div>
													<?php endforeach; ?>
													<?php endif; ?>							  
								<!-- end Categories -->
					</div>					
					<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
								<!-- start Brands -->	
												<!--		<h4><?= __('Related Brands') ?></h4>
														<?php if (!empty($product->brands)): ?>
														<?php foreach ($product->brands as $brands): ?>
														<div><?= $this->Html->image('files/Brands/image/'.$brands->image, ['alt'=>'Brands','height' => 75, 'width' => 100]); ?><?= h($brands->name) ?>	</div>	
														<?php endforeach; ?>
														<?php endif; ?>		-->				  
								<!-- end Brands -->
					</div>
					<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
								<!-- start Keywords -->
														
																			
								<!-- end Keywords -->
					</div>
					
					
					<div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
								<!-- start Images $ Colors -->
									<h4><?= __('Related Products Images') ?></h4>
												<?php if (!empty($product->products_images)): ?>
												<?php foreach ($product->products_images as $productsImages): ?>
												
									<div class="product_image"><?= $this->Html->image('files/ProductsImages/image/'.$productsImages->image, ['alt'=>'Avatar','height' => '75px', 'width' => '100px']); ?>		
									<span class="product_image_color"><?= $this->Html->image('files/Colors/image/'.$productsImages->color->image, ['alt'=>'logo','height' => '25px', 'width' => '25px']); ?>
									</span></div>			
																								
												
												<?php endforeach; ?>
												<?php endif; ?>						  
								<!-- end Images $ Colors -->
					</div>
					
					
					<div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
								<!-- start Attributes -->
										
													<h4><?= __('Related Products Attrs') ?></h4>
													<?php if (!empty($product->products_attr)): ?>
													<table cellpadding="0" cellspacing="0">
														<tr>
															<th><?= __('Attributes') ?></th>
														</tr>
														<tr>
															<td><?= h($product->products_attr->attributes) ?></td>	
														</tr>
													</table>
													<?php endif; ?>




											
								<!-- end Attributes -->
					</div>
					
					
	
	
	
	
    </div>
    </div>
    
	
	
	
				</div>
			</div>
		</div>
	</div>
</div>
