<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $order->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Addresses'), ['controller' => 'UserAddresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Address'), ['controller' => 'UserAddresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order Update Statuses'), ['controller' => 'OrderUpdateStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Update Status'), ['controller' => 'OrderUpdateStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders Shippings'), ['controller' => 'OrdersShippings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orders Shipping'), ['controller' => 'OrdersShippings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orders form large-9 medium-8 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Edit Order') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('user_addresses_id', ['options' => $userAddresses]);
            echo $this->Form->input('user_comments');
            echo $this->Form->input('admin_comments');
            echo $this->Form->input('transactionCode');
            echo $this->Form->input('refrenceCode');
            echo $this->Form->input('invoiceCode');
            echo $this->Form->input('otherCode');
            echo $this->Form->input('products._ids', ['options' => $products]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
