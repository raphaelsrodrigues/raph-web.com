<?php

	ob_start();
	require('includes/connect.php');
	require('includes/database.php');
	session_start();

$day_id = 3;
	
	$sql ="SELECT id
	FROM exercise_instances
	ORDER BY id
	DESC LIMIT 1";
	
	$result = $conn->query($sql);
	
	$rows = mysqli_fetch_row($result);
	
	echo "set_" .$rows[0];
	
?>