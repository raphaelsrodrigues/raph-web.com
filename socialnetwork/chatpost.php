
<?php
	ob_start();
	require('includes/database.php');
	require('includes/constants.php');
	session_start();
	?>

<?php

if(isset($_SESSION['myuser'])){
	
	$userchat = $_SESSION['myuser'];
	$userfile = $userchat.".html";
	
    $text = $_POST['text'];
    $fp = fopen($userfile, 'a');
    fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['myuser']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fp);
	
} else {
		
	echo 'session not set'; }
?>
