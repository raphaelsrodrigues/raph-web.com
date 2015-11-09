<!DOCTYPE html>

<html>

<head>
	
	<?php
	ob_start();
	require('../includes/connect.php');
	require('../includes/constants.php');
	session_start();
	?>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">

<?php
if (isset($_SESSION['manager'])) {
	header('location:../index.php');
	exit();
}
?>

<?php
if(isset($_POST["username"]) && isset($_POST["password"])) {
	
	$manager=$_POST["username"];
	$password=$_POST["password"];
	
	$sql="SELECT * FROM admin WHERE username='$manager' and password='$password'";

if ($result=$conn->query($sql)){

$rowcount=$result->num_rows;

if($rowcount==1){
	
$_SESSION['manager']=$_POST['username'];
$_SESSION['password']=$_POST['password'];

	Header("Location: index.php");
	
} else {
	echo 'That information is incorrect, try again.';
}
} else {
	echo "Something wrong with coneection";
}
} else {
	echo "Didn't store anything on POST";
}

?>

</head>

<body class="body">

<div class="row_user_auth">
	
	<form action="admin_login.php" method="post" class="form1" enctype="multipart/form-data">
	<label>Please Log In To Manage the Store</label>
	<table>
	<input type="text" placeholder="username" name="username" class="input"/>
	<input type="password" placeholder="password" name="password" class="input" />
	<input type="submit" class="button" name="button" value="login" >
	</table>
	</form>

</div>

</body>

<?php include ('../footer.php'); ?>