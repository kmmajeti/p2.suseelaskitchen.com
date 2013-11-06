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
</div>
