<div class="content">
	<!-- Form for signup page -->
	<form method='POST' id="signUpForm" action='/users/p_signup' autocomplete="off">
			<!-- Print the haeader of the page -->
			<h1>Create a new <?=APP_NAME?> account</h1>
			<!-- Show the form elements to signup -->
			<div class="formElements">
				<label for="first_name">First Name:</label>
				<input id="first_name" type='text' name='first_name'>
				<br></br>
				<label for="last_name">Last Name:</label>
				<input id="last_name" type='text' name='last_name'>
				<br></br>
				<label for="email">Email:</label>
				<input id="email" type='email' name='email'>
				<br></br>
				<label for="password">Password:</label>
				<input id="password" type='password' name='password'>
				<br></br>
				<div class="submitButton">
					<input type='submit' value='Sign Up'>
				</div>
			</div>
	</form>

	<!-- Code to display error message  -->
	<?php if(isset($error)): ?>
		<h3 class="invalid">Account with the given email is already exists in the system. Please <a href="/users/login">Login </a>to the system!</h3>
	<?php endif; ?>

</div>

<!-- Java script code for validation of input fields -->
<script type="text/javascript">
	$(function(){
		$("#signUpForm").validate({
			errorClass: "invalid",
			rules: {
				first_name: "required",
				last_name: "required",
				password: "required",
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				first_name: " Please specify your first name",
				last_name: " Please specify your last name",
				password: " Please specify your password to login",
				email: {
					required: " Please specify your email",
					email: " email must be in the format of name@domain.com"
				}
			}
		});
	});
</script>
