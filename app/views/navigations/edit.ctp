<div class="navigations form">
<?php echo $this->Form->create('Navigation');?>
	<fieldset>
 		<legend><?php __('Edit Navigation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('linkname');
		echo $this->Form->input('link');
		echo $this->Form->input('language_id');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Navigation.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Navigation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Navigations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>