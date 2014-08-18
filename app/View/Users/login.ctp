<div class="users form 2">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Hello world'); ?></legend>
	<?php
		echo $this->Form->input('login');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

