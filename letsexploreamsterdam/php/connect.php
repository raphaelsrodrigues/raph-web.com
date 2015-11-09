<?php
$servername = "209.17.116.155";
$username = "raphrodrigues";
$password = "Loadedleo88";
$dbname = "exploredb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($conn->query($sql) === TRUE) {
		
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>