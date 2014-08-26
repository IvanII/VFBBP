<div class="users form">
<?php echo $this->Form->create('User'); ?>

	

</div>


	
	<div class="registration">
			<h2>Регистрация</h2>
		<div class="signin">
	 <?php 
	 echo $this->Form->input('login');
	 echo $this->Form->input('password');
	 echo $this->Form->end(__('Sign Up')); 
	 ?> 
	 <p>Регистрация с помощью VK<a href="/users/vklogin"><?php echo $this->Html->image('vk.png') ?></a></p>
	 </div>
	</div>
	

