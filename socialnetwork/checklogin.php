<?php include ('header.php'); ?>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class="login_main_inner">


<?php

//FORM has been submited.

$myusername=trim($_POST['myusername']);
$mypassword=trim($_POST['mypassword']);

//Check database to see if username/password exist and match;
	
	$found_user = User::authenticate($myusername, $mypassword);
	
	if($found_user) {
	$session->login($found_user);
		
		$_SESSION['myid']=$found_user->user_id;
		$_SESSION['myuser']=$found_user->username;
		
		Header("Location: my_profile.php");
		
	} else {
		//username/password combo was not found in the database
		$message = "Username/password combination incorrect.";
	}


			// $sql="SELECT * FROM clients WHERE username='$myusername' and password='$mypassword'";
			// 
			// if ($result=$database->query($sql)){
			// 
			// // Mysqli_num_row is counting table row
			// 
			// $rowcount=$result->num_rows;
			// 
			// if($rowcount==1)
			// {
			// 	
				// while ($row = $result->fetch_assoc()){
			// 	
				// $_SESSION['myid']= $row['user_id'];
				// $_SESSION['myuser']=$row['username']; }
			// 	
			// 
			// 
			// //while ($row = $result->fetch_assoc()){
			// //$_SESSION['mylat']= $row['latitude'];
			// //$_SESSION['mylong']= $row['longitude'];
			// //$_SESSION['myid']= $row['user_id'];
			// //}
			// 
				// Header("Location: socialnetwork.php");
			// }
			// 
			// else {
			// echo "Wrong Username or Password";
			// }
			// }
?>

<?php echo "<p>{$message}</p>"; ?>

</div>
</div>
</div>


<?php include ('footer.php'); ?>
