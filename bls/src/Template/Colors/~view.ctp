<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Color'), ['action' => 'edit', $color->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Color'), ['action' => 'delete', $color->id], ['confirm' => __('Are you sure you want to delete # {0}?', $color->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Colors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Color'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="colors view large-9 medium-8 columns content">
    <h3><?= h($color->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= $this->Html->image('files/Colors/image/'.$color->image, ['alt'=>'color']); ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($color->image) ?></td>
        </tr>
       
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($color->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($color->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($color->modified) ?></td>
        </tr>
    </table>
</div>
