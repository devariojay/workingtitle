<div class="logintexts form">
<?php echo $this->Form->create('Logintext');?>
	<fieldset>
 		<legend><?php __('Edit Logintext'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('logintext');
		echo $this->Form->input('blurb');
		echo $this->Form->input('requiredtext');
		echo $this->Form->input('emailtext');
		echo $this->Form->input('passwordtext');
		echo $this->Form->input('loginbtntext');
		echo $this->Form->input('notregisteredtext');
		echo $this->Form->input('forgotpasswordtext');
		echo $this->Form->input('loginlink');
		echo $this->Form->input('notregistedlink');
		echo $this->Form->input('forgotpasswordlink');
		echo $this->Form->input('language_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Logintext.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Logintext.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Logintexts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>