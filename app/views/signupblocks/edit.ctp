<div class="signupblocks form">
<?php echo $this->Form->create('Signupblock');?>
	<fieldset>
 		<legend><?php __('Edit Signupblock'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('logintext');
		echo $this->Form->input('logouttxt');
		echo $this->Form->input('ortext');
		echo $this->Form->input('regtext');
		echo $this->Form->input('welcometext');
		echo $this->Form->input('language_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Signupblock.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Signupblock.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Signupblocks', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>