<?php 
	if(isset($_POST['submit'])) {
		$conn = new mysqli("localhost", "root", "", "gk_int_db") or die($conn->connect_error);
		$email = $_POST['email'];
		$sql = "select * from login where email='$email';";
		$result = $conn->query($sql) or die("query not run");

		if ($result->num_rows==1) {
			$login_data = $result->fetch_assoc();
			if ($login_data['password']==$_POST['password']) {
				echo "<script>	document.getElementById('display').style.display = 'block'; document.getElementById('text_for_warning').style.backgroundColor = 'green'; document.getElementById('text_for_warning_p').innerHTML = 'Login succesfully'; </script>";
				session_start();
				$_SESSION['FNAME'] = $login_data['fname']; 
				if ($_SESSION['FNAME']) {	
					header('Location: http://localhost/resto-search/index.php');
				}
			}
			else{
				echo "<script>	document.getElementById('display').style.display = 'block'; document.getElementById('text_for_warning').style.backgroundColor = 'red'; document.getElementById('text_for_warning_p').innerHTML = 'Password is wrong'; </script>";
			}
		}
		else{
			echo "<script>	document.getElementById('display').style.display = 'block'; document.getElementById('text_for_warning').style.backgroundColor = 'yellow'; document.getElementById('text_for_warning_p').innerHTML = 'This email is not registered please signed up'; </script>";
		}
		$conn->close();
	}
?>	