<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?></li>
        <!--<li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>-->
       <!-- <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>-->
    </ul>
</nav>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= __('Groups') ?> <small></small></h2>
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
                <th class="column-title"><?= $this->Paginator->sort('group code') ?></th>
                <th class="column-title"><?= $this->Paginator->sort('name') ?></th>
                <th class="column-title"><?= $this->Paginator->sort('created') ?></th>
                <th class="column-title"><?= $this->Paginator->sort('modified') ?></th>
                <th colspan="3" class="column-title text-center no-link last"><span class="nobr">Action</span>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groups as $group): ?>
            <tr>
                <td><?= $this->Number->format($group->id) ?></td>
                <td><?= h($group->name) ?></td>
                <td><?= h($group->created) ?></td>
                <td><?= h($group->modified) ?></td>
				<!--<td class="last"><?= $this->Html->link(__('View'), ['action' => 'view', $group->id]) ?></td>-->
						<td class="last">  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $group->id]) ?></td>
						<td class="last"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?></td>
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
