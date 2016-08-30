
    <?= $this->Form->create($product, ['type'=>'file']) ?>
    <fieldset>
        <?php  
            echo $this->Form->input('content',['type'=>'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
