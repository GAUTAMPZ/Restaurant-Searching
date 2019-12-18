<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername, $username, $password, 'gk_int_db');

	// $sql = "insert into single_restorent (name, image, address, city, state, country, latitude, longitude, url, search) values('BLUE CORIANDER', 'uploads/image/blue-coriander.jpg', 'Delhi Gate Ring Road Surat', 'surat', 'gujarat', 'india', '21.20031', '72.8387073','http://localhost/resto-search/single_restorant?/BLUE-CORIANDER','BLUE-CORIANDER');";
	// $sql .= "insert into resto_timing (resto_id,day,hours) values(1, 'monday', 'closed');";
	$sql .= "insert into resto_timing (resto_id,day,hours) values(1, 'tuesday', '7 Am to 10 pm');";
	$sql .= "insert into resto_timing (resto_id,day,hours) values(1, 'wednesday', '8 Am to 10 pm');";
	$sql .= "insert into resto_timing (resto_id,day,hours) values(1, 'thursday', '9 Am to 10 pm');";
	$sql .= "insert into resto_timing (resto_id,day,hours) values(1, 'friday', '9 Am to 11 pm');";
	$sql .= "insert into resto_timing (resto_id,day,hours) values(1, 'saturday', '9 Am to 12 pm');";
	$sql .= "insert into resto_timing (resto_id,day,hours) values(1, 'sunday', '7 Am to 12 pm');";
	$sql .= "insert into restorent_menu (resto_id, name, description,  price) values(1, 'pav bhaji', 'Italian, Mexican, Indian, Asian, Chinese', 30);";
	$sql .= "insert into restorent_menu (resto_id, name, description,  price) values(1, 'Sandvich', 'Italian, Mexican, Indian, Asian, Chinese', 30);";
	$sql .= "insert into restorent_menu (resto_id, name, description,  price) values(1, 'Garlic bread', 'Italian, Mexican, Indian, Asian, Chinese', 20);";

	if ($conn->multi_query($sql)==TRUE) {
		echo "query run successfully";
	}
	else{
		print_r($conn->error);
	}
	$conn->close();
?>
	<!-- $sql .= "insert into single_restorent (name, image, address, city, state, country, latitude, longitude) values('Havmor Restaurant', 'uploads/image/havmor-restaurant-old-padra-road-vadodara-home-delivery-restaurants-hnc7y-250.jpg', '56 Punit Nagar Society Old Padra Road Near Diwalipura Crossing', 'vadodara', 'gujarat', 'india', '22.301842', '73.1636124');";

	$sql .= "insert into single_restorent (name, image, address, city, state, country, latitude, longitude) values('wati Restaurant', 'uploads/image/swati-restaurant-and-panjab-grill-rajnagar-rajkot-restaurants-7mz5ybw960.jpg', 'SPooja Complex 1 Street Floor Mahadev Vadi Main Road Rajnagar Near Mayani Chock' , 'rajkot', 'gujarat', 'india', '22.2326166', '70.7625495');";
	
	$sql .= "insert into single_restorent (name, image, address, city, state, country, latitude, longitude) values('the Esplendido', 'uploads/image/the-esplendido-navrangpura-ahmedabad-restaurants-wqqlg74ibj.jpg','Fab Hotel La 365 Residency Law Garden Cross Road Navrangpura Opposite Samrtheswar Mahadev Temple', 'ahmadabad', 'gujarat', 'india', '23.0365548','72.5457401');";
	
	$sql .= "insert into single_restorent (name, image, address, city, state, country, latitude, longitude) values('Patel Restaurant', 'uploads/image/patel-restaurant-and-dinning-hall-junagadh-restaurants-ylrzc3ulcc.jpg', 'Rajkot Highway Near Junagadh Opposite Sakkarbaug Zoo', 'junagadh', 'gujarat', 'india', '21.541221', '70.4649028');"; -->