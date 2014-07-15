<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('login');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Diets'), array('controller' => 'diets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diet'), array('controller' => 'diets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sleeps'), array('controller' => 'sleeps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sleep'), array('controller' => 'sleeps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Workouts'), array('controller' => 'workouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Workout'), array('controller' => 'workouts', 'action' => 'add')); ?> </li>
	</ul>
</div>
