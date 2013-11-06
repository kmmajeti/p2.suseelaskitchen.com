<div class="content">
	<!-- Print the hedding -->
	<h1>Follow and Unfollow other Users</h1>
	<!-- Table to lists the users and to show follow/unfollow -->
	<table class="usersToFollow">
		<!-- Table cell headers -->
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Follow/Unfollow</th>
		</tr>
		<!-- Print each user and its current status of their follow/unfollow -->	
		<?php foreach($users as $user): ?>
		<tr>
			<td class="username">
				<!-- Print user's first name -->
				<?=$user['first_name']?>
			</td>
			<td class="username">
				<!-- Print user's last name -->
				<?=$user['last_name']?>
			</td>
			<!-- If there exists a connection with this user, show a unfollow link -->
			<?php if(isset($connections[$user['user_id']])): ?>
				<td class="follow">
					<a href='/posts/unfollow/<?=$user['user_id']?>'><input type="button" id="unfollow" name="unfollow" value="Unfollow"></a>
				</td>
				<!-- Otherwise, show the follow link -->
				<?php else: ?>
				<td class="follow">
					<a href='/posts/follow/<?=$user['user_id']?>'><input type="button" id="follow" name="follow" value="Follow"></a>
				</td>
			<?php endif; ?>
		</tr>
		<?php endforeach; ?>
	</table>
</div>