<div  class="show_warning" id="display">
	<div id="text_for_warning">
		<p id="text_for_warning_p"></p>
	</div>
</div>
<?php require_once 'lib/signup_back.php' ?>
<?php require_once 'header.php' ?>
<div class="login_div">
	<div class="login">
		<form action="signup.php" method="post">
			<table>
				<tr>
					<td>First name: </td>
					<td> <input type="fname" name="fname" required> </td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td> <input type="lname" name="lname"> </td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="email" required></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input class="pwd1" type="password" name="password" required></td>
				</tr>
				<tr>
					<td>Conform Pwd: </td>
					<td><input class="pwd2" type="password" name="password1" required></td>
				</tr>
			</table>

			<div class="login_to_signup">
				<a href="login.php">Login</a>
				<button type="Submit" name="Submit" value="true">Submit</button>
			</div>
		</form>	
	</div>
</div> 
<?php require_once 'footer.php' ?>	