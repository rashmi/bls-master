	<?= $this->Html->css('admin/bootstrap-multiselect.css') ?>
	<?= $this->Html->script('admin/bootstrap-multiselect.min.js');?>
	<?php 
				
				echo $this->Form->create();
				echo $this->Form->input('categories',[/* 'default'=>$selected ,*/ 'id'=>'example-getting-started', 'options' => $list, 'multiple'=>true],  ['escape' => false]);
				echo $this->Form->button(__('Submit'));
				echo $this->Form->end(); 
				?>

    <!-- Initialize the plugin: -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example-getting-started').multiselect({
			enableClickableOptGroups: true,
            enableCollapsibleOptGroups: true,
            enableFiltering: true,
            includeSelectAllOption: true
			});
			  
        });
    </script>

