<?php
	ob_start();
	require('includes/database.php');
	require('includes/constants.php');
	session_start();
	
	$idzete=$_SESSION['myid'];
	$city=$_REQUEST["c"];
	$lat=$_REQUEST["d"];
	$long=$_REQUEST["e"];
	$_SESSION['mylat']=$lat;
	$_SESSION['mylong']=$long;
	
	$sql ="UPDATE clients
	SET location = '$city',
	latitude = '$lat',
	longitude = '$long'
	WHERE user_id = '$idzete'";
	
	if ($database->query($sql) === TRUE) {
		echo $city;
	} else { echo "Error: " . $sql . "<br>" . $conn->error; }	
?>