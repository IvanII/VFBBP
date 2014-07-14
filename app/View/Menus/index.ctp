<div class="menus index">
	<h2><?php echo __('Menus'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('descript'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_prot'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_fat'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_carb'); ?></th>
			<th><?php echo $this->Paginator->sort('calories'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menus as $Menu): ?>
	<tr>
		<td><?php echo h($Menu['Menu']['id']); ?>&nbsp;</td>
		<td><?php echo h($Menu['Menu']['date']); ?>&nbsp;</td>
		<td><?php echo h($Menu['Menu']['descript']); ?>&nbsp;</td>
		<td><?php echo h($Menu['Menu']['tot_prot']); ?>&nbsp;</td>
		<td><?php echo h($Menu['Menu']['tot_fat']); ?>&nbsp;</td>
		<td><?php echo h($Menu['Menu']['tot_carb']); ?>&nbsp;</td>
		<td><?php echo h($Menu['Menu']['calories']); ?>&nbsp;</td>
		

		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $Menu['Menu']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $Menu['Menu']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $Menu['Menu']['id']), array(), __('Are you sure you want to delete # %s?', $Menu['Menu']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Sign in'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Log in'), array('action' => 'login')); ?></li>
		<li><!-- <a href="http://oauth.vk.com/authorize?client_id=4438108&redirect_uri=fit_day.com/Menus/&scope=3&response_type=code" title="VK Log in">VK Log in</a> -->
			<?php echo $this->Html->link(__('VK Log in'), array('controller' => 'Menus','action' => 'vklogin'));?></li>
		<li><?php echo $this->Html->link(__('List Diets'), array('controller' => 'diets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diet'), array('controller' => 'diets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sleeps'), array('controller' => 'sleeps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sleep'), array('controller' => 'sleeps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Workouts'), array('controller' => 'workouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Workout'), array('controller' => 'workouts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu'), array('controller' => 'menus', 'action' => 'index')); ?> </li>

	</ul>
</div>
