<div class="languages view">
<h2><?php  __('Language');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $language['Language']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $language['Language']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Createdby'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $language['Language']['createdby']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Updatedby'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $language['Language']['updatedby']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $language['Language']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Updated'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $language['Language']['updated']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Language', true), array('action' => 'edit', $language['Language']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Language', true), array('action' => 'delete', $language['Language']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $language['Language']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Articles');?></h3>
	<?php if (!empty($language['Article'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th><?php __('Image'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Article'] as $article):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $article['id'];?></td>
			<td><?php echo $article['title'];?></td>
			<td><?php echo $article['language_id'];?></td>
			<td><?php echo $article['content'];?></td>
			<td><?php echo $article['user_id'];?></td>
			<td><?php echo $article['created'];?></td>
			<td><?php echo $article['updated'];?></td>
			<td><?php echo $article['image'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'articles', 'action' => 'view', $article['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'articles', 'action' => 'edit', $article['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'articles', 'action' => 'delete', $article['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $article['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Article', true), array('controller' => 'articles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Dashboards');?></h3>
	<?php if (!empty($language['Dashboard'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Headertext'); ?></th>
		<th><?php __('Leftblocktitle'); ?></th>
		<th><?php __('Leftblockdescription'); ?></th>
		<th><?php __('Timeremainingtext'); ?></th>
		<th><?php __('Daystext'); ?></th>
		<th><?php __('Hourstext'); ?></th>
		<th><?php __('Minutestext'); ?></th>
		<th><?php __('Secondstext'); ?></th>
		<th><?php __('Orgrankingstext'); ?></th>
		<th><?php __('Expandlisttext'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Dashboard'] as $dashboard):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $dashboard['id'];?></td>
			<td><?php echo $dashboard['headertext'];?></td>
			<td><?php echo $dashboard['leftblocktitle'];?></td>
			<td><?php echo $dashboard['leftblockdescription'];?></td>
			<td><?php echo $dashboard['timeremainingtext'];?></td>
			<td><?php echo $dashboard['daystext'];?></td>
			<td><?php echo $dashboard['hourstext'];?></td>
			<td><?php echo $dashboard['minutestext'];?></td>
			<td><?php echo $dashboard['secondstext'];?></td>
			<td><?php echo $dashboard['orgrankingstext'];?></td>
			<td><?php echo $dashboard['expandlisttext'];?></td>
			<td><?php echo $dashboard['language_id'];?></td>
			<td><?php echo $dashboard['created'];?></td>
			<td><?php echo $dashboard['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'dashboards', 'action' => 'view', $dashboard['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'dashboards', 'action' => 'edit', $dashboard['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'dashboards', 'action' => 'delete', $dashboard['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dashboard['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dashboard', true), array('controller' => 'dashboards', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Details');?></h3>
	<?php if (!empty($language['Detail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tagline'); ?></th>
		<th><?php __('Missionstatement'); ?></th>
		<th><?php __('Winningblurb'); ?></th>
		<th><?php __('Organization Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Detail'] as $detail):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $detail['id'];?></td>
			<td><?php echo $detail['tagline'];?></td>
			<td><?php echo $detail['missionstatement'];?></td>
			<td><?php echo $detail['winningblurb'];?></td>
			<td><?php echo $detail['organization_id'];?></td>
			<td><?php echo $detail['created'];?></td>
			<td><?php echo $detail['updated'];?></td>
			<td><?php echo $detail['language_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'details', 'action' => 'view', $detail['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'details', 'action' => 'edit', $detail['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'details', 'action' => 'delete', $detail['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $detail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Detail', true), array('controller' => 'details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Footerblocks');?></h3>
	<?php if (!empty($language['Footerblock'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Titletext'); ?></th>
		<th><?php __('Descriptiontext'); ?></th>
		<th><?php __('Linktext'); ?></th>
		<th><?php __('Link'); ?></th>
		<th><?php __('Image'); ?></th>
		<th><?php __('Termsblurb'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Footerblock'] as $footerblock):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $footerblock['id'];?></td>
			<td><?php echo $footerblock['titletext'];?></td>
			<td><?php echo $footerblock['descriptiontext'];?></td>
			<td><?php echo $footerblock['linktext'];?></td>
			<td><?php echo $footerblock['link'];?></td>
			<td><?php echo $footerblock['image'];?></td>
			<td><?php echo $footerblock['termsblurb'];?></td>
			<td><?php echo $footerblock['language_id'];?></td>
			<td><?php echo $footerblock['created'];?></td>
			<td><?php echo $footerblock['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'footerblocks', 'action' => 'view', $footerblock['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'footerblocks', 'action' => 'edit', $footerblock['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'footerblocks', 'action' => 'delete', $footerblock['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $footerblock['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Footerblock', true), array('controller' => 'footerblocks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Footerlinks');?></h3>
	<?php if (!empty($language['Footerlink'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Linkname'); ?></th>
		<th><?php __('Link'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Order'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Footerlink'] as $footerlink):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $footerlink['id'];?></td>
			<td><?php echo $footerlink['linkname'];?></td>
			<td><?php echo $footerlink['link'];?></td>
			<td><?php echo $footerlink['language_id'];?></td>
			<td><?php echo $footerlink['order'];?></td>
			<td><?php echo $footerlink['created'];?></td>
			<td><?php echo $footerlink['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'footerlinks', 'action' => 'view', $footerlink['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'footerlinks', 'action' => 'edit', $footerlink['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'footerlinks', 'action' => 'delete', $footerlink['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $footerlink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Footerlink', true), array('controller' => 'footerlinks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Lblocks');?></h3>
	<?php if (!empty($language['Lblock'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Titletext'); ?></th>
		<th><?php __('Bodytext'); ?></th>
		<th><?php __('Linktext'); ?></th>
		<th><?php __('Link'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Lblock'] as $lblock):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $lblock['id'];?></td>
			<td><?php echo $lblock['titletext'];?></td>
			<td><?php echo $lblock['bodytext'];?></td>
			<td><?php echo $lblock['linktext'];?></td>
			<td><?php echo $lblock['link'];?></td>
			<td><?php echo $lblock['language_id'];?></td>
			<td><?php echo $lblock['created'];?></td>
			<td><?php echo $lblock['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'lblocks', 'action' => 'view', $lblock['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'lblocks', 'action' => 'edit', $lblock['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'lblocks', 'action' => 'delete', $lblock['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lblock['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lblock', true), array('controller' => 'lblocks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Logintexts');?></h3>
	<?php if (!empty($language['Logintext'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Logintext'); ?></th>
		<th><?php __('Blurb'); ?></th>
		<th><?php __('Requiredtext'); ?></th>
		<th><?php __('Emailtext'); ?></th>
		<th><?php __('Passwordtext'); ?></th>
		<th><?php __('Loginbtntext'); ?></th>
		<th><?php __('Notregisteredtext'); ?></th>
		<th><?php __('Forgotpasswordtext'); ?></th>
		<th><?php __('Loginlink'); ?></th>
		<th><?php __('Notregistedlink'); ?></th>
		<th><?php __('Forgotpasswordlink'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Logintext'] as $logintext):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $logintext['id'];?></td>
			<td><?php echo $logintext['logintext'];?></td>
			<td><?php echo $logintext['blurb'];?></td>
			<td><?php echo $logintext['requiredtext'];?></td>
			<td><?php echo $logintext['emailtext'];?></td>
			<td><?php echo $logintext['passwordtext'];?></td>
			<td><?php echo $logintext['loginbtntext'];?></td>
			<td><?php echo $logintext['notregisteredtext'];?></td>
			<td><?php echo $logintext['forgotpasswordtext'];?></td>
			<td><?php echo $logintext['loginlink'];?></td>
			<td><?php echo $logintext['notregistedlink'];?></td>
			<td><?php echo $logintext['forgotpasswordlink'];?></td>
			<td><?php echo $logintext['language_id'];?></td>
			<td><?php echo $logintext['created'];?></td>
			<td><?php echo $logintext['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'logintexts', 'action' => 'view', $logintext['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'logintexts', 'action' => 'edit', $logintext['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'logintexts', 'action' => 'delete', $logintext['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $logintext['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Logintext', true), array('controller' => 'logintexts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Navigations');?></h3>
	<?php if (!empty($language['Navigation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Linkname'); ?></th>
		<th><?php __('Link'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Order'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Navigation'] as $navigation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $navigation['id'];?></td>
			<td><?php echo $navigation['linkname'];?></td>
			<td><?php echo $navigation['link'];?></td>
			<td><?php echo $navigation['language_id'];?></td>
			<td><?php echo $navigation['order'];?></td>
			<td><?php echo $navigation['created'];?></td>
			<td><?php echo $navigation['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'navigations', 'action' => 'view', $navigation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'navigations', 'action' => 'edit', $navigation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'navigations', 'action' => 'delete', $navigation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $navigation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Navigation', true), array('controller' => 'navigations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Organizations');?></h3>
	<?php if (!empty($language['Organization'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Orgname'); ?></th>
		<th><?php __('Logo'); ?></th>
		<th><?php __('Rank'); ?></th>
		<th><?php __('Website'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('State'); ?></th>
		<th><?php __('Foundingdate'); ?></th>
		<th><?php __('Membership'); ?></th>
		<th><?php __('Facebook'); ?></th>
		<th><?php __('Twitter'); ?></th>
		<th><?php __('Linkedin'); ?></th>
		<th><?php __('Pinterest'); ?></th>
		<th><?php __('Googleplus'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Organization'] as $organization):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $organization['id'];?></td>
			<td><?php echo $organization['orgname'];?></td>
			<td><?php echo $organization['logo'];?></td>
			<td><?php echo $organization['rank'];?></td>
			<td><?php echo $organization['website'];?></td>
			<td><?php echo $organization['city'];?></td>
			<td><?php echo $organization['state'];?></td>
			<td><?php echo $organization['foundingdate'];?></td>
			<td><?php echo $organization['membership'];?></td>
			<td><?php echo $organization['facebook'];?></td>
			<td><?php echo $organization['twitter'];?></td>
			<td><?php echo $organization['linkedin'];?></td>
			<td><?php echo $organization['pinterest'];?></td>
			<td><?php echo $organization['googleplus'];?></td>
			<td><?php echo $organization['language_id'];?></td>
			<td><?php echo $organization['created'];?></td>
			<td><?php echo $organization['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'organizations', 'action' => 'view', $organization['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'organizations', 'action' => 'edit', $organization['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'organizations', 'action' => 'delete', $organization['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $organization['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Organization', true), array('controller' => 'organizations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Orgtexts');?></h3>
	<?php if (!empty($language['Orgtext'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Profiletext'); ?></th>
		<th><?php __('Currentranktext'); ?></th>
		<th><?php __('Logintext'); ?></th>
		<th><?php __('Loginlink'); ?></th>
		<th><?php __('Websitetext'); ?></th>
		<th><?php __('Locationtext'); ?></th>
		<th><?php __('Taglinetext'); ?></th>
		<th><?php __('Foundingtext'); ?></th>
		<th><?php __('Membershiptext'); ?></th>
		<th><?php __('Sharetext'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Orgtext'] as $orgtext):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $orgtext['id'];?></td>
			<td><?php echo $orgtext['profiletext'];?></td>
			<td><?php echo $orgtext['currentranktext'];?></td>
			<td><?php echo $orgtext['logintext'];?></td>
			<td><?php echo $orgtext['loginlink'];?></td>
			<td><?php echo $orgtext['websitetext'];?></td>
			<td><?php echo $orgtext['locationtext'];?></td>
			<td><?php echo $orgtext['taglinetext'];?></td>
			<td><?php echo $orgtext['foundingtext'];?></td>
			<td><?php echo $orgtext['membershiptext'];?></td>
			<td><?php echo $orgtext['sharetext'];?></td>
			<td><?php echo $orgtext['language_id'];?></td>
			<td><?php echo $orgtext['created'];?></td>
			<td><?php echo $orgtext['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'orgtexts', 'action' => 'view', $orgtext['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'orgtexts', 'action' => 'edit', $orgtext['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'orgtexts', 'action' => 'delete', $orgtext['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $orgtext['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Orgtext', true), array('controller' => 'orgtexts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Rblocks');?></h3>
	<?php if (!empty($language['Rblock'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Titletext'); ?></th>
		<th><?php __('Bodytext'); ?></th>
		<th><?php __('Linktext'); ?></th>
		<th><?php __('Link'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Rblock'] as $rblock):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $rblock['id'];?></td>
			<td><?php echo $rblock['titletext'];?></td>
			<td><?php echo $rblock['bodytext'];?></td>
			<td><?php echo $rblock['linktext'];?></td>
			<td><?php echo $rblock['link'];?></td>
			<td><?php echo $rblock['language_id'];?></td>
			<td><?php echo $rblock['created'];?></td>
			<td><?php echo $rblock['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'rblocks', 'action' => 'view', $rblock['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'rblocks', 'action' => 'edit', $rblock['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'rblocks', 'action' => 'delete', $rblock['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rblock['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rblock', true), array('controller' => 'rblocks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Registertexts');?></h3>
	<?php if (!empty($language['Registertext'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Registertext'); ?></th>
		<th><?php __('Firstnametext'); ?></th>
		<th><?php __('Lastnametext'); ?></th>
		<th><?php __('Addresstext'); ?></th>
		<th><?php __('Citytext'); ?></th>
		<th><?php __('Statetext'); ?></th>
		<th><?php __('Emailaddresstext'); ?></th>
		<th><?php __('Createpasswordtext'); ?></th>
		<th><?php __('Reenterpasswordtext'); ?></th>
		<th><?php __('Phonenumbertext'); ?></th>
		<th><?php __('Agreetostext'); ?></th>
		<th><?php __('Contactmetext'); ?></th>
		<th><?php __('Keeplooptext'); ?></th>
		<th><?php __('Votenowbtntext'); ?></th>
		<th><?php __('Votenowlink'); ?></th>
		<th><?php __('Cancelbtntext'); ?></th>
		<th><?php __('Blurb'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Registertext'] as $registertext):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $registertext['id'];?></td>
			<td><?php echo $registertext['registertext'];?></td>
			<td><?php echo $registertext['firstnametext'];?></td>
			<td><?php echo $registertext['lastnametext'];?></td>
			<td><?php echo $registertext['addresstext'];?></td>
			<td><?php echo $registertext['citytext'];?></td>
			<td><?php echo $registertext['statetext'];?></td>
			<td><?php echo $registertext['emailaddresstext'];?></td>
			<td><?php echo $registertext['createpasswordtext'];?></td>
			<td><?php echo $registertext['reenterpasswordtext'];?></td>
			<td><?php echo $registertext['phonenumbertext'];?></td>
			<td><?php echo $registertext['agreetostext'];?></td>
			<td><?php echo $registertext['contactmetext'];?></td>
			<td><?php echo $registertext['keeplooptext'];?></td>
			<td><?php echo $registertext['votenowbtntext'];?></td>
			<td><?php echo $registertext['votenowlink'];?></td>
			<td><?php echo $registertext['cancelbtntext'];?></td>
			<td><?php echo $registertext['blurb'];?></td>
			<td><?php echo $registertext['language_id'];?></td>
			<td><?php echo $registertext['created'];?></td>
			<td><?php echo $registertext['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'registertexts', 'action' => 'view', $registertext['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'registertexts', 'action' => 'edit', $registertext['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'registertexts', 'action' => 'delete', $registertext['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $registertext['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Registertext', true), array('controller' => 'registertexts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Signupblocks');?></h3>
	<?php if (!empty($language['Signupblock'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Logintext'); ?></th>
		<th><?php __('Logouttxt'); ?></th>
		<th><?php __('Ortext'); ?></th>
		<th><?php __('Regtext'); ?></th>
		<th><?php __('Welcometext'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Signupblock'] as $signupblock):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $signupblock['id'];?></td>
			<td><?php echo $signupblock['logintext'];?></td>
			<td><?php echo $signupblock['logouttxt'];?></td>
			<td><?php echo $signupblock['ortext'];?></td>
			<td><?php echo $signupblock['regtext'];?></td>
			<td><?php echo $signupblock['welcometext'];?></td>
			<td><?php echo $signupblock['language_id'];?></td>
			<td><?php echo $signupblock['created'];?></td>
			<td><?php echo $signupblock['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'signupblocks', 'action' => 'view', $signupblock['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'signupblocks', 'action' => 'edit', $signupblock['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'signupblocks', 'action' => 'delete', $signupblock['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $signupblock['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Signupblock', true), array('controller' => 'signupblocks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Sliders');?></h3>
	<?php if (!empty($language['Slider'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Image'); ?></th>
		<th><?php __('Slidetitletext'); ?></th>
		<th><?php __('Slidedescriptiontext'); ?></th>
		<th><?php __('Slidelinktext'); ?></th>
		<th><?php __('Slidelink'); ?></th>
		<th><?php __('Order'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Slider'] as $slider):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $slider['id'];?></td>
			<td><?php echo $slider['image'];?></td>
			<td><?php echo $slider['slidetitletext'];?></td>
			<td><?php echo $slider['slidedescriptiontext'];?></td>
			<td><?php echo $slider['slidelinktext'];?></td>
			<td><?php echo $slider['slidelink'];?></td>
			<td><?php echo $slider['order'];?></td>
			<td><?php echo $slider['language_id'];?></td>
			<td><?php echo $slider['created'];?></td>
			<td><?php echo $slider['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'sliders', 'action' => 'view', $slider['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'sliders', 'action' => 'edit', $slider['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'sliders', 'action' => 'delete', $slider['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $slider['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Slider', true), array('controller' => 'sliders', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tblocks');?></h3>
	<?php if (!empty($language['Tblock'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Titletext'); ?></th>
		<th><?php __('Bodytext'); ?></th>
		<th><?php __('Linktext'); ?></th>
		<th><?php __('Link'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Tblock'] as $tblock):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tblock['id'];?></td>
			<td><?php echo $tblock['titletext'];?></td>
			<td><?php echo $tblock['bodytext'];?></td>
			<td><?php echo $tblock['linktext'];?></td>
			<td><?php echo $tblock['link'];?></td>
			<td><?php echo $tblock['language_id'];?></td>
			<td><?php echo $tblock['created'];?></td>
			<td><?php echo $tblock['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tblocks', 'action' => 'view', $tblock['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tblocks', 'action' => 'edit', $tblock['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tblocks', 'action' => 'delete', $tblock['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tblock['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tblock', true), array('controller' => 'tblocks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Users');?></h3>
	<?php if (!empty($language['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Firstname'); ?></th>
		<th><?php __('Lastname'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('State'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Phonenumber'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Agentcontact'); ?></th>
		<th><?php __('Upcominginfo'); ?></th>
		<th><?php __('Passreset'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['firstname'];?></td>
			<td><?php echo $user['lastname'];?></td>
			<td><?php echo $user['address'];?></td>
			<td><?php echo $user['city'];?></td>
			<td><?php echo $user['state'];?></td>
			<td><?php echo $user['email'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['phonenumber'];?></td>
			<td><?php echo $user['language_id'];?></td>
			<td><?php echo $user['agentcontact'];?></td>
			<td><?php echo $user['upcominginfo'];?></td>
			<td><?php echo $user['passreset'];?></td>
			<td><?php echo $user['created'];?></td>
			<td><?php echo $user['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Votes');?></h3>
	<?php if (!empty($language['Vote'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Organization Id'); ?></th>
		<th><?php __('Language Id'); ?></th>
		<th><?php __('Ip'); ?></th>
		<th><?php __('Browser'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Vote'] as $vote):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $vote['id'];?></td>
			<td><?php echo $vote['organization_id'];?></td>
			<td><?php echo $vote['language_id'];?></td>
			<td><?php echo $vote['ip'];?></td>
			<td><?php echo $vote['browser'];?></td>
			<td><?php echo $vote['created'];?></td>
			<td><?php echo $vote['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'votes', 'action' => 'view', $vote['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'votes', 'action' => 'edit', $vote['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'votes', 'action' => 'delete', $vote['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $vote['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vote', true), array('controller' => 'votes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
