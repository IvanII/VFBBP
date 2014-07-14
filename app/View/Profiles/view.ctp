<div class="Profiles view">
<h2><?php echo __('Profile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($Profile['Profile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('user_id'); ?></dt>
		<dd>
			<?php echo h($Profile['Profile']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('first_name'); ?></dt>
		<dd>
			<?php echo h($Profile['Profile']['first_name']); ?>
			&nbsp;
		</dd>
			<dt><?php echo __('b_date'); ?></dt>
		<dd>
			<?php echo h($Profile['Profile']['b_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($Profile['Profile']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Profile'), array('action' => 'edit', $Profile['Profile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Profile'), array('action' => 'delete', $Profile['Profile']['id']), array(), __('Are you sure you want to delete # %s?', $Profile['Profile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Diets'); ?></h3>
	<?php if (!empty($Profile['Diet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Profile Id'); ?></th>
		<th><?php echo __('Menu Id'); ?></th>
		<th><?php echo __('COMMENT'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($Profile['Diet'] as $diet): ?>
		<tr>
			<td><?php echo $diet['id']; ?></td>
			<td><?php echo $diet['Profile_id']; ?></td>
			<td><?php echo $diet['menu_id']; ?></td>
			<td><?php echo $diet['COMMENT']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'diets', 'action' => 'view', $diet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'diets', 'action' => 'edit', $diet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'diets', 'action' => 'delete', $diet['id']), array(), __('Are you sure you want to delete # %s?', $diet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Diet'), array('controller' => 'diets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Profiles'); ?></h3>
	<?php if (!empty($Profile['Profile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Profile Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Second Name'); ?></th>
		<th><?php echo __('Patr'); ?></th>
		<th><?php echo __('B Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($Profile['Profile'] as $profile): ?>
		<tr>
			<td><?php echo $profile['id']; ?></td>
			<td><?php echo $profile['Profile_id']; ?></td>
			<td><?php echo $profile['first_name']; ?></td>
			<td><?php echo $profile['second_name']; ?></td>
			<td><?php echo $profile['patr']; ?></td>
			<td><?php echo $profile['b_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'profiles', 'action' => 'view', $profile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'profiles', 'action' => 'edit', $profile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'profiles', 'action' => 'delete', $profile['id']), array(), __('Are you sure you want to delete # %s?', $profile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sleeps'); ?></h3>
	<?php if (!empty($Profile['Sleep'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Profile Id'); ?></th>
		<th><?php echo __('Day'); ?></th>
		<th><?php echo __('F Asleep'); ?></th>
		<th><?php echo __('Awake'); ?></th>
		<th><?php echo __('Day Sleep'); ?></th>
		<th><?php echo __('Total Time'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($Profile['Sleep'] as $sleep): ?>
		<tr>
			<td><?php echo $sleep['id']; ?></td>
			<td><?php echo $sleep['Profile_id']; ?></td>
			<td><?php echo $sleep['day']; ?></td>
			<td><?php echo $sleep['f_asleep']; ?></td>
			<td><?php echo $sleep['awake']; ?></td>
			<td><?php echo $sleep['day_sleep']; ?></td>
			<td><?php echo $sleep['total_time']; ?></td>
			<td><?php echo $sleep['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sleeps', 'action' => 'view', $sleep['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sleeps', 'action' => 'edit', $sleep['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sleeps', 'action' => 'delete', $sleep['id']), array(), __('Are you sure you want to delete # %s?', $sleep['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sleep'), array('controller' => 'sleeps', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Workouts'); ?></h3>
	<?php if (!empty($Profile['Workout'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Profile Id'); ?></th>
		<th><?php echo __('Day'); ?></th>
		<th><?php echo __('Start Tiime'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($Profile['Workout'] as $workout): ?>
		<tr>
			<td><?php echo $workout['id']; ?></td>
			<td><?php echo $workout['Profile_id']; ?></td>
			<td><?php echo $workout['day']; ?></td>
			<td><?php echo $workout['start_tiime']; ?></td>
			<td><?php echo $workout['end_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'workouts', 'action' => 'view', $workout['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'workouts', 'action' => 'edit', $workout['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'workouts', 'action' => 'delete', $workout['id']), array(), __('Are you sure you want to delete # %s?', $workout['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Workout'), array('controller' => 'workouts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
