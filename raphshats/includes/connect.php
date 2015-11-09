<?php
$servername = "mysqlv114";
$username = "raphrodrigues2";
$password = "Loadedleo88";
$dbname = "raphshats";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>