<?php session_start(); ?>

<?php

  // If the user is logged in, delete the session vars to log them out
  if (isset($_SESSION['myuser'])) {
  	
    // Delete the session vars by clearing the $_SESSION array
    $_SESSION = array();

		// Delete the session cookie by setting its expiration to an hour ago (3600)
		if (isset($_COOKIE[session_name()])) {
		  setcookie(session_name(), '', time() - 3600);
		}
        session_unset($_SESSION['myuser']);
		session_unset($_SESSION['profilepix']);
		session_unset($_SESSION['latitude']);
		session_unset($_SESSION['longitude']); 
		
    // Destroy the session
    session_destroy();
	
	$userchat = $_SESSION['myuser'];
	$userfile = $userchat.".html";
	
	if(file_exists($userfile)){
	unlink($userfile);
	}
  }

?>
  
<?php

  // Redirect to the home page
 	$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
	header('Location: ' . $home_url);
?>
