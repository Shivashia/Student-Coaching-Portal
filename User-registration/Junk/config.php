<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "NO", "valorant");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
?>