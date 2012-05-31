<div class="dashboards form">
<?php echo $this->Form->create('Dashboard');?>
	<fieldset>
 		<legend><?php __('Add Dashboard'); ?></legend>
	<?php
		echo $this->Form->input('headertext');
		echo $this->Form->input('leftblocktitle');
		echo $this->Form->input('leftblockdescription');
		echo $this->Form->input('timeremainingtext');
		echo $this->Form->input('daystext');
		echo $this->Form->input('hourstext');
		echo $this->Form->input('minutestext');
		echo $this->Form->input('secondstext');
		echo $this->Form->input('orgrankingstext');
		echo $this->Form->input('expandlisttext');
		echo $this->Form->input('language_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dashboards', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>