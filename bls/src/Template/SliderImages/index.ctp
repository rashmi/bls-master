<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Slider Image'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sliderImages index large-9 medium-8 columns content">
    <h3><?= __('Slider Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('image') ?></th>
                <th><?= $this->Paginator->sort('image_dir') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sliderImages as $sliderImage): ?>
            <tr>
                <td><?= $this->Number->format($sliderImage->id) ?></td>
                <td><?= h($sliderImage->image) ?></td>
                <td><?= h($sliderImage->image_dir) ?></td>
                <td><?= h($sliderImage->created) ?></td>
                <td><?= h($sliderImage->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sliderImage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sliderImage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sliderImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sliderImage->id)]) ?>
                </td>
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
