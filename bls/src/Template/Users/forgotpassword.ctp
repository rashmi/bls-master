
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create(); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('email');
        echo $this->Form->input('password');
    ?>
	 <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
