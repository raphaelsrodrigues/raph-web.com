<!DOCTYPE html>

<html>

<head>
	
	<?php
	ob_start();
	require('includes/database.php');
	require('includes/constants.php');
	require('includes/user.php');
	require('includes/session.php');
	require('includes/photograph.php');
	require('includes/functions.php');
	require('includes/comment.php');
	require('includes/pagination.php');
	session_start();
	?>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	 <script src="https://maps.googleapis.com/maps/api/js"></script>
	 
	 <!--[if lt IE 9]>	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>	<![endif]-->

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
			
			</head>
			
			<body>
	 
	 <!--<a href="index.php"><img style="padding-top: 20px; padding-left:20px;" src="images/slashsocialnetwork.jpg" /></a> -->
	
	
		<?php 	if(isset($_SESSION['myid']))
	{ ?>
		
		
		<div class="row_user_auth">
			<a href="index.php"><img src="images/smalllogo.png"  style="float:left; padding-right:30px; padding-left: 40px;"/></a>		
			<div class="nav">
				
		<a href="allusers.php">USERS</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<!--<a href="index.php"> FRIENDS</a>&nbsp;&nbsp;-->
		<a href="my_profile.php">PROFILE</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<!--<span style="float:right;"><a href="index.php">SETTINGS</a>&nbsp;&nbsp;-->
			
			<?php 	if($_SESSION['myuser'] == 'raphrodrigues')
	{ ?> <a href="chatadmin.php"> HELP</a> <?php } else { ?> <a href="chat.php" onclick="return openUrl(this.href);">HELP</a> <?php } ?>
		
				<span style="float:right;">
			<a href="<?php echo LOGOUT_URL; ?>">
				<button type="button" class="guest">Log Out</button>
			</a>
		</span>
		
			</div>
		</div>
		
		
	<?php	if(isset($_GET['chatlogout'])){
		
	$userchat = $_SESSION['myuser']; 
	$userfile = $userchat.".html";
	unlink($userfile);
	
	} ?>
	
	<?php } else { ?>
		
	<div class="row_user_auth">
		<a href="index.php"><img src="images/smalllogo.png"  style="float:left; padding-left: 40px;"/></a>
	<div style="text-align:right; padding: 15px 50px 0px 0px;">
	<form action="checklogin.php" method="post" class="login" enctype="multipart/form-data">
	<label style="font-family:Verdana; font-size:16px; color:#8c8c8c;">Log-in: </label>
	<table>
	<input style="width: 200px; height: 30px;" type="text" placeholder="username" name="myusername" class="input"  autofocus required />
	<input style="width: 200px; height: 30px;" type="password" placeholder="password" name="mypassword" class="input" onfocus="if (this.value =='Password')this.value='';" />
	<input type="submit" class="button" name="Login" value="Log in" ><label style="font-family:Verdana; font-size:16px; color:#8c8c8c;"> or </label>
	<a href="start-register.php"><button type="button" class="guest">Sign-up</button></a>
	</table>
	</form>
	</div>
	</div>

		<?php } ?>

