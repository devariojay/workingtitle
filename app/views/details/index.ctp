<div class="details index">
	<h2><?php __('Details');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('tagline');?></th>
			<th><?php echo $this->Paginator->sort('missionstatement');?></th>
			<th><?php echo $this->Paginator->sort('winningblurb');?></th>
			<th><?php echo $this->Paginator->sort('organization_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th><?php echo $this->Paginator->sort('language_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($details as $detail):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $detail['Detail']['id']; ?>&nbsp;</td>
		<td><?php echo $detail['Detail']['tagline']; ?>&nbsp;</td>
		<td><?php echo $detail['Detail']['missionstatement']; ?>&nbsp;</td>
		<td><?php echo $detail['Detail']['winningblurb']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detail['Organization']['id'], array('controller' => 'organizations', 'action' => 'view', $detail['Organization']['id'])); ?>
		</td>
		<td><?php echo $detail['Detail']['created']; ?>&nbsp;</td>
		<td><?php echo $detail['Detail']['updated']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detail['Language']['name'], array('controller' => 'languages', 'action' => 'view', $detail['Language']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $detail['Detail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $detail['Detail']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $detail['Detail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $detail['Detail']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detail', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Organizations', true), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization', true), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>