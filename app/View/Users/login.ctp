<div class="users form 2">
<?php echo $this->Form->create('User'); ?>

</div>

<div class="loginuser">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora at consequatur ducimus accusamus iste sequi aliquid temporibus, quis quaerat voluptatem ab, aperiam reprehenderit dignissimos quo nihil cupiditate suscipit eaque et Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quidem maxime sunt reprehenderit sapiente quis soluta quam? Necessitatibus deleniti reiciendis excepturi libero, sed officiis repudiandae nihil placeat, magnam, incidunt nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quam incidunt quos commodi ex ea dolore, animi ipsam, fugit, assumenda eum suscipit repudiandae deserunt. Fugit, minima!
	<a class="reglink btn btn-primary rgst" href="/users/add" style="color:#ffffff">Sign Up</a>
	<a href="#openModal" class="btn btn-success atrz" style="color:#ffffff">Log In</a></p>
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

