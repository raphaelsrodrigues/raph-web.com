<?php
$servername = "localhost";
$username = "root";
$password = "Loadedleo88";
$dbname = "rodriguita_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>