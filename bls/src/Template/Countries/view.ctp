<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= h($country->name) ?> <small></small></h2>
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
					<table class="table table-striped responsive-utilities jambo_table bulk_action">
        <tr>
            <th class="column-title"><?= __('Name') ?></th>
            <td><?= h($country->name) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Code') ?></th>
            <td><?= h($country->code) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Status') ?></th>
            <td><?= h($country->status) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Id') ?></th>
            <td><?= $this->Number->format($country->id) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Created') ?></th>
            <td><?= h($country->created) ?></td>
        </tr>
        <tr>
            <th class="column-title"><?= __('Modified') ?></th>
            <td><?= h($country->modified) ?></td>
        </tr>
		</table>
  </div>
   
</div>
</div>
</div>
</div>
