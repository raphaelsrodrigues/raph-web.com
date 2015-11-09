<!DOCTYPE html>

<html>

<head>
	
	<?php
	ob_start();
	require('includes/connect.php');
	require('includes/constants.php');
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
	 
	 <a href="index.php"><img style="width:800px;" src="images/socialnetworklogo.jpg" /></a>
	
	
		<?php 	if(isset($_SESSION['myuser']))
	{ ?>
		
		<span style="float:right; padding-top: 30px"><a href="<?php echo LOGOUT_URL; ?>"> <button type="button" class="guest">Log Out</button></a></span>
		
		<div class="row_user_auth">
		<a href="homie.php">HOME </a>&nbsp;&nbsp;<!--<a href="index.php"> FRIENDS</a>&nbsp;&nbsp;--><a href="socialnetwork.php"> PROFILE</a>
		<!--<span style="float:right;"><a href="index.php">SETTINGS</a>&nbsp;&nbsp;-->
			
			<?php 	if($_SESSION['myuser'] == 'raphrodrigues')
	{ ?> <a href="chatadmin.php"> HELP</a></div> <?php } else { ?> <a href="chat.php" onclick="return openUrl(this.href);">HELP</a></div> <?php } ?>
		
		
		
	<?php	if(isset($_GET['chatlogout'])){
		
	$userchat = $_SESSION['myuser']; 
	$userfile = $userchat.".html";
	unlink($userfile);
	
	} ?>
	
	<?php } else { ?>
		
	<div class="row_user_auth">
	<div align="right">
	<form action="checklogin.php" method="post" class="login" enctype="multipart/form-data">
	<label>Log-in</label>
	<table>
	<input style="height:100px" type="text" placeholder="username" name="myusername" class="input"  autofocus required />
	<input style="height:100px" type="password" placeholder="password" name="mypassword" class="input" onfocus="if (this.value =='Password')this.value='';" />
	<input style="height:100px" type="submit" class="button" name="Login" value="login" > or <a href="start-register.php"> <button type="button" class="guest">Sign-up</button></a>
	</table>
	</form>
	</div>
	</div>

		<?php } ?>

