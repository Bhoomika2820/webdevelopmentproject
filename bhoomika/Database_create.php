<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "CREATE DATABASE commitee_advertisement";
	if (mysqli_query($conn, $sql)) {
		echo "Database created";
	}
	else {
		echo "Error occured: " . mysqli_error($conn);
	}
	mysqli_close($conn);
?>