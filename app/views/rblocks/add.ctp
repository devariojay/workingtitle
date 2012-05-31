<div class="rblocks form">
<?php echo $this->Form->create('Rblock');?>
	<fieldset>
 		<legend><?php __('Add Rblock'); ?></legend>
	<?php
		echo $this->Form->input('titletext');
		echo $this->Form->input('bodytext');
		echo $this->Form->input('linktext');
		echo $this->Form->input('link');
		echo $this->Form->input('language_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rblocks', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>