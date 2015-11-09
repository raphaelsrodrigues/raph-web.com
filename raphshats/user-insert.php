<?php include('header.php'); ?>

<div class="login_main">



<?php 	if(isset($_POST['fname'])) {

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$Email = $_REQUEST['Email'];
$phone = $_REQUEST['phone'];
$addressline1 = $_REQUEST['addressline1'];
$addressline2 = $_REQUEST['addressline2'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$zipcode = $_REQUEST['zipcode'];
$country = $_REQUEST['country'];
$pass = $_REQUEST['pass'];

//returns a MySQLi result object.

$sql ="INSERT INTO clients (fname, lname, email, phone, address1, address2, city, state, zipcode, country, password)
VALUES('$fname', '$lname', '$Email', '$phone', '$addressline1', '$addressline2', '$city', '$state', '$zipcode', '$country', '$pass')";

if ($conn->query($sql) === TRUE) {
	
	$_SESSION['myuser']=$Email;
	$_SESSION['mypass']=$pass;
	
	setcookie('cookiename', $Email, time() + 86400); // 86400 = 1 day

	$sql="SELECT fname FROM clients WHERE email='$Email' and password='$pass'";

	$result = $conn->query($sql);

	while ($row = $result->fetch_assoc()) { 

	//echo "Dear " .$row['fname']. ", you are logged in and ready to shop.";
		
	echo "New record created sucsessfully";
	
	$last_id = $conn->insert_id;
	
	 }
		
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

} else {
	
	echo 'You have to fill up the form, baby.';
}

?>

</div>
<?php include ('footer.php'); ?>