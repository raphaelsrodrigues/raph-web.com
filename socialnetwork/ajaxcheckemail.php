<?php ob_start();
require('includes/database.php');
require('includes/constants.php');
session_start(); ?>
<?php
$usern = $_REQUEST['q'];

$sql="SELECT * FROM clients WHERE username = '$usern';";
$result = $database->query($sql);

if(mysqli_num_rows($result) > 0)
{
//echo 'Username <strong>'; echo $usern; echo '</strong> is already taken';
echo"Username isn't available";	} else {
	echo"Username is available";
}
?>