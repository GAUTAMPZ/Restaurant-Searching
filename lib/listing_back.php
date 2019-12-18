<?php
	// print_r($_POST['item']);die;
	// $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$center_lat = $_GET["place_lat"];
	$center_lng = $_GET["place_lng"];
	// $place_array = explode(",",$places);
	// $place = $place_array['0'];
	//$place = $_GET["pl_city"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "gk_int_db";

	$conn = new mysqli($servername, $username, $password, $db_name);

	if ($conn->connect_error) {
		die($conn->connect_error);
	}

	// $sql0 = "select name,image,url from single_restorent where city='$place';";

	// $center_lat = '72.8032813';
	// $center_lng = '21.18456';
	$radius = 100;

	$query = sprintf("SELECT *, ( 3959 * acos( cos( radians('%s') ) * cos( radians( longitude ) ) * cos( radians( latitude ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( longitude ) ) ) ) AS distance FROM single_restorent HAVING distance < '%s' ORDER BY distance LIMIT 0 , 20",
		$center_lng,$center_lat,$center_lng,$radius);

	$result = mysqli_query($conn, $query);
	$resto_listing = mysqli_fetch_all($result, MYSQLI_ASSOC);
	 // print_r($resto_listing);die;

?>