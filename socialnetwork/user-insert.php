<?php include('header.php'); ?>

<div class="login_main">

<?php

$fname = $_REQUEST['fname'];
$Email = $_REQUEST['Email'];
$pass = $_REQUEST['pass'];

$sql="SELECT * FROM clients WHERE username = '$fname'";
$check= User::find_by_sql($sql);

if(empty($check)){

//returns a MySQLi result object.

$sql ="INSERT INTO clients (email, username, password)
VALUES('$Email', '$fname', '$pass')";

if ($conn->query($sql) === TRUE) {
	
	$last_id = $conn->insert_id;
	echo "New record created successfully.";
		
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;}
} else {
	Header("Location: user-register.php");} 


?>

</div>
<?php include ('footer.php'); ?>