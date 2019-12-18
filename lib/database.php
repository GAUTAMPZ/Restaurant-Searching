<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername, $username, $password);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";


	$sql = "CREATE DATABASE gk_int_db";
	if ($conn->query($sql) == TRUE) {
	    echo "Database created successfully";
	} 
	else {
	    echo "Error creating database: " . $conn->error;
	}


	$conn = new mysqli($servername, $username, $password, 'gk_int_db');

	$sql = "create table single_restorent(id INT AUTO_INCREMENT, name varchar(20), image text, description varchar(1000), address varchar(100), city varchar(20), state varchar(20), country varchar(20), latitude DECIMAL(10,7), longitude DECIMAL(10,7), url varchar(200), search varchar(200), PRIMARY KEY (id));";

	$sql .= "create table restorent_menu(id INT AUTO_INCREMENT primary key, resto_id INT , name varchar(20), description varchar(1000), price INT(10),foreign key (resto_id) references single_restorent(id));";

	$sql .= "create table resto_timing(id INT AUTO_INCREMENT primary key, resto_id INT, day varchar(10), hours varchar(30), foreign key (resto_id) references single_restorent(id));";

	$sql .= "create table menu_order(id INT AUTO_INCREMENT primary key, prod_id varchar(100), resto_id INT, user_id varchar(10), toal_price INT, bokking_date varchar(20), timing varchar(20), status INT, foreign key (prod_id) references single_restorent(restorent_menu), foreign key (resto_id) references single_restorent(id));";

	$sql .= "create table login(id INT AUTO_INCREMENT primary key, fname varchar(20), lname varchar(20), email varchar(20), password varchar(20));";
	
	if ($conn->multi_query($sql)==TRUE) {
		echo "table is created";
	}
	else{
		echo "table is not created".print_r($conn->error);
	}

	$conn->close();
?>