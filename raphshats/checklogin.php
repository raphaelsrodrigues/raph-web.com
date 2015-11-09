<?php include ('header.php'); ?>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class="login_main_inner">


<?php
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

$sql="SELECT * FROM clients WHERE email='$myusername' and password='$mypassword'";

if ($result=$conn->query($sql)){

// Mysqli_num_row is counting table row

$rowcount=$result->num_rows;

if($rowcount==1){
	
$_SESSION['myuser']=$_POST['myusername'];
$_SESSION['mypass']=$_POST['mypassword'];

setcookie('cookiename', $myusername, time() + 86400); // 86400 = 1 day

	Header("Location: index.php");
}

else {
echo "Wrong Username or Password babe";
}
}
?>

</div>
</div>
</div>

<?php include ('footer.php'); ?>