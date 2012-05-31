<div class="signupblocks index">
	<h2><?php __('Signupblocks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('logintext');?></th>
			<th><?php echo $this->Paginator->sort('logouttxt');?></th>
			<th><?php echo $this->Paginator->sort('ortext');?></th>
			<th><?php echo $this->Paginator->sort('regtext');?></th>
			<th><?php echo $this->Paginator->sort('welcometext');?></th>
			<th><?php echo $this->Paginator->sort('language_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($signupblocks as $signupblock):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $signupblock['Signupblock']['id']; ?>&nbsp;</td>
		<td><?php echo $signupblock['Signupblock']['logintext']; ?>&nbsp;</td>
		<td><?php echo $signupblock['Signupblock']['logouttxt']; ?>&nbsp;</td>
		<td><?php echo $signupblock['Signupblock']['ortext']; ?>&nbsp;</td>
		<td><?php echo $signupblock['Signupblock']['regtext']; ?>&nbsp;</td>
		<td><?php echo $signupblock['Signupblock']['welcometext']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($signupblock['Language']['name'], array('controller' => 'languages', 'action' => 'view', $signupblock['Language']['id'])); ?>
		</td>
		<td><?php echo $signupblock['Signupblock']['created']; ?>&nbsp;</td>
		<td><?php echo $signupblock['Signupblock']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $signupblock['Signupblock']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $signupblock['Signupblock']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $signupblock['Signupblock']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $signupblock['Signupblock']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Signupblock', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>