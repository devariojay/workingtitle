<div class="languages form">
<?php echo $this->Form->create('Language');?>
	<fieldset>
 		<legend><?php __('Add Language'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('createdby');
		echo $this->Form->input('updatedby');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Languages', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Articles', true), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article', true), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dashboards', true), array('controller' => 'dashboards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dashboard', true), array('controller' => 'dashboards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details', true), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail', true), array('controller' => 'details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Footerblocks', true), array('controller' => 'footerblocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Footerblock', true), array('controller' => 'footerblocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Footerlinks', true), array('controller' => 'footerlinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Footerlink', true), array('controller' => 'footerlinks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lblocks', true), array('controller' => 'lblocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lblock', true), array('controller' => 'lblocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logintexts', true), array('controller' => 'logintexts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Logintext', true), array('controller' => 'logintexts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Navigations', true), array('controller' => 'navigations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Navigation', true), array('controller' => 'navigations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations', true), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization', true), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orgtexts', true), array('controller' => 'orgtexts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orgtext', true), array('controller' => 'orgtexts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rblocks', true), array('controller' => 'rblocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rblock', true), array('controller' => 'rblocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registertexts', true), array('controller' => 'registertexts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registertext', true), array('controller' => 'registertexts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Signupblocks', true), array('controller' => 'signupblocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Signupblock', true), array('controller' => 'signupblocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sliders', true), array('controller' => 'sliders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slider', true), array('controller' => 'sliders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tblocks', true), array('controller' => 'tblocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tblock', true), array('controller' => 'tblocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Votes', true), array('controller' => 'votes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vote', true), array('controller' => 'votes', 'action' => 'add')); ?> </li>
	</ul>
</div>