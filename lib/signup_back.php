<?php
	if(isset($_POST['Submit'])){
		$conn = new mysqli("localhost", "root", "", "gk_int_db") or die($conn->connect_error);
		$email = $_POST['email'];
		$sql = "select * from login where email='$email';";
		$result = $conn->query($sql) or die("query not run");

		if ($result->num_rows==0) {
			if ($_POST['password']==$_POST['password1']) {
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$sql = "insert into login (fname,lname,email,password) values ('$fname','$lname','$email','$password');";
				$res = $conn->query($sql) or die($conn->error);
				echo "<script>	document.getElementById('display').style.display = 'block'; document.getElementById('text_for_warning').style.backgroundColor = 'green'; document.getElementById('text_for_warning_p').innerHTML = 'you are successfully signed up'; </script>";
				session_start();
				$_SESSION['FNAME'] = $fname; 
				if ($_SESSION['FNAME']) {	
					header('Location: http://localhost/resto-search/index.php');
				}
			}
			else{
				echo "<script>	document.getElementById('display').style.display = 'block'; document.getElementById('text_for_warning').style.backgroundColor = 'red'; document.getElementById('text_for_warning_p').innerHTML = 'both password are not same'; </script>";
			}
		}
		else{
			echo "<script>	document.getElementById('display').style.display = 'block'; document.getElementById('text_for_warning').style.backgroundColor = 'yellow'; document.getElementById('text_for_warning_p').innerHTML = 'this emailis already registered plese sign in'; </script>";
		}	
	}
?>