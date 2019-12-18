<?php 
	session_start();
	unset($_SESSION['FNAME']);
	echo "<script>document.getElementById('login-button').innerHTML = 'signup or login'; document.getElementById('login-button').setAttribute('href', 'login.php');</script>";
	header('Location: http://localhost/resto-search/index.php');
?>