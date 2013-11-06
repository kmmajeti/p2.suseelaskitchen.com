<!-- Print post has been added message -->
<?php if($addAnotherPost): ?>
	<h3 class="success">Your post has been added successfully! Would you like to add another post?</h3>
<?php endif; ?>

<div class="content">
	<!-- Form to add post -->
	<form method='POST' id="addPost" action='/posts/p_add'>
		<!-- Print header of the page -->
		<h1>Write a new Post</h1>
		<!-- Print the users first and last name -->
		<h3><?=$user->first_name?> <?=$user->last_name?>:</h3>
		<label for='content'>Enter the content of your new Post:</label><br>
		<!-- Textarea to enter the content of the post -->
		<textarea name='content' id='content' rows="5" cols="50"></textarea>
		<div class="submitButton">
			<input type='submit' value='Submit Post'>
		</div>
	</form>
	<!-- Print the error message incase if add post failed or content is empty while posting-->
	<?php if(isset($error)): ?>
		<h3 class="invalid">Add Post failed! Content for new post cannot be blank.</h3>
	<?php endif; ?>

</div>

