<?php
	ob_start();
	require('includes/database.php');
	require('includes/constants.php');
	session_start();
	?>

<?php

$userchat = $_SESSION['myuseradmin'];
$userfile = $userchat.".html";
	
    echo $userfile;

?>