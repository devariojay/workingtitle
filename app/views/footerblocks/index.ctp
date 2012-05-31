<div class="footerblocks index">
	<h2><?php __('Footerblocks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('titletext');?></th>
			<th><?php echo $this->Paginator->sort('descriptiontext');?></th>
			<th><?php echo $this->Paginator->sort('linktext');?></th>
			<th><?php echo $this->Paginator->sort('link');?></th>
			<th><?php echo $this->Paginator->sort('image');?></th>
			<th><?php echo $this->Paginator->sort('termsblurb');?></th>
			<th><?php echo $this->Paginator->sort('language_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($footerblocks as $footerblock):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $footerblock['Footerblock']['id']; ?>&nbsp;</td>
		<td><?php echo $footerblock['Footerblock']['titletext']; ?>&nbsp;</td>
		<td><?php echo $footerblock['Footerblock']['descriptiontext']; ?>&nbsp;</td>
		<td><?php echo $footerblock['Footerblock']['linktext']; ?>&nbsp;</td>
		<td><?php echo $footerblock['Footerblock']['link']; ?>&nbsp;</td>
		<td><?php echo $footerblock['Footerblock']['image']; ?>&nbsp;</td>
		<td><?php echo $footerblock['Footerblock']['termsblurb']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($footerblock['Language']['name'], array('controller' => 'languages', 'action' => 'view', $footerblock['Language']['id'])); ?>
		</td>
		<td><?php echo $footerblock['Footerblock']['created']; ?>&nbsp;</td>
		<td><?php echo $footerblock['Footerblock']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $footerblock['Footerblock']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $footerblock['Footerblock']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $footerblock['Footerblock']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $footerblock['Footerblock']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Footerblock', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>