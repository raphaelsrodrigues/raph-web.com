<?php
//if (!isset($_SESSION["manager"])) {
//header("location:admin_login.php");
//exit();
//}
?>

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


<body class="body">
	
	<h1>STORE ADMIN AREA</h1>
	<h2>Hello store manager, what would you like to do today?</h2>
	
	<a href="#"><p>Manage Inventory</p></a>
	<a href="#"><p>Manage Newsletter</p></a>

</body>

<?php include ('../footer.php'); ?>