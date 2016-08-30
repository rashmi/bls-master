<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Slider Image'), ['action' => 'edit', $sliderImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Slider Image'), ['action' => 'delete', $sliderImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sliderImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Slider Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Slider Image'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sliderImages view large-9 medium-8 columns content">
    <h3><?= h($sliderImage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($sliderImage->image) ?></td>
        </tr>
        <tr>
            <th><?= __('Image Dir') ?></th>
            <td><?= h($sliderImage->image_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($sliderImage->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($sliderImage->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($sliderImage->modified) ?></td>
        </tr>
    </table>
</div>
