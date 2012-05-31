<div class="logintexts index">
	<h2><?php __('Logintexts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('logintext');?></th>
			<th><?php echo $this->Paginator->sort('blurb');?></th>
			<th><?php echo $this->Paginator->sort('requiredtext');?></th>
			<th><?php echo $this->Paginator->sort('emailtext');?></th>
			<th><?php echo $this->Paginator->sort('passwordtext');?></th>
			<th><?php echo $this->Paginator->sort('loginbtntext');?></th>
			<th><?php echo $this->Paginator->sort('notregisteredtext');?></th>
			<th><?php echo $this->Paginator->sort('forgotpasswordtext');?></th>
			<th><?php echo $this->Paginator->sort('loginlink');?></th>
			<th><?php echo $this->Paginator->sort('notregistedlink');?></th>
			<th><?php echo $this->Paginator->sort('forgotpasswordlink');?></th>
			<th><?php echo $this->Paginator->sort('language_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($logintexts as $logintext):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $logintext['Logintext']['id']; ?>&nbsp;</td>
		<td><?php echo $logintext['Logintext']['logintext']; ?>&nbsp;</td>
		<td><?php echo $logintext['Logintext']['blurb']; ?>&nbsp;</td>
		<td><?php echo $logintext['Logintext']['requiredtext']; ?>&nbsp;</td>
		<td><?php echo $logintext['Logintext']['emailtext']; ?>&nbsp;</td>
		<td><?php echo $logintext['Logintext']['passwordtext']; ?>&nbsp;</td>
		<td><?php echo $logintext['Logintext']['loginbtntext']; ?>&nbsp;</td>
		<td><?php echo $logintext['Logintext']['notregisteredtext']; ?>&nbsp;</td>
		<td><?php echo $logintext['Logintext']['forgotpasswordtext']; ?>&nbsp;</td>
		<td><?php echo $logintext['Logintext']['loginlink']; ?>&nbsp;</td>
		<td><?php echo $logintext['Logintext']['notregistedlink']; ?>&nbsp;</td>
		<td><?php echo $logintext['Logintext']['forgotpasswordlink']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($logintext['Language']['name'], array('controller' => 'languages', 'action' => 'view', $logintext['Language']['id'])); ?>
		</td>
		<td><?php echo $logintext['Logintext']['created']; ?>&nbsp;</td>
		<td><?php echo $logintext['Logintext']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $logintext['Logintext']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $logintext['Logintext']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $logintext['Logintext']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $logintext['Logintext']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Logintext', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>