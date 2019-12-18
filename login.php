<div  class="show_warning" id="display">
	<div id="text_for_warning">
		<p id="text_for_warning_p"></p>
	</div>
</div>
<?php require_once 'lib/login_back.php' ?>
<?php require_once 'header.php' ?>
<div class="login_div">
	<div class="login">
		<form action="login.php" method="post">
			<table>
				<tr>
					<td>Email: </td>
					<td><input class="email" type="email" name="email" required></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password" required></td>
				</tr>
			</table>
			<div class="login_to_signup">
				<a href="signup.php">Signup</a>
				<button class="login_button" type="submit" name="submit" value="true">Submit</button>
			</div>
		</form>	
	</div>
</div>
<?php require_once 'footer.php' ?>	 