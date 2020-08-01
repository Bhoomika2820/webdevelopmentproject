<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "site";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn) {
		die("Connection Failed" . mysqli_connect_error());
	}
	$sql = "SELECT image FROM candidate_visible";
	$res = mysqli_query($conn, $sql);
	echo "Done";
?>
