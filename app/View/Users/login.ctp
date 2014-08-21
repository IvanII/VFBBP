<div class="users form 2">
<?php echo $this->Form->create('User'); ?>

</div>

<div class="adduser">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora at consequatur ducimus accusamus iste sequi aliquid temporibus, quis quaerat voluptatem ab, aperiam reprehenderit dignissimos quo nihil cupiditate suscipit eaque et <a href="#openModal" style="color:#5c5959">Авторизуйтесь</a> или <a href="/users/add" style="color:#5c5959">Зарегистрируйтесь</a>.</p>
	<div id="openModal" class="modalDialog">
		<div class="autorization">
			 <a href="#close" title="Close" class="close">X</a>
			<h2>Авторизация</h2>
			<?php
		echo $this->Form->input('login');
		echo $this->Form->input('password');
	        ?>
	    <?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
	
</div>

