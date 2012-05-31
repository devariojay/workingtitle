<div class="registertexts index">
	<h2><?php __('Registertexts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('registertext');?></th>
			<th><?php echo $this->Paginator->sort('firstnametext');?></th>
			<th><?php echo $this->Paginator->sort('lastnametext');?></th>
			<th><?php echo $this->Paginator->sort('addresstext');?></th>
			<th><?php echo $this->Paginator->sort('citytext');?></th>
			<th><?php echo $this->Paginator->sort('statetext');?></th>
			<th><?php echo $this->Paginator->sort('emailaddresstext');?></th>
			<th><?php echo $this->Paginator->sort('createpasswordtext');?></th>
			<th><?php echo $this->Paginator->sort('reenterpasswordtext');?></th>
			<th><?php echo $this->Paginator->sort('phonenumbertext');?></th>
			<th><?php echo $this->Paginator->sort('agreetostext');?></th>
			<th><?php echo $this->Paginator->sort('contactmetext');?></th>
			<th><?php echo $this->Paginator->sort('keeplooptext');?></th>
			<th><?php echo $this->Paginator->sort('votenowbtntext');?></th>
			<th><?php echo $this->Paginator->sort('votenowlink');?></th>
			<th><?php echo $this->Paginator->sort('cancelbtntext');?></th>
			<th><?php echo $this->Paginator->sort('blurb');?></th>
			<th><?php echo $this->Paginator->sort('language_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($registertexts as $registertext):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $registertext['Registertext']['id']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['registertext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['firstnametext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['lastnametext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['addresstext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['citytext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['statetext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['emailaddresstext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['createpasswordtext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['reenterpasswordtext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['phonenumbertext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['agreetostext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['contactmetext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['keeplooptext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['votenowbtntext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['votenowlink']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['cancelbtntext']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['blurb']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($registertext['Language']['name'], array('controller' => 'languages', 'action' => 'view', $registertext['Language']['id'])); ?>
		</td>
		<td><?php echo $registertext['Registertext']['created']; ?>&nbsp;</td>
		<td><?php echo $registertext['Registertext']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $registertext['Registertext']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $registertext['Registertext']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $registertext['Registertext']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $registertext['Registertext']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Registertext', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>