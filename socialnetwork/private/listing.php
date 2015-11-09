<?php

require_once("../includes/initialize.php");

	
	if(isset($database)) {echo "true"; } else { echo "false"; }
	
	echo "<br />";
	
	$sql = "SELECT * FROM clients WHERE user_id = 8";
	$result_set = $database->query($sql);
	$found_user = $database->fetch_array($result_set);
	echo $found_user['username'];
	
	echo "<hr />";
	
	//---------------------------------------------------
	
	// $User = new User();
	// $found_user = $User->find_by_id(8);
	
	$user = User::find_by_id(8);
	echo $user->username."<br />";
	echo $user->user_id."<br />";
	echo $user->password."<br />";
	
	echo "<hr />";
	
	//---------------------------------------------------
	
	echo "List of Users E-mails: <br />";
	
	$users = User::find_all();
	foreach($users as $user) {
		echo $user->email. "; ";
		
	}
	
	echo "<hr />";
	
	//---------------------------------------------------
	
	$users = User::find_all();
	foreach($users as $user) {
		echo "User ID: " .$user->user_id. "<br />";
		echo "User: " .$user->username. "<br />";
		echo "E-mail: " .$user->email. "<br />";
		echo "Password: " .$user->password. "<br /><br />";
		
		
		// while ($user = $database->fetch_array($user_set)) {
		// echo "User: ". $user['username'] ."<br /><br />";
		// echo "Location: ". $user['location'] ."<br /><br />";
		// echo "Name: ". $user['first_name'] ." " . $user['last_name'] ."<br /><br />";
		//}
	
	}
	
	echo "<hr />";
	
	echo __FILE__ ."<br />";
	echo __LINE__ ."<br />";
	echo dirname(__FILE__) ."<br />";
	echo __DIR__ ."<br />";
	
	echo file_exists(__FILE__) ? 'yes' : 'no';
	echo "<br />";
	echo file_exists(dirname(__FILE__)."/listing.php") ? 'yes' : 'no';
 	echo "<br />";
	echo file_exists(dirname(__FILE__)) ? 'yes' : 'no';
 	echo "<br />";
	
	echo is_file(dirname(__FILE__)."/listing.php") ? 'yes' : 'no';
 	echo "<br />";
	echo is_file(dirname(__FILE__)) ? 'yes' : 'no';
 	echo "<br />";
	
	echo is_dir(dirname(__FILE__)."/listing.php") ? 'yes' : 'no';
 	echo "<br />";
	echo is_dir(dirname(__FILE__)) ? 'yes' : 'no';
 	echo "<br />";
 	
 	echo is_dir(dirname('..')) ? 'yes' : 'no';
 	echo "<br />";
 	
 	echo "<hr />";
	
	?>