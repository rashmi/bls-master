<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('Edit Admin'), ['action' => 'edit', $admin->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admin'), ['action' => 'delete', $admin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?php  echo "Admins Detail"; ?>  <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div><div class="x_content">
                  <br />
				  
				  
				   <div class="col-sm-3">		
				   <b>Hi, I am <?= $admin->group->name; ?> in BLS</b>
				   <?= $this->Html->image('files/Admins/image/'.$admin->image, ['alt'=>'Avatar','height' => 200, 'width' => 250, 'class'=> 'thumbnail']); ?> 
				   </div>
				 <div class="col-sm-6">				
   <!-- <h3> <?php //h($admin->id) ?> </h3> -->
   <table class="table table-striped responsive-utilities jambo_table bulk_action">
        <tr>
            <th class="column-title"><?= __('Email') ?></th>
            <td><?= h($admin->email) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Dob') ?></th>
            <td><?= h($admin->dob) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Mobile') ?></th>
            <td><?= h($admin->mobile) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Firstname') ?></th>
            <td><?= h($admin->firstname) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Lastname') ?></th>
            <td><?= h($admin->lastname) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Id') ?></th>
            <td><?= $this->Number->format($admin->id) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Created') ?></th>
            <td><?= h($admin->created) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Modified') ?></th>
            <td><?= h($admin->modified) ?></td>
        </tr>
  
					</table>
				</div>
   
</div>
</div>
</div>
</div>



       
                
                 
          
           

