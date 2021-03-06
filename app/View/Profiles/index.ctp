<div class="Profiles index">
	<h2><?php echo __('Profile'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('second_name'); ?></th>
			<th><?php echo $this->Paginator->sort('b_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($Profiles as $Profile): ?>
	<tr>
		<td><?php echo h($Profile['Profile']['id']); ?>&nbsp;</td>
		<td><?php echo h($Profile['Profile']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($Profile['Profile']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($Profile['Profile']['second_name']); ?>&nbsp;</td>
		<td><?php echo h($Profile['Profile']['b_date']); ?>&nbsp;</td>
		 <td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $Profile['Profile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $Profile['Profile']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $Profile['Profile']['id']), array(), __('Are you sure you want to delete # %s?', $Profile['Profile']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Sign in'), array('controller' => 'users','action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Log in'), array('action' => 'login')); ?></li>
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
