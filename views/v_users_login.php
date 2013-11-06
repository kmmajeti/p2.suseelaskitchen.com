<div class="content">
	<!-- Print the header of the login page-->
	<div class="welcome">
		<h2>Sign in with your <?=APP_NAME?> Account</h2>
	</div>
			
	<div class="login">
		<!-- Form to display login elements -->
		<form method='POST' id="signInForm" action='/users/p_login' autocomplete="off">
			<div class="formElements">
				<label for="email">Email:</label>
				<input id="email" type='email' name='email'>
				<br></br>
				<label for="password">Password:</label>
				<input id="password" type='password' name='password'>
				<br></br>
				<div class="submitButton">
					<input type='submit' name='login' value='Log in'>
				</div>
			</div>
		</form>
	</div>
	<!-- Print the error message incase if login failed-->
	<?php if(isset($error)): ?>
			<h3 class="invalid">Login failed! Please double check your email and password.</h3>
	<?php endif; ?>
	
</div>

<!-- javascript code to validate the form input fields -->
<script type="text/javascript">
	$(function(){
		$("#signInForm").validate({
			errorClass: "invalid",
			rules: {
				password: "required",
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				password: " Please specify your password to login",
				email: {
					required: " Please specify your email",
					email: " Please enter your email address in the format of name@example.com"
				}
			}
		});
	});
</script>

