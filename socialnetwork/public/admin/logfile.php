<?php require_once("../../includes/initialize.php"); ?>

<?php
if (!$session->is_logged_in()) { redirect_to("listing.php"); }
?>
	
<?php

	$logfile = '../../logs/log.txt';
	
	if($_GET['clear'] == 'true') {
		file_put_contents($logfile, '');
		
		//Add the first log entry
		log_action('Logs Cleared', "by User ID {$session->user_id}");
		
		//redirect to this same page so that the URL won't
		//have "clear=true" anymore
		
		redirect_to('logfile.php');
		
	}
	
	?>
	
	<h2>Log File</h2>
	
	<p><a href="logfile.php?clear=true">Clear log file</a></p>
		
		<?php
		
		echo "User ID: " .$user->user_id; 
		echo "<br><br>";
		echo "User ID: " .$_SESSION['user_id'];
		
		?>

<?php
	
	if(file_exists($logfile) && is_readable($logfile) && 
		$handle = fopen($logfile, 'r')) { //read
	
	echo "<ul class=\"log-entries\">";
	while(!feof($handle)) {
		$entry = fgets($handle);
		if(trim($entry) != "") {
			echo "<li>{$entry}</li>";
		}
	}
	echo "</ul>";
	fclose($handle);
	} else {
		echo "Could not read from {$logfile}.";
	}
	
	?>