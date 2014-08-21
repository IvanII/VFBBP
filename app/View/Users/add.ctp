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
	    <p><a href=""><img src="fit_day/webroot/img/vk.png"></a></p>
	</div>
	

