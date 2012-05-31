<div class="sliders index">
	<h2><?php __('Sliders');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('image');?></th>
			<th><?php echo $this->Paginator->sort('slidetitletext');?></th>
			<th><?php echo $this->Paginator->sort('slidedescriptiontext');?></th>
			<th><?php echo $this->Paginator->sort('slidelinktext');?></th>
			<th><?php echo $this->Paginator->sort('slidelink');?></th>
			<th><?php echo $this->Paginator->sort('order');?></th>
			<th><?php echo $this->Paginator->sort('language_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sliders as $slider):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $slider['Slider']['id']; ?>&nbsp;</td>
		<td><?php echo $slider['Slider']['image']; ?>&nbsp;</td>
		<td><?php echo $slider['Slider']['slidetitletext']; ?>&nbsp;</td>
		<td><?php echo $slider['Slider']['slidedescriptiontext']; ?>&nbsp;</td>
		<td><?php echo $slider['Slider']['slidelinktext']; ?>&nbsp;</td>
		<td><?php echo $slider['Slider']['slidelink']; ?>&nbsp;</td>
		<td><?php echo $slider['Slider']['order']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($slider['Language']['name'], array('controller' => 'languages', 'action' => 'view', $slider['Language']['id'])); ?>
		</td>
		<td><?php echo $slider['Slider']['created']; ?>&nbsp;</td>
		<td><?php echo $slider['Slider']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $slider['Slider']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $slider['Slider']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $slider['Slider']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $slider['Slider']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Slider', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>