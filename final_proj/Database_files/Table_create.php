<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "committee_advertisement";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed:" . mysqli_connect_error());
	}
	$sql = "CREATE TABLE committee_head_login (username VARCHAR(80) NOT NULL , password VARCHAR(80) NOT NULL , email VARCHAR(80) NOT NULL , committee VARCHAR(10) NOT NULL , PRIMARY KEY (username)) ENGINE = InnoDB";
	$sql = "CREATE TABLE advertise_committee (committee VARCHAR(10) NOT NULL, start_time DATETIME NOT NULL, end_time DATETIME NOT NULL, event_category VARCHAR(100) NOT NULL, event_name VARCHAR(100) NOT NULL, caption VARCHAR(100) NOT NULL, event_desc VARCHAR(200) NOT NULL, host VARCHAR(50) NOT NULL, contact_name VARCHAR(50) NOT NULL, contact_num INT NOT NULL, reg_link VARCHAR(500) NOT NULL, c_image LONGBLOB NOT NULL)";
	if (mysqli_query($conn, $sql)) {
		echo "Table created";
	}
	else {
		echo "Error occured: " . mysqli_error($conn);
	}
	mysqli_close($conn);
?>