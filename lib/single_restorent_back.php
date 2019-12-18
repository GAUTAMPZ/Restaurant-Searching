<?php

	$url= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$url = urldecode($url);
	$url_array=explode('/',$url);
	$size = sizeof($url_array);
	$search = $url_array['5'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "gk_int_db";

	$conn = new mysqli($servername, $username, $password, $db_name);

	if ($conn->connect_error) {
		die($conn->connect_error);
	}
	
	$sql = "select * from single_restorent where search='$search';";
	$result = $conn->query($sql);
	$single_resto = $result->fetch_assoc();
	$id = $single_resto["id"];
	
	$sql = "select id,name,description,price from restorent_menu where resto_id = '$id';";
	$resto_menu = array();
	$result = $conn->query($sql);
	$resto_menu = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
	$sql = "select day,hours from resto_timing where resto_id = '$id';";
	$result = $conn->query($sql);
	$resto_timing = array();
	$resto_timing = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$conn->close();
	
?>