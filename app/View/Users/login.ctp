<div class="users form 2">
<?php echo $this->Form->create('User'); ?>

</div>
<script type='text/javascript'>

         $('.carousel').carousel();    
</script>
	<a class="reglink btn btn-primary rgst" href="/users/add" style="color:#ffffff">Sign Up</a>
	<a href="#openModal" class="btn btn-success atrz" style="color:#ffffff">Log In</a>
	<div id="openModal" class="modalDialog">
		<div class="autorization">
			 <a href="#close" title="Close" class="close">X</a>
			<h2>Autorization</h2>
			<div class="login"><?php
		echo $this->Form->input('login');
		echo $this->Form->input('password');
	        ?></div>
	   <?php echo $this->Form->end(__('Enter')); ?>
		</div>
	</div>
	
</div>

