<?php
	ob_start();
	require('includes/connect.php');
	require('includes/database.php');
	session_start();
	
	$exercise=$_POST['name'];
	$day_id=$_POST['day'];
	

	$mysql = "SELECT * FROM exercise_instances WHERE day_id='$day_id'";
$result = $conn->query($mysql);

if ($result->num_rows) {
		
	$numex = $result->num_rows;
	$numexplus = ++$numex;
	
}
	
	$sql ="INSERT INTO exercise_instances (exercise_id, day_id, sort)
	VALUES ('$exercise', '$day_id', '$numexplus')";
	
	if ($conn->query($sql) === TRUE) {

		 $last_id = $conn->insert_id;
		 
		 echo "set_".$last_id;
		
	} else { echo "Error: " . $sql . "<br>" . $conn->error; }	

?>