<div class="organizations form">
<?php echo $this->Form->create('Organization');?>
	<fieldset>
 		<legend><?php __('Add Organization'); ?></legend>
	<?php
		echo $this->Form->input('orgname');
		echo $this->Form->input('logo');
		echo $this->Form->input('rank');
		echo $this->Form->input('website');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('foundingdate', array('type' => 'date', 'empty' => false, 'minYear' => '1830', 'maxyear' => date('Y')));
		echo $this->Form->input('membership');
		echo $this->Form->input('facebook');
		echo $this->Form->input('twitter');
		echo $this->Form->input('linkedin');
		echo $this->Form->input('pinterest');
		echo $this->Form->input('googleplus');
		echo $this->Form->input('language_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Organizations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details', true), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail', true), array('controller' => 'details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Votes', true), array('controller' => 'votes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vote', true), array('controller' => 'votes', 'action' => 'add')); ?> </li>
	</ul>
</div>