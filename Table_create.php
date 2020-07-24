<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "site";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed:" . mysqli_connect_error());
	}
	// $sql = "CREATE TABLE candidate_visible (start_time TIME NOT NULL, end_time TIME  NOT NULL, title VARCHAR(50) NOT NULL, reg_link VARCHAR(200) NOT NULL, event_desc VARCHAR(200) NOT NULL, image VARCHAR(200) NOT NULL, opt_link VARCHAR(200))";
	$sql = "CREATE TABLE registration (username VARCHAR(30) NOT NULL, email VARCHAR(100) NOT NULL, password VARCHAR(50) NOT NULL)";
	if (mysqli_query($conn, $sql)) {
		echo "Table created";
	}
	else {
		echo "Error occured: " . mysqli_error($conn);
	}
	mysqli_close($conn);
?>