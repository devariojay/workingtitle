<div class="languages index">
	<h2><?php __('Languages');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('createdby');?></th>
			<th><?php echo $this->Paginator->sort('updatedby');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($languages as $language):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $language['Language']['id']; ?>&nbsp;</td>
		<td><?php echo $language['Language']['name']; ?>&nbsp;</td>
		<td><?php echo $language['Language']['createdby']; ?>&nbsp;</td>
		<td><?php echo $language['Language']['updatedby']; ?>&nbsp;</td>
		<td><?php echo $language['Language']['created']; ?>&nbsp;</td>
		<td><?php echo $language['Language']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $language['Language']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $language['Language']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $language['Language']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $language['Language']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Language', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Articles', true), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article', true), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dashboards', true), array('controller' => 'dashboards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dashboard', true), array('controller' => 'dashboards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details', true), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail', true), array('controller' => 'details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Footerblocks', true), array('controller' => 'footerblocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Footerblock', true), array('controller' => 'footerblocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Footerlinks', true), array('controller' => 'footerlinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Footerlink', true), array('controller' => 'footerlinks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lblocks', true), array('controller' => 'lblocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lblock', true), array('controller' => 'lblocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logintexts', true), array('controller' => 'logintexts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Logintext', true), array('controller' => 'logintexts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Navigations', true), array('controller' => 'navigations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Navigation', true), array('controller' => 'navigations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations', true), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization', true), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orgtexts', true), array('controller' => 'orgtexts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orgtext', true), array('controller' => 'orgtexts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rblocks', true), array('controller' => 'rblocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rblock', true), array('controller' => 'rblocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registertexts', true), array('controller' => 'registertexts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registertext', true), array('controller' => 'registertexts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Signupblocks', true), array('controller' => 'signupblocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Signupblock', true), array('controller' => 'signupblocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sliders', true), array('controller' => 'sliders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slider', true), array('controller' => 'sliders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tblocks', true), array('controller' => 'tblocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tblock', true), array('controller' => 'tblocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Votes', true), array('controller' => 'votes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vote', true), array('controller' => 'votes', 'action' => 'add')); ?> </li>
	</ul>
</div>