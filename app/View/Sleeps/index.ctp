<div class="sleeps index">
	<h2><?php echo __('Sleeps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('f_asleep'); ?></th>
			<th><?php echo $this->Paginator->sort('awake'); ?></th>
			<th><?php echo $this->Paginator->sort('day_sleep'); ?></th>
			<th><?php echo $this->Paginator->sort('total_time'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sleeps as $Sleep): ?>
	<tr>
		<td><?php echo h($Sleep['Sleep']['id']); ?>&nbsp;</td>
		<td><?php echo h($Sleep['Sleep']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($Sleep['Sleep']['date']); ?>&nbsp;</td>
		<td><?php echo h($Sleep['Sleep']['f_asleep']); ?>&nbsp;</td>
		<td><?php echo h($Sleep['Sleep']['awake']); ?>&nbsp;</td>
		<td><?php echo h($Sleep['Sleep']['day_sleep']); ?>&nbsp;</td>
		<td><?php echo h($Sleep['Sleep']['total_time']); ?>&nbsp;</td>
		<td><?php echo h($Sleep['Sleep']['comment']); ?>&nbsp;</td>
		

		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $Sleep['Sleep']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $Sleep['Sleep']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $Sleep['Sleep']['id']), array(), __('Are you sure you want to delete # %s?', $Sleep['Sleep']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Log in'), array('controller' => 'users','action' => 'login')); ?></li>
		<li><?php echo $this->Html->link(__('VK Log in'), array('controller' => 'users','action' => 'vklogin'));?></li>
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
