<?php

require_once("../../includes/database.php");
require_once("../../includes/functions.php");
require_once("../../includes/user.php");
require_once("../../includes/session.php");

if(isset($database)) {echo "true"; } else { echo "false"; }
	
	echo "<br />";
	
	$sql = "SELECT * FROM clients WHERE user_id = 8";
	$result_set = $database->query($sql);
	$found_user = $database->fetch_array($result_set);
	echo $found_user['username'];
	
	echo "<hr />";


if(!$session->is_logged_in()) {redirect_to("login.php");}
?>

	<html>
		<head>
			<title>Photo Gallery</title>
			<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
		</head>
		<body>
			<div id="header">
				<h1>Photo Gallery</h1>
			</div>
			<div id="main">
				<h2>Menu</h2>
			</div>
			
			<?php echo output_message($message); ?>
			
			<?php echo "User ID:" .$_SESSION['user_id']; ?>
			
			<ul>
				
				<li><a href="../list_photos.php">List photos</a></li>
				<li><a href="logfile.php">View Log File</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
			
			
			<div id="footer">
				Copyright <?php echo date("Y", time()); ?>, Raphael Rodrigues  
			</div>
		</body>
	</html>