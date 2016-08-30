<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="admins form large-9 medium-8 columns content">
    <?= $this->Form->create($admin) ?>
    <fieldset>
        <legend><?= __('Add Admin') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('dob');
            echo $this->Form->input('mobile');
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
