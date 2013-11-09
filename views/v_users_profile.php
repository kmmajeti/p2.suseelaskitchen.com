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
	
	<div>
		<!-- Code to check the current profile user_id and post User_ID -->
		<?php foreach($posts as $post): ?>
			<p><?=count($posts)?></p>
			<p>Post User ID: <?=$post['user_id']?></p>
			<p>Profile User ID:<?=$profile_user['user_id']?></p>
		<?php endforeach; ?>
	</div>

</div>
