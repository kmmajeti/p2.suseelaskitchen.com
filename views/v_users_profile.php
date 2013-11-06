<div class="content">
	<!-- Print the haeader for the profile page -->
	<h1><?=$profile_user['first_name']?>: Profile</h1>
	<div class="usersProfile">
		<!-- Display the user profile information -->
		<p class="displayLabel">Created account on: </p>
		<p class="contentvalue"><?=Time::display($profile_user['created'])?></p>
		<br>
		<p class="displayLabel">First Name: </p>
		<p class="contentvalue"><?=$profile_user['first_name']?></p>
		<br>
		<p class="displayLabel">Last Name: </p>
		<p class="contentvalue"><?=$profile_user['last_name']?></p>
		<br>
		<p class="displayLabel">Email: </p>
		<p class="contentvalue"><?=$profile_user['email']?></p>
		<br>
		<p class="displayLabel">Location: </p>
		<p class="contentvalue"><?=$profile_user['location']?></p>
		<br>
		<p class="displayLabel">Bio: </p>
		<p class="contentvalue"><?=$profile_user['bio']?></p>
		<br></br>
		<div class="submitButton">
			<a href="/users/edit_profile"><input type="button" name="editprofile" value="Edit Profile"></a>
		</div>
	</div>
	<!-- Code to display logged in user posts -->
	<div class="userPosts">
		<!-- Print the header -->
		<h2>Here are your <?=count($posts)?> Posts:</h2>	
		<?php foreach($posts as $post): ?>
			<? if($post['user_id'] == <?=$profile_user['user_id']?>: ?>
				<div class="post">
					<!-- Print Post user's name -->
					<h3>Posted on : <?=Time::display($post['created'])?></h3>
					<!-- Print user's post content -->
					<p><?=$post['content']?></p>
					<!-- Print post created timestamp -->
					<div class="submitButton">
						<a href="/posts/p_delete/<?=$post['post_id']?>"><input type="button" name="deletepost" value="Delete Post"></a>
					</div>
				</div>
			<? endif; ?>
		<?php endforeach; ?>
	</div>

	
	
</div>
