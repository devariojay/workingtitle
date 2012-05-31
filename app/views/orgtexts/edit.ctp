<div class="orgtexts form">
<?php echo $this->Form->create('Orgtext');?>
	<fieldset>
 		<legend><?php __('Edit Orgtext'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('profiletext');
		echo $this->Form->input('currentranktext');
		echo $this->Form->input('logintext');
		echo $this->Form->input('loginlink');
		echo $this->Form->input('websitetext');
		echo $this->Form->input('locationtext');
		echo $this->Form->input('taglinetext');
		echo $this->Form->input('foundingtext');
		echo $this->Form->input('membershiptext');
		echo $this->Form->input('sharetext');
		echo $this->Form->input('language_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Orgtext.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Orgtext.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orgtexts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>