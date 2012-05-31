<div class="lblocks index">
	<h2><?php __('Lblocks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('titletext');?></th>
			<th><?php echo $this->Paginator->sort('bodytext');?></th>
			<th><?php echo $this->Paginator->sort('linktext');?></th>
			<th><?php echo $this->Paginator->sort('link');?></th>
			<th><?php echo $this->Paginator->sort('language_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($lblocks as $lblock):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $lblock['Lblock']['id']; ?>&nbsp;</td>
		<td><?php echo $lblock['Lblock']['titletext']; ?>&nbsp;</td>
		<td><?php echo $lblock['Lblock']['bodytext']; ?>&nbsp;</td>
		<td><?php echo $lblock['Lblock']['linktext']; ?>&nbsp;</td>
		<td><?php echo $lblock['Lblock']['link']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lblock['Language']['name'], array('controller' => 'languages', 'action' => 'view', $lblock['Language']['id'])); ?>
		</td>
		<td><?php echo $lblock['Lblock']['created']; ?>&nbsp;</td>
		<td><?php echo $lblock['Lblock']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $lblock['Lblock']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $lblock['Lblock']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $lblock['Lblock']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lblock['Lblock']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lblock', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>