<div class="sliders form">
<?php echo $this->Form->create('Slider');?>
	<fieldset>
 		<legend><?php __('Add Slider'); ?></legend>
	<?php
		echo $this->Form->input('image');
		echo $this->Form->input('slidetitletext');
		echo $this->Form->input('slidedescriptiontext');
		echo $this->Form->input('slidelinktext');
		echo $this->Form->input('slidelink');
		echo $this->Form->input('order');
		echo $this->Form->input('language_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sliders', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>