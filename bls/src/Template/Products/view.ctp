<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
     <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
    </ul>
</nav>


<div class="row">
     <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
  <div class="x_title">
	  <h2>Product View</h2> 
		<?php  if($product->status==NULL){
		  echo '<small  class="label label-success">Available</small>' ;
		}else{
		  echo '<small class="label label-danger">Unavailable</small>' ;
		} 
	  ?>
		  <ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>
				<li><a class="close-link"><i class="fa fa-close"></i></a>
				</li>
				
		  </ul>
	  <div class="clearfix"></div>
  </div>

<div class="x_content">

<div class="col-md-12 col-sm-12 col-xs-12">

          <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Basics</a>
                        </li>
						<li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Prices</a>
                        </li>	
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Categories & Brands</a>
                        </li>											
                        <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Images $ Colors</a>
                        </li>
						 </li>
                        <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Related & Main Promos</a>
                        </li>
                      </ul>
					  
		<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

					<!-- start Product Basics -->		
						<h4><?= __('Product Basics') ?></h4>
					
					<blockquote>
                      <p>
					  <h3><?= h($product->title) ?></h3> 
					  <?= h($product->product_desc) ?></p>
                    </blockquote>

					<table cellpadding="1" cellspacing="1">
														
														<tr>
															<td><?= ucfirst('model') ?></td>
															<td><?= h($product->products_attr->model) ?></td>	
														</tr>
														<tr>
															<td><?= ucfirst('video link') ?></td>
															<td><?= h($product->products_attr->video_link) ?></td>	
														</tr>
														<tr>
															<td><?= ucfirst('size') ?></td>
															<td><?= h($product->products_attr->size) ?></td>	
														</tr>
														<tr>
															<td><?= ucfirst('weight') ?></td>
															<td><?= h($product->products_attr->weight) ?></td>	
														</tr>
														<tr>
															<td><?= ucfirst('packaging') ?></td>
															<td><?= h($product->products_attr->packaging) ?></td>	
														</tr>
														<tr>
															<td><?= ucfirst('uom') ?></td>
															<td><?= h($product->products_attr->uom) ?></td>	
														</tr>
														<tr>
															<td><?= ucfirst('quantity') ?></td>
															<td><?= h($product->products_attr->quantity) ?></td>	
														</tr>
													</table>		
					
					
					<!-- end Product Basics-->
					</div>
					
					<div role="tabpanel" class="tab-pane fade in" id="tab_content2" aria-labelledby="home-tab">

								<!-- start Product Prices -->		
												<h4><?= __('Related Products Prices') ?></h4>
												<div>List Price(without GST): <?= h($product->products_price->list_price) ?></div>
												
									
								<!-- end Product Prices-->

					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
								<!-- start Categories -->
													<h4><?= __('Related Categories') ?></h4>
													<?php if (!empty($product->categories)): ?>
													<?php foreach ($product->categories as $categories): ?>
														<div class="keywords"><?= h($categories->name) ?></div>
													<?php endforeach; ?>
													<?php endif; ?>							  
								<!-- end Categories -->
								<!-- start Brand -->
							
													<h4><?= __('Brands') ?></h4>
													<?php if (!empty($product->products_attr->brand)): ?>
													
														
														<div class="keywords"><?= h($product->products_attr->brand->image) ?>
														<?= h($product->products_attr->brand->name) ?></div>
													
													<?php endif; ?>							  
								<!-- end Categories -->
					</div>					
					
					
					
					<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
								
	<h4><?= __('Marketing Images') ?></h4>
        <?php if (!empty($product->products_marketing_images)): ?>     
            <?php foreach ($product->products_marketing_images as $productsMarketingImages): ?>         
			<div class="product_image"><?= $this->Html->image('files/productsMarketingImages/image/'.$productsMarketingImages->image, ['alt'=>'Avatar','height' => '75px', 'width' => '100px']); ?>	</div>				
            <?php endforeach; ?>
        <?php endif; ?>
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
				
				
					<div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
								<!-- start Related Products -->
										
													<h4><?= __('Related Products') ?></h4>
													
													<table cellpadding="0" cellspacing="0">
														<?php if (!empty($product->products_related->relatedproduct1)): ?>
														<tr>
															<td><?= h($product->products_related->relatedproduct1->title) ?></td>	
														</tr>
														<?php endif; ?>	
														<?php if (!empty($product->products_related->relatedproduct2)): ?>
														<tr>
															<td><?= h($product->products_related->relatedproduct2->title) ?></td>	
														</tr>
														<?php endif; ?>
														<?php if (!empty($product->products_related->relatedproduct3)): ?>
														<tr>
															<td><?= h($product->products_related->relatedproduct3->title) ?></td>	
														</tr>
														<?php endif; ?>
													</table>
													
								<!-- end Related Products -->
								<!-- Start  Main Promos -->
								<h4><?= __('Main Promos Pages') ?></h4>
								<?= h($product->products_attr->main_promo_1) ?>
								</br>
								<?= h($product->products_attr->main_promo_2) ?>
								</br>
								<?= h($product->products_attr->main_promo_3) ?>
								
								<!-- end  Main Promos -->
		
		
					</div>
			
	
	
	
    </div>
    </div>
    
	
	
	
				</div>
			</div>
		</div>
	</div>
</div>
