<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
       <!-- <li class="heading"><?= __('Actions') ?></li>-->
        <li><?= $this->Html->link(__('Edit Configration'), ['action' => 'edit']) ?> </li>
       <!-- <li><?= $this->Form->postLink(__('Delete Configration'), ['action' => 'delete', $configration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $configration->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Configrations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Configration'), ['action' => 'add']) ?> </li>-->
    </ul>
</nav>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= h($configration->title) ?>  <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div><div class="x_content">
                  <br />
	<div class="col-sm-6">
	<h3>Basic Settings</h3>		
	<table class="table table-striped responsive-utilities jambo_table bulk_action">
    <tr>
            <th class="column-title"><?= __('Store Name') ?></th>
            <td><?= h($configration->store_name) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Logo') ?></th>
            <td>
			<?= $this->Html->image('files/Configrations/logo/'.$configration->logo, ['alt'=>'Logo']) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Title') ?></th>
            <td><?= h($configration->title) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Facebook Link') ?></th>
            <td><?= h($configration->facebook_link) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Twitter Link') ?></th>
            <td><?= h($configration->twitter_link) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Home Link') ?></th>
            <td><?= h($configration->home_link) ?></td>
        </tr>
					</table>
				</div>
				
				
				
				
				
		<div class="col-sm-6">
		<h3>Store Settings</h3>
					<table class="table table-striped responsive-utilities jambo_table bulk_action">
        <tr>
            <th class="column-title"><?= __('Currency') ?></th>
            <td><?= h($configration->currency) ?></td>
        </tr>
		<tr>
            <th class="column-title"><?= __('GST') ?></th>
            <td><?= h($configration->gst.'%') ?></td>
        </tr>
		<tr>
            <th class="column-title"><?= __('Delivery Charge') ?></th>
            <td><?= h($configration->delivery_charge) ?></td>
        </tr>
		<tr>
            <th class="column-title"><?= __('Minimum Net Total Order amount for free delivery') ?></th>
            <td><?= h($configration->min_amt_free_delivery) ?></td>
        </tr>
		<tr>
            <th class="column-title"><?= __('Email Address of the Admin to receive the Feedback') ?></th>
            <td><?= h($configration->adm_fdbk_email) ?></td>
        </tr>
		<tr>
            <th class="column-title"><?= __('Minimum Amount to Avail Promo') ?></th>
            <td><?= h($configration->min_amt_for_promotion) ?></td>
        </tr>
		<tr>
            <th class="column-title"><?= __('Invoice Message') ?></th>
            <td><?= h($configration->invoice_msg) ?></td>
        </tr>
		<tr>
            <th class="column-title"><?= __('Promotional Page 1') ?></th>
            <td><?= h($configration->promo_page_1) ?></td>
        </tr>
		<tr>
            <th class="column-title"><?= __('Promotional Page 2') ?></th>
            <td><?= h($configration->promo_page_2) ?></td>
        </tr>
		<tr>
            <th class="column-title"><?= __('Promotional Page 3') ?></th>
            <td><?= h($configration->promo_page_3) ?></td>
        </tr>
    
					</table>
				</div>		
				
				
				
				
				
				
				
				
				
				
   
</div>
</div>
</div>
</div>
