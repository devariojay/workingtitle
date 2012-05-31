<div class="orgtexts index">
	<h2><?php __('Orgtexts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('profiletext');?></th>
			<th><?php echo $this->Paginator->sort('currentranktext');?></th>
			<th><?php echo $this->Paginator->sort('logintext');?></th>
			<th><?php echo $this->Paginator->sort('loginlink');?></th>
			<th><?php echo $this->Paginator->sort('websitetext');?></th>
			<th><?php echo $this->Paginator->sort('locationtext');?></th>
			<th><?php echo $this->Paginator->sort('taglinetext');?></th>
			<th><?php echo $this->Paginator->sort('foundingtext');?></th>
			<th><?php echo $this->Paginator->sort('membershiptext');?></th>
			<th><?php echo $this->Paginator->sort('sharetext');?></th>
			<th><?php echo $this->Paginator->sort('language_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($orgtexts as $orgtext):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $orgtext['Orgtext']['id']; ?>&nbsp;</td>
		<td><?php echo $orgtext['Orgtext']['profiletext']; ?>&nbsp;</td>
		<td><?php echo $orgtext['Orgtext']['currentranktext']; ?>&nbsp;</td>
		<td><?php echo $orgtext['Orgtext']['logintext']; ?>&nbsp;</td>
		<td><?php echo $orgtext['Orgtext']['loginlink']; ?>&nbsp;</td>
		<td><?php echo $orgtext['Orgtext']['websitetext']; ?>&nbsp;</td>
		<td><?php echo $orgtext['Orgtext']['locationtext']; ?>&nbsp;</td>
		<td><?php echo $orgtext['Orgtext']['taglinetext']; ?>&nbsp;</td>
		<td><?php echo $orgtext['Orgtext']['foundingtext']; ?>&nbsp;</td>
		<td><?php echo $orgtext['Orgtext']['membershiptext']; ?>&nbsp;</td>
		<td><?php echo $orgtext['Orgtext']['sharetext']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($orgtext['Language']['name'], array('controller' => 'languages', 'action' => 'view', $orgtext['Language']['id'])); ?>
		</td>
		<td><?php echo $orgtext['Orgtext']['created']; ?>&nbsp;</td>
		<td><?php echo $orgtext['Orgtext']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $orgtext['Orgtext']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $orgtext['Orgtext']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $orgtext['Orgtext']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $orgtext['Orgtext']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Orgtext', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>