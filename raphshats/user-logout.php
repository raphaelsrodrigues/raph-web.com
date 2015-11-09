<?php session_start(); ?>

<?php

	//If the user is logged in, delete the session vars to log them out
	if (isset($_SESSION['myuser']) && isset($_COOKIE['cookiename'])) {
  	
	setcookie('cookiename', '', time() - 42000);
	
	//Unset all of the session variables
    $_SESSION = array();
	
	unset($_SESSION['myuser']);	
	
	//	If it's desired to kill the session, also delete the session cookie.
	//	Note: This will destroy the session, and not just the session data!
	
	//if (ini_get("session.use_cookies")) {
	//	$params = session_get_cookie_params();
	//	setcookie(session_name(), '', time() - 42000,
	//	$params["path"], $params["domain"],
	//	$params["secure"], $params["httponly"]
	//	);}
		
	// Finally, destroy the session.
	session_unset(); 
	session_destroy();
	
  }

		//Delete the user ID and username cookies by setting their expirations to an hour ago (3600)
		setcookie('user_id', '', time() - 3600);
		setcookie('username', '', time() - 3600);

	// Redirect to the home page
	$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
	header('Location: ' . $home_url);
?>
