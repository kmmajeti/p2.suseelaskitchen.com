<div class="content">
	<!-- Form to display edit profile page elements -->
	<form method='POST' id="editProfile" action='/users/p_edit_profile'>
		<!-- Print the header of the edit profile page -->
		<h1><?=$user->first_name?>, Edit your Profile</h1>
		<div class="formElements">
			<label for="first_name">First Name:</label>
			<input id="first_name" type='text' name='first_name' value="<?=$user->first_name?>">
			<br>
			<label for="last_name">Last Name:</label>
			<input id="last_name" type='text' name='last_name' value="<?=$user->last_name?>">
			<br>
			<label for="email">Email:</label>
			<input id="email" type='email' name='email' disabled="disabled" value="<?=$user->email?>">
			<br>
			<label for="password">Password:</label>
			<input id="password" type='password' name='password' disabled="disabled" value="<?=$user->password?>">
			<br>
			<label for="location">Location:</label>
			<input id="location" type='text' name='location' value="<?=$user->location?>">
			<br>
			<label for="bio">Bio:</label>
			<textarea id="bio" name="bio" rows="10" cols="50"><?=$user->bio?></textarea> 
			<div class="submitButton">
				<input type='submit' value='Update Profile'>
			</div>
			<div class="submitButton">
				<a href="/users/profile"><input type="button" name="cancel" value="Cancel"></a>
			</div>
		</div>
	</form>
</div>

<!-- javascript code to validate the form input fields -->
<script type="text/javascript">
	$(function(){
		$("#editProfile").validate({
			errorClass: "invalid",
			rules: {
				first_name: "required",
				last_name: "required",
				password: "required"
			},
			messages: {
				first_name: " Please specify your first name",
				last_name: " Please specify your last name",
				password: " Please specify your password to login"
			}
		});
	});
</script>

