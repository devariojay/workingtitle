<div class="registertexts form">
<?php echo $this->Form->create('Registertext');?>
	<fieldset>
 		<legend><?php __('Edit Registertext'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('registertext');
		echo $this->Form->input('firstnametext');
		echo $this->Form->input('lastnametext');
		echo $this->Form->input('addresstext');
		echo $this->Form->input('citytext');
		echo $this->Form->input('statetext');
		echo $this->Form->input('emailaddresstext');
		echo $this->Form->input('createpasswordtext');
		echo $this->Form->input('reenterpasswordtext');
		echo $this->Form->input('phonenumbertext');
		echo $this->Form->input('agreetostext');
		echo $this->Form->input('contactmetext');
		echo $this->Form->input('keeplooptext');
		echo $this->Form->input('votenowbtntext');
		echo $this->Form->input('votenowlink');
		echo $this->Form->input('cancelbtntext');
		echo $this->Form->input('blurb');
		echo $this->Form->input('language_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Registertext.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Registertext.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Registertexts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>