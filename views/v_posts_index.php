<div class="content">
	<!-- Print the header of the page -->
	<h1><?=$user->first_name?> - here are the posts from the users you are following:</h1>
	<!-- Print the posts from the users they are following -->
	<?php foreach($posts as $post): ?>
		<div class="post">
			<!-- Print Post user's name -->
			<h3><?=$post['first_name']?> <?=$post['last_name']?> posted:</h3>
			<!-- Print user's post content -->
			<p><?=$post['content']?></p>
			<!-- Print post created timestamp -->
			<p><?=Time::display($post['created'])?></p>
		</div>
	<?php endforeach; ?>
</div>
