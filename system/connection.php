<?php
session_start();
$servername = "localhost";
$database = "chat";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn) {
		die("Failed" . mysqli_connect_error());
	}
?>
