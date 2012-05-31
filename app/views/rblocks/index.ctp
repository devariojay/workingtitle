<div class="rblocks index">
	<h2><?php __('Rblocks');?></h2>
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
	foreach ($rblocks as $rblock):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $rblock['Rblock']['id']; ?>&nbsp;</td>
		<td><?php echo $rblock['Rblock']['titletext']; ?>&nbsp;</td>
		<td><?php echo $rblock['Rblock']['bodytext']; ?>&nbsp;</td>
		<td><?php echo $rblock['Rblock']['linktext']; ?>&nbsp;</td>
		<td><?php echo $rblock['Rblock']['link']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rblock['Language']['name'], array('controller' => 'languages', 'action' => 'view', $rblock['Language']['id'])); ?>
		</td>
		<td><?php echo $rblock['Rblock']['created']; ?>&nbsp;</td>
		<td><?php echo $rblock['Rblock']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $rblock['Rblock']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $rblock['Rblock']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $rblock['Rblock']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rblock['Rblock']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rblock', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>