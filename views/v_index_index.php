<div class="content">
	<!-- Welcome message for the application -->
	<div class="welcome">
		<h1>Welcome to <?=APP_NAME?>.</h1>
		<p><?=APP_NAME?> is an online microblogging service that enables users to post short status updates and follow the status updates of friends.</p>
	</div>
	
	<!-- SignIn button to login on the home page -->
	<div class="submitButton signInButton">
		<a href='/users/login'><input type="button" id="signin" name="signin" value="Sign in"></a>
		<br></br>
	</div>
	
	<!-- link to signup page on the home page -->
	<div class="signUpNow">
		<span>Don't have a <?=APP_NAME?> account?</span>
		<a href="/users/signup">Sign up now</a>
	</div>
	
	<!-- +1 features implemented -->
	<div class='other_features'>
		<br></br>
		<p>+1 feature: Display and  Edit basic profile info (location, bio, etc.)</p>
		<p>+1 feature: Delete a post</p>
	</div>
</div>