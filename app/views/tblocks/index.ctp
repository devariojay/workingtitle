<div class="tblocks index">
	<h2><?php __('Tblocks');?></h2>
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
	foreach ($tblocks as $tblock):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tblock['Tblock']['id']; ?>&nbsp;</td>
		<td><?php echo $tblock['Tblock']['titletext']; ?>&nbsp;</td>
		<td><?php echo $tblock['Tblock']['bodytext']; ?>&nbsp;</td>
		<td><?php echo $tblock['Tblock']['linktext']; ?>&nbsp;</td>
		<td><?php echo $tblock['Tblock']['link']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tblock['Language']['name'], array('controller' => 'languages', 'action' => 'view', $tblock['Language']['id'])); ?>
		</td>
		<td><?php echo $tblock['Tblock']['created']; ?>&nbsp;</td>
		<td><?php echo $tblock['Tblock']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $tblock['Tblock']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tblock['Tblock']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tblock['Tblock']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tblock['Tblock']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tblock', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>