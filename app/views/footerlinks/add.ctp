<div class="footerlinks form">
<?php echo $this->Form->create('Footerlink');?>
	<fieldset>
 		<legend><?php __('Add Footerlink'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Footerlinks', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>