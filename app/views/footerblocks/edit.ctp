<div class="footerblocks form">
<?php echo $this->Form->create('Footerblock');?>
	<fieldset>
 		<legend><?php __('Edit Footerblock'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titletext');
		echo $this->Form->input('descriptiontext');
		echo $this->Form->input('linktext');
		echo $this->Form->input('link');
		echo $this->Form->input('image');
		echo $this->Form->input('termsblurb');
		echo $this->Form->input('language_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Footerblock.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Footerblock.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Footerblocks', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>