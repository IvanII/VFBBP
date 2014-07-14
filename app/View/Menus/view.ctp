<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token'); ?></dt>
		<dd>
			<?php echo h($user['User']['token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Diets'); ?></h3>
	<?php if (!empty($user['Diet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Menu Id'); ?></th>
		<th><?php echo __('COMMENT'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Diet'] as $diet): ?>
		<tr>
			<td><?php echo $diet['id']; ?></td>
			<td><?php echo $diet['user_id']; ?></td>
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
	<?php if (!empty($user['Profile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Second Name'); ?></th>
		<th><?php echo __('Patr'); ?></th>
		<th><?php echo __('B Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Profile'] as $profile): ?>
		<tr>
			<td><?php echo $profile['id']; ?></td>
			<td><?php echo $profile['user_id']; ?></td>
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
	<?php if (!empty($user['Sleep'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Day'); ?></th>
		<th><?php echo __('F Asleep'); ?></th>
		<th><?php echo __('Awake'); ?></th>
		<th><?php echo __('Day Sleep'); ?></th>
		<th><?php echo __('Total Time'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Sleep'] as $sleep): ?>
		<tr>
			<td><?php echo $sleep['id']; ?></td>
			<td><?php echo $sleep['user_id']; ?></td>
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
	<?php if (!empty($user['Workout'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Day'); ?></th>
		<th><?php echo __('Start Tiime'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Workout'] as $workout): ?>
		<tr>
			<td><?php echo $workout['id']; ?></td>
			<td><?php echo $workout['user_id']; ?></td>
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
