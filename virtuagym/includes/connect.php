<?php
	$servername = "mysqlv113";
	$username = "raphrodrigues";
	$password = "Loadedleo88";
	$dbname = "raph_web";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>