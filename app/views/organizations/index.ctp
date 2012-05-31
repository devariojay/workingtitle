<div class="organizations index">
	<h2><?php __('Organizations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('orgname');?></th>
			<th><?php echo $this->Paginator->sort('logo');?></th>
			<th><?php echo $this->Paginator->sort('rank');?></th>
			<th><?php echo $this->Paginator->sort('website');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('state');?></th>
			<th><?php echo $this->Paginator->sort('foundingdate');?></th>
			<th><?php echo $this->Paginator->sort('membership');?></th>
			<th><?php echo $this->Paginator->sort('facebook');?></th>
			<th><?php echo $this->Paginator->sort('twitter');?></th>
			<th><?php echo $this->Paginator->sort('linkedin');?></th>
			<th><?php echo $this->Paginator->sort('pinterest');?></th>
			<th><?php echo $this->Paginator->sort('googleplus');?></th>
			<th><?php echo $this->Paginator->sort('language_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($organizations as $organization):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $organization['Organization']['id']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['orgname']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['logo']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['rank']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['website']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['city']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['state']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['foundingdate']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['membership']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['facebook']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['twitter']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['linkedin']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['pinterest']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['googleplus']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($organization['Language']['name'], array('controller' => 'languages', 'action' => 'view', $organization['Language']['id'])); ?>
		</td>
		<td><?php echo $organization['Organization']['created']; ?>&nbsp;</td>
		<td><?php echo $organization['Organization']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $organization['Organization']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $organization['Organization']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $organization['Organization']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $organization['Organization']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Organization', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details', true), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail', true), array('controller' => 'details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Votes', true), array('controller' => 'votes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vote', true), array('controller' => 'votes', 'action' => 'add')); ?> </li>
	</ul>
</div>