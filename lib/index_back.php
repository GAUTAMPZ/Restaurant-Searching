<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "gk_int_db";

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
	die($conn->connect_error);
}

$sql = "select name,image,city,search from single_restorent ;";

$result = $conn->query($sql);

$data = array();

if ($result->num_rows>0) {
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
else{
	echo "<br>0 result found";
}

$conn->close();

?>