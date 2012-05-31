<div class="dashboards index">
	<h2><?php __('Dashboards');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('headertext');?></th>
			<th><?php echo $this->Paginator->sort('leftblocktitle');?></th>
			<th><?php echo $this->Paginator->sort('leftblockdescription');?></th>
			<th><?php echo $this->Paginator->sort('timeremainingtext');?></th>
			<th><?php echo $this->Paginator->sort('daystext');?></th>
			<th><?php echo $this->Paginator->sort('hourstext');?></th>
			<th><?php echo $this->Paginator->sort('minutestext');?></th>
			<th><?php echo $this->Paginator->sort('secondstext');?></th>
			<th><?php echo $this->Paginator->sort('orgrankingstext');?></th>
			<th><?php echo $this->Paginator->sort('expandlisttext');?></th>
			<th><?php echo $this->Paginator->sort('language_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($dashboards as $dashboard):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $dashboard['Dashboard']['id']; ?>&nbsp;</td>
		<td><?php echo $dashboard['Dashboard']['headertext']; ?>&nbsp;</td>
		<td><?php echo $dashboard['Dashboard']['leftblocktitle']; ?>&nbsp;</td>
		<td><?php echo $dashboard['Dashboard']['leftblockdescription']; ?>&nbsp;</td>
		<td><?php echo $dashboard['Dashboard']['timeremainingtext']; ?>&nbsp;</td>
		<td><?php echo $dashboard['Dashboard']['daystext']; ?>&nbsp;</td>
		<td><?php echo $dashboard['Dashboard']['hourstext']; ?>&nbsp;</td>
		<td><?php echo $dashboard['Dashboard']['minutestext']; ?>&nbsp;</td>
		<td><?php echo $dashboard['Dashboard']['secondstext']; ?>&nbsp;</td>
		<td><?php echo $dashboard['Dashboard']['orgrankingstext']; ?>&nbsp;</td>
		<td><?php echo $dashboard['Dashboard']['expandlisttext']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dashboard['Language']['name'], array('controller' => 'languages', 'action' => 'view', $dashboard['Language']['id'])); ?>
		</td>
		<td><?php echo $dashboard['Dashboard']['created']; ?>&nbsp;</td>
		<td><?php echo $dashboard['Dashboard']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $dashboard['Dashboard']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $dashboard['Dashboard']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $dashboard['Dashboard']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dashboard['Dashboard']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dashboard', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>