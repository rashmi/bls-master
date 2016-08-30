<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
       
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Item Code') ?></th>
            <td><?= h($product->item_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($product->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($product->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Product Desc') ?></h4>
        <?= $this->Text->autoParagraph(h($product->product_desc)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products Attrs') ?></h4>
        <?php if (!empty($product->products_attrs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Brand Id') ?></th>
                <th><?= __('Model') ?></th>
                <th><?= __('Video Link') ?></th>
                <th><?= __('Size') ?></th>
                <th><?= __('Weight') ?></th>
                <th><?= __('Packaging') ?></th>
                <th><?= __('Uom') ?></th>
                <th><?= __('Quantity') ?></th>
                <th><?= __('Attributes') ?></th>
                <th><?= __('Main Promo 1') ?></th>
                <th><?= __('Main Promo 2') ?></th>
                <th><?= __('Main Promo 3') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->products_attrs as $productsAttrs): ?>
            <tr>
                <td><?= h($productsAttrs->id) ?></td>
                <td><?= h($productsAttrs->product_id) ?></td>
                <td><?= h($productsAttrs->brand_id) ?></td>
                <td><?= h($productsAttrs->model) ?></td>
                <td><?= h($productsAttrs->video_link) ?></td>
                <td><?= h($productsAttrs->size) ?></td>
                <td><?= h($productsAttrs->weight) ?></td>
                <td><?= h($productsAttrs->packaging) ?></td>
                <td><?= h($productsAttrs->uom) ?></td>
                <td><?= h($productsAttrs->quantity) ?></td> 
                <td><?= h($productsAttrs->attributes) ?></td>
                <td><?= h($productsAttrs->main_promo_1) ?></td>
                <td><?= h($productsAttrs->main_promo_2) ?></td>
                <td><?= h($productsAttrs->main_promo_3) ?></td>
                <td><?= h($productsAttrs->created) ?></td>
                <td><?= h($productsAttrs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductsAttrs', 'action' => 'view', $productsAttrs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductsAttrs', 'action' => 'edit', $productsAttrs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductsAttrs', 'action' => 'delete', $productsAttrs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsAttrs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products Images') ?></h4>
        <?php if (!empty($product->products_images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Product Code') ?></th>
                <th><?= __('Image') ?></th>
                <th><?= __('Image Dir') ?></th>
                <th><?= __('Color Id') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->products_images as $productsImages): ?>
            <tr>
                <td><?= h($productsImages->id) ?></td>
                <td><?= h($productsImages->product_id) ?></td>
                <td><?= h($productsImages->product_code) ?></td>
                <td><?= h($productsImages->image) ?></td>
                <td><?= h($productsImages->image_dir) ?></td>
                <td><?= h($productsImages->color_id) ?></td>
                <td><?= h($productsImages->status) ?></td>
                <td><?= h($productsImages->created) ?></td>
                <td><?= h($productsImages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductsImages', 'action' => 'view', $productsImages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductsImages', 'action' => 'edit', $productsImages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductsImages', 'action' => 'delete', $productsImages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsImages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products Marketing Images') ?></h4>
        <?php if (!empty($product->products_marketing_images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Image') ?></th>
                <th><?= __('Image Dir') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->products_marketing_images as $productsMarketingImages): ?>
            <tr>
                <td><?= h($productsMarketingImages->id) ?></td>
                <td><?= h($productsMarketingImages->product_id) ?></td>
                <td><?= h($productsMarketingImages->image) ?></td>
                <td><?= h($productsMarketingImages->image_dir) ?></td>
                <td><?= h($productsMarketingImages->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductsMarketingImages', 'action' => 'view', $productsMarketingImages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductsMarketingImages', 'action' => 'edit', $productsMarketingImages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductsMarketingImages', 'action' => 'delete', $productsMarketingImages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsMarketingImages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products Prices') ?></h4>
        <?php if (!empty($product->products_prices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Net Price') ?></th>
                <th><?= __('Sale Price') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->products_prices as $productsPrices): ?>
            <tr>
                <td><?= h($productsPrices->id) ?></td>
                <td><?= h($productsPrices->product_id) ?></td>
                <td><?= h($productsPrices->net_price) ?></td>
                <td><?= h($productsPrices->sale_price) ?></td>
                <td><?= h($productsPrices->created) ?></td>
                <td><?= h($productsPrices->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductsPrices', 'action' => 'view', $productsPrices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductsPrices', 'action' => 'edit', $productsPrices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductsPrices', 'action' => 'delete', $productsPrices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsPrices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products Promos') ?></h4>
        <?php if (!empty($product->products_promos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Promo 1 Image') ?></th>
                <th><?= __('Promo 1 Type') ?></th>
                <th><?= __('Promo 1 Start Date') ?></th>
                <th><?= __('Promo 1 End Date') ?></th>
                <th><?= __('Promo 1 Discount A Min Quantity') ?></th>
                <th><?= __('Promo 1 Discount A ProductID') ?></th>
                <th><?= __('Promo 1 Discount A Product Quantity') ?></th>
                <th><?= __('Promo 1 Discount A Product Discount') ?></th>
                <th><?= __('Promo 1 Discount B Min Quantity') ?></th>
                <th><?= __('Promo 1 Discount B ProductID') ?></th>
                <th><?= __('Promo 1 Discount B Product Discount') ?></th>
                <th><?= __('Promo 1 Discount C Min Quantity') ?></th>
                <th><?= __('Promo 1 Discount C ProductID') ?></th>
                <th><?= __('Promo 1 Discount C Product Discount') ?></th>
                <th><?= __('Promo 1 Discount D Min Quantity') ?></th>
                <th><?= __('Promo 1 Discount D ProductID') ?></th>
                <th><?= __('Promo 1 Discount D Product Discount') ?></th>
                <th><?= __('Promo 1 Discount E Min Quantity') ?></th>
                <th><?= __('Promo 1 Discount E ProductID') ?></th>
                <th><?= __('Promo 1 Discount E Product Discount') ?></th>
                <th><?= __('Promo 1 Foc Min Quantity') ?></th>
                <th><?= __('Promo 1 Foc ProductID') ?></th>
                <th><?= __('Promo 1 Foc Product Quantity') ?></th>
                <th><?= __('Promo 2 Image') ?></th>
                <th><?= __('Promo 2 Type') ?></th>
                <th><?= __('Promo 2 Start Date') ?></th>
                <th><?= __('Promo 2 End Date') ?></th>
                <th><?= __('Promo 2 Discount A Min Quantity') ?></th>
                <th><?= __('Promo 2 Discount A ProductID') ?></th>
                <th><?= __('Promo 2 Discount A Product Quantity') ?></th>
                <th><?= __('Promo 2 Discount A Product Discount') ?></th>
                <th><?= __('Promo 2 Discount B Min Quantity') ?></th>
                <th><?= __('Promo 2 Discount B ProductID') ?></th>
                <th><?= __('Promo 2 Discount B Product Discount') ?></th>
                <th><?= __('Promo 2 Discount C Min Quantity') ?></th>
                <th><?= __('Promo 2 Discount C ProductID') ?></th>
                <th><?= __('Promo 2 Discount C Product Discount') ?></th>
                <th><?= __('Promo 2 Discount D Min Quantity') ?></th>
                <th><?= __('Promo 2 Discount D ProductID') ?></th>
                <th><?= __('Promo 2 Discount D Product Discount') ?></th>
                <th><?= __('Promo 2 Discount E Min Quantity') ?></th>
                <th><?= __('Promo 2 Discount E ProductID') ?></th>
                <th><?= __('Promo 2 Discount E Product Discount') ?></th>
                <th><?= __('Promo 2 Foc Min Quantity') ?></th>
                <th><?= __('Promo 2 Foc ProductID') ?></th>
                <th><?= __('Promo 2 Foc Product Quantity') ?></th>
                <th><?= __('Promo 3 Image') ?></th>
                <th><?= __('Promo 3 Type') ?></th>
                <th><?= __('Promo 3 Start Date') ?></th>
                <th><?= __('Promo 3 End Date') ?></th>
                <th><?= __('Promo 3 Discount A Min Quantity') ?></th>
                <th><?= __('Promo 3 Discount A ProductID') ?></th>
                <th><?= __('Promo 3 Discount A Product Quantity') ?></th>
                <th><?= __('Promo 3 Discount A Product Discount') ?></th>
                <th><?= __('Promo 3 Discount B Min Quantity') ?></th>
                <th><?= __('Promo 3 Discount B ProductID') ?></th>
                <th><?= __('Promo 3 Discount B Product Discount') ?></th>
                <th><?= __('Promo 3 Discount C Min Quantity') ?></th>
                <th><?= __('Promo 3 Discount C ProductID') ?></th>
                <th><?= __('Promo 3 Discount C Product Discount') ?></th>
                <th><?= __('Promo 3 Discount D Min Quantity') ?></th>
                <th><?= __('Promo 3 Discount D ProductID') ?></th>
                <th><?= __('Promo 3 Discount D Product Discount') ?></th>
                <th><?= __('Promo 3 Discount E Min Quantity') ?></th>
                <th><?= __('Promo 3 Discount E ProductID') ?></th>
                <th><?= __('Promo 3 Discount E Product Discount') ?></th>
                <th><?= __('Promo 3 Foc Min Quantity') ?></th>
                <th><?= __('Promo 3 Foc ProductID') ?></th>
                <th><?= __('Promo 3 Foc Product Quantity') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->products_promos as $productsPromos): ?>
            <tr>
                <td><?= h($productsPromos->id) ?></td>
                <td><?= h($productsPromos->product_id) ?></td>
                <td><?= h($productsPromos->promo_1_image) ?></td>
                <td><?= h($productsPromos->promo_1_type) ?></td>
                <td><?= h($productsPromos->promo_1_start_date) ?></td>
                <td><?= h($productsPromos->promo_1_end_date) ?></td>
                <td><?= h($productsPromos->promo_1_discount_a_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_1_discount_a_productID) ?></td>
                <td><?= h($productsPromos->promo_1_discount_a_product_quantity) ?></td>
                <td><?= h($productsPromos->promo_1_discount_a_product_discount) ?></td>
                <td><?= h($productsPromos->promo_1_discount_b_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_1_discount_b_productID) ?></td>
                <td><?= h($productsPromos->promo_1_discount_b_product_discount) ?></td>
                <td><?= h($productsPromos->promo_1_discount_c_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_1_discount_c_productID) ?></td>
                <td><?= h($productsPromos->promo_1_discount_c_product_discount) ?></td>
                <td><?= h($productsPromos->promo_1_discount_d_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_1_discount_d_productID) ?></td>
                <td><?= h($productsPromos->promo_1_discount_d_product_discount) ?></td>
                <td><?= h($productsPromos->promo_1_discount_e_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_1_discount_e_productID) ?></td>
                <td><?= h($productsPromos->promo_1_discount_e_product_discount) ?></td>
                <td><?= h($productsPromos->promo_1_foc_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_1_foc_productID) ?></td>
                <td><?= h($productsPromos->promo_1_foc_product_quantity) ?></td>
                <td><?= h($productsPromos->promo_2_image) ?></td>
                <td><?= h($productsPromos->promo_2_type) ?></td>
                <td><?= h($productsPromos->promo_2_start_date) ?></td>
                <td><?= h($productsPromos->promo_2_end_date) ?></td>
                <td><?= h($productsPromos->promo_2_discount_a_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_2_discount_a_productID) ?></td>
                <td><?= h($productsPromos->promo_2_discount_a_product_quantity) ?></td>
                <td><?= h($productsPromos->promo_2_discount_a_product_discount) ?></td>
                <td><?= h($productsPromos->promo_2_discount_b_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_2_discount_b_productID) ?></td>
                <td><?= h($productsPromos->promo_2_discount_b_product_discount) ?></td>
                <td><?= h($productsPromos->promo_2_discount_c_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_2_discount_c_productID) ?></td>
                <td><?= h($productsPromos->promo_2_discount_c_product_discount) ?></td>
                <td><?= h($productsPromos->promo_2_discount_d_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_2_discount_d_productID) ?></td>
                <td><?= h($productsPromos->promo_2_discount_d_product_discount) ?></td>
                <td><?= h($productsPromos->promo_2_discount_e_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_2_discount_e_productID) ?></td>
                <td><?= h($productsPromos->promo_2_discount_e_product_discount) ?></td>
                <td><?= h($productsPromos->promo_2_foc_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_2_foc_productID) ?></td>
                <td><?= h($productsPromos->promo_2_foc_product_quantity) ?></td>
                <td><?= h($productsPromos->promo_3_image) ?></td>
                <td><?= h($productsPromos->promo_3_type) ?></td>
                <td><?= h($productsPromos->promo_3_start_date) ?></td>
                <td><?= h($productsPromos->promo_3_end_date) ?></td>
                <td><?= h($productsPromos->promo_3_discount_a_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_3_discount_a_productID) ?></td>
                <td><?= h($productsPromos->promo_3_discount_a_product_quantity) ?></td>
                <td><?= h($productsPromos->promo_3_discount_a_product_discount) ?></td>
                <td><?= h($productsPromos->promo_3_discount_b_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_3_discount_b_productID) ?></td>
                <td><?= h($productsPromos->promo_3_discount_b_product_discount) ?></td>
                <td><?= h($productsPromos->promo_3_discount_c_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_3_discount_c_productID) ?></td>
                <td><?= h($productsPromos->promo_3_discount_c_product_discount) ?></td>
                <td><?= h($productsPromos->promo_3_discount_d_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_3_discount_d_productID) ?></td>
                <td><?= h($productsPromos->promo_3_discount_d_product_discount) ?></td>
                <td><?= h($productsPromos->promo_3_discount_e_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_3_discount_e_productID) ?></td>
                <td><?= h($productsPromos->promo_3_discount_e_product_discount) ?></td>
                <td><?= h($productsPromos->promo_3_foc_min_quantity) ?></td>
                <td><?= h($productsPromos->promo_3_foc_productID) ?></td>
                <td><?= h($productsPromos->promo_3_foc_product_quantity) ?></td>
                <td><?= h($productsPromos->created) ?></td>
                <td><?= h($productsPromos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductsPromos', 'action' => 'view', $productsPromos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductsPromos', 'action' => 'edit', $productsPromos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductsPromos', 'action' => 'delete', $productsPromos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsPromos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products Relateds') ?></h4>
        <?php if (!empty($product->products_relateds)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Related Product 1') ?></th>
                <th><?= __('Related Product 2') ?></th>
                <th><?= __('Related Product 3') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->products_relateds as $productsRelateds): ?>
            <tr>
                <td><?= h($productsRelateds->id) ?></td>
                <td><?= h($productsRelateds->product_id) ?></td>
                <td><?= h($productsRelateds->related_product_1) ?></td>
                <td><?= h($productsRelateds->related_product_2) ?></td>
                <td><?= h($productsRelateds->related_product_3) ?></td>
                <td><?= h($productsRelateds->created) ?></td>
                <td><?= h($productsRelateds->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductsRelateds', 'action' => 'view', $productsRelateds->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductsRelateds', 'action' => 'edit', $productsRelateds->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductsRelateds', 'action' => 'delete', $productsRelateds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsRelateds->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Orders') ?></h4>
        <?php if (!empty($product->orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('User Addresses Id') ?></th>
                <th><?= __('User Comments') ?></th>
                <th><?= __('Admin Comments') ?></th>
                <th><?= __('TransactionCode') ?></th>
                <th><?= __('RefrenceCode') ?></th>
                <th><?= __('InvoiceCode') ?></th>
                <th><?= __('OtherCode') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->orders as $orders): ?>
            <tr>
                <td><?= h($orders->id) ?></td>
                <td><?= h($orders->user_id) ?></td>
                <td><?= h($orders->user_addresses_id) ?></td>
                <td><?= h($orders->user_comments) ?></td>
                <td><?= h($orders->admin_comments) ?></td>
                <td><?= h($orders->transactionCode) ?></td>
                <td><?= h($orders->refrenceCode) ?></td>
                <td><?= h($orders->invoiceCode) ?></td>
                <td><?= h($orders->otherCode) ?></td>
                <td><?= h($orders->created) ?></td>
                <td><?= h($orders->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Categories') ?></h4>
        <?php if (!empty($product->categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Parent Id') ?></th>
                <th><?= __('Lft') ?></th>
                <th><?= __('Rght') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->categories as $categories): ?>
            <tr>
                <td><?= h($categories->id) ?></td>
                <td><?= h($categories->parent_id) ?></td>
                <td><?= h($categories->lft) ?></td>
                <td><?= h($categories->rght) ?></td>
                <td><?= h($categories->name) ?></td>
                <td><?= h($categories->created) ?></td>
                <td><?= h($categories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
