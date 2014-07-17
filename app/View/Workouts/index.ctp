<div class="workouts index">
	<h2><?php echo __('Workouts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('day'); ?></th>
			<th><?php echo $this->Paginator->sort('set_workout_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('end_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($workouts as $Workout): ?>
	<tr>
		<td><?php echo h($Workout['Workout']['id']); ?>&nbsp;</td>
		<td><?php echo h($Workout['Workout']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($Workout['Workout']['day']); ?>&nbsp;</td>
		<td><?php echo h($Workout['Workout']['set_workout_id']); ?>&nbsp;</td>
		<td><?php echo h($Workout['Workout']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($Workout['Workout']['end_time']); ?>&nbsp;</td>
		
		

		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $Workout['Workout']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $Workout['Workout']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $Workout['Workout']['id']), array(), __('Are you sure you want to delete # %s?', $Workout['Workout']['id'])); ?>
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
		<li><!-- <a href="http://oauth.vk.com/authorize?client_id=4438108&redirect_uri=fit_day.com/Workouts/&scope=3&response_type=code" title="VK Log in">VK Log in</a> -->
			<?php echo $this->Html->link(__('VK Log in'), array('controller' => 'Workouts','action' => 'vklogin'));?></li>
		<li><?php echo $this->Html->link(__('List Diets'), array('controller' => 'diets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diet'), array('controller' => 'diets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sleeps'), array('controller' => 'sleeps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sleep'), array('controller' => 'sleeps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Workouts'), array('controller' => 'workouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Workout'), array('controller' => 'workouts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Workout'), array('controller' => 'Workouts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Workout'), array('controller' => 'Workouts', 'action' => 'index')); ?> </li>

	</ul>
</div>
