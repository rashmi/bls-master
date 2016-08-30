<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Slider Images'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sliderImages form large-9 medium-8 columns content">
    <?= $this->Form->create($sliderImage, ['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Add Slider Image') ?></legend>
        <?php
            echo $this->Form->input('image', ['type'=>'file']);
            echo $this->Form->input('image_dir', ['type'=>'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
