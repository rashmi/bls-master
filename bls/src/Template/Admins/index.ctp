<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= __('List Admins') ?> <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

             

                  <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                       <!-- <th>
                          <input type="checkbox" id="check-all" class="flat">
                        </th>-->
                        <th class="column-title"><?= $this->Paginator->sort('First Name') ?></th>
                        <th class="column-title"><?= $this->Paginator->sort('Last Name') ?></th>
                        <th class="column-title"><?= $this->Paginator->sort('email') ?></th>
						<th class="column-title"><?= $this->Paginator->sort('Image') ?></th>
						<th class="column-title"><?= $this->Paginator->sort('Role') ?></th>
                        <th class="column-title"><?= $this->Paginator->sort('Date of Birth') ?></th>
                        <th class="column-title"><?= $this->Paginator->sort('Mobile') ?></th>
                        <th colspan="3" class="column-title text-center no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="8">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
					 <?php foreach ($admins as $admin):
                            
					 ?>
					 
                      <tr class="even pointer">
                       <!-- <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records" value="<?= $this->Number->format($admin->id) ?>">
                        </td>-->
                        <td class=" "><?= h(ucfirst($admin->firstname)) ?></td>
                        <td class=" "><?= h(ucfirst($admin->lastname)) ?></td>
						   <td class=" "><?= $this->Html->image('files/Admins/image/'.$admin->image, ['alt'=>'Avatar', 'width' => 40, 'height' => 40]); ?></td>
                        <td class=" "><?= h($admin->email) ?></i></td>
						<td class=" "><?= h($admin->group->name) ?></i></td>
                        <td class=" "><?= h($admin->dob) ?></td>
                        <td class=" "><?= h($admin->mobile) ?></td>
						<td class="last"><?= $this->Html->link(__('View'), ['action' => 'view', $admin->id]) ?></td>
						<td class="last">  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $admin->id]) ?></td>
						<td class="last"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $admin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->id)]) ?></td>
                      </tr>
					  <?php endforeach; ?>
                    </tbody>
                  </table>
				  <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
                </div>
              </div>
            </div>
</div>
