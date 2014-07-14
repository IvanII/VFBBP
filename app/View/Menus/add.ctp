<div class="menus form">
<?php echo $this->Form->create('Menu'); ?>
	<fieldset>
		<legend><?php echo __('Add Menu'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('descript');
		echo $this->Form->input('tot_prot');
		echo $this->Form->input('tot_fat');
		echo $this->Form->input('tot_carb');
		echo $this->Form->input('calories');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'diets','action' => 'index')); ?></li>
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
