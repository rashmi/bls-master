<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Configrations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="configrations form large-9 medium-8 columns content">
    <?= $this->Form->create($configration) ?>
    <fieldset>
        <legend><?= __('Add Configration') ?></legend>
        <?php
            echo $this->Form->input('store_name');
            echo $this->Form->input('logo');
            echo $this->Form->input('title');
            echo $this->Form->input('facebook_link');
            echo $this->Form->input('twitter_link');
            echo $this->Form->input('home_link');
            echo $this->Form->input('currency');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
