<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Register'); ?></legend>
	<?php
		
		echo $session->flash('auth');		
	
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('username', array('label' => 'E-mail Address (Will be your username)'));
		echo $this->Form->input('password', array('label' => 'Password'));
		echo $this->Form->input('password_confirmation', array('type' => 'password', 'label' => 'Password Confirmation'));
		if ($admin) {
			echo $this->Form->input('role_id');
		}
		echo $this->Form->input('phonenumber');
		echo $this->Form->input('language_id');
		echo $this->Form->input('agentcontact');
		echo $this->Form->input('upcominginfo');
		echo $this->Form->input('passreset');
		echo $this->Form->input('Vote');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles', true), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article', true), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Votes', true), array('controller' => 'votes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vote', true), array('controller' => 'votes', 'action' => 'add')); ?> </li>
	</ul>
</div>