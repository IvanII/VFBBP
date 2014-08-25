<div class="users form">
<?php echo $this->Form->create('User'); ?>

	

</div>


	
	<div class="registration">
			<h2>Регистрация</h2>
			<?php
		echo $this->Form->input('login');
		echo $this->Form->input('password');
	        ?>
	    <?php echo $this->Form->end(__('Submit')); ?>
	    <p>Регистрация с помощью VK<a href="/users/vklogin"><?php echo $this->Html->image('vk.png') ?></a></p>
	</div>
	

