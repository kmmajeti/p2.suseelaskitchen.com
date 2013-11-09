<div class="content">
	<!-- Print the haeader for the profile page -->
	<h1>Welcome to <?=APP_NAME?>, <?=$profile_user['first_name']?></h1>
	<div class="usersProfile">
		<h2>Here is your Profile:</h2>
		<!-- Display the user profile information -->
		<p class="displayLabel">Account Created: </p>
		<p class="contentvalue"><?= date('F d, Y',$profile_user['created']) ?></p>
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
	<div class="userPosts">
		<!-- Print the header -->
		<h2>You posted <?=count($posts)?> status update(s):</h2>	
		<?php foreach($posts as $post): ?>
			<? if($post['user_id'] === $profile_user['user_id']): ?>
				<div class="post">
					<!-- Print post content -->
					<h4><?=$post['content']?></h4>
					<!-- Print post created timestamp -->
					<p>Posted on : <?= date('F d, Y @ g:ia',$post['created']) ?></p>
					<!-- Show Delete button to delete his/her post -->
					<div class="submitButton">
						<a href="/posts/p_delete/<?=$post['post_id']?>"><input type="button" name="deletepost" value="Delete Post"></a>
					</div>
				</div>
			<? endif; ?>
		<?php endforeach; ?>
	</div>
</div>
