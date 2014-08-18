<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<div class="page-menu">
		<ul>
			<li>Home</li>
			<li>About</li>
			<li>Contact</li>
		</ul>	
	</div>
	
	

</div>
<div class="adduser">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora at consequatur ducimus accusamus iste sequi aliquid temporibus, quis quaerat voluptatem ab, aperiam reprehenderit dignissimos quo nihil cupiditate suscipit eaque et.<a href="#openModal">Зарегистрируйтесь</a>.</p>
	<div id="openModal" class="modalDialog">
		<div class="registration">
			 <a href="#close" title="Close" class="close">X</a>
			<h2>Регистрация</h2>
			<?php
		echo $this->Form->input('login');
		echo $this->Form->input('password');
	        ?>
	    <?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
	
</div>
