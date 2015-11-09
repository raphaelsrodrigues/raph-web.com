<?php include ('header.php'); ?>

<?php 	if(!isset($_SESSION['myuser'])) { Header("Location: index.php"); } ?>

<?php

$upload_errors = array(
UPLOAD_ERR_OK				=> "No errors.",
UPLOAD_ERR_INI_SIZE			=> "Larger than upload_max_filesize.",
UPLOAD_ERR_FORM_SIZE		=> "Larger than form MAX_FILE_SIZE.",
UPLOAD_ERR_PARTIAL			=> "Partial upload.",
UPLOAD_ERR_NO_FILE			=> "No file.",
UPLOAD_ERR_NO_TMP_DIR		=> "No temporary directory.",
UPLOAD_ERR_CANT_WRITE		=> "Can't write to disk.",
UPLOAD_ERR_EXTENSION		=> "File upload stopped by extension."
);

$error = $_FILES['myprofilepix']['error'];
$message = $upload_errors['$error'];

?>


<?php

$myusername=$_SESSION['myuser'];

//SUPER GLOBAL. $_FILES contain any uploaded files submited with the post request.
//name: original file name
//type: mime type ("image/gif")
//size: size in bytes
//tmp_name: temp file name on server
//error 

if(isset($_POST['submit'])) {
	$tmp_name = $_FILES['myprofilepix']['tmp_name'];
	
	$target_file = basename($_FILES['myprofilepix']['tmp_name']);
	
	$uploadfilename = $_FILES['myprofilepix']['name'];
	$saveddate = date('mdy-Hms');
	
	$newfilename = 'uploads/'.$saveddate.'_'.$uploadfilename;
	$uploadurl = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['REQUEST_URI']).'/'.$newfilename;
	
	if (move_uploaded_file($tmp_name, $newfilename)) {
		
		$sql ="UPDATE clients SET image1 ='$newfilename' WHERE username = '$myusername'";
		
		if ($database->query($sql) === TRUE) {
			
	//this can go wrong because it was conn->insert_id
	// $last_id = $database->insert_id;
	
	$msg = "File uploaded successfully.";
	$_SESSION['profilepix']=$newfilename;
	define("profpic", "$newfilename");
		
		} else {
    // echo "Error: " . $sql . "<br>" . $conn->error
	$msg = "Sorry, something went wrong with the database query. Contact raph@raph-web.com" .$upload_errors['$error'];
	$formerrors = true;
		}
		
	} else {
	
    // echo "Error: " . $sql . "<br>" . $conn->error;
	$msg = "Sorry, something went wrong with the move_uploaded_file() function. Contact raph@raph-web.com" .$upload_errors['$error'];
	$formerrors = true;
	
		}
}

?>

<body>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class="login_main_heading"><img src="images/picture.jpg" /></div>
<div class= "login_main_inner">

	<?php if (!isset($_SESSION['profilepix'])) { ?>
	
	<?php if (isset($msg)) {
			
		echo '<div id="formmessage"> <p>', $msg, '</p></div>';
	
	} else {
			
		echo '<div id="formmessage"> <p>Your Profile Picture</p> </div>';
	
	} ?>

<!-- Sending file as form data -->

<?php if(!empty($message)) {echo "<p>{$message}</p>";} ?>

	<?php echo "<pre>";
	print_r($_FILES['myprofilepix']);
	echo "</pre>";
	echo "<hr />"; ?>

<form id="myform" name="theform" class="group" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">	
	
		<label for="myprofilepix">Upload your Profile Picture</label>
		
		<br />

		<input type="hidden" name="MAX_FILE_SIZE" value="1048000" />
		
		<input type="file" name="myprofilepix" id="myprofilepix" accept="image/*" /><br>
		
		<input type="submit" name="submit" value="Upload">
</form>

<?php } else { ?>
	
	<?php

	$sql="SELECT image1 FROM clients WHERE username='$myusername'";

$result = $database->query($sql);

while ($row = $result->fetch_assoc()){ ?>
	
<label for="myprofilepix">Your Profile Picture</label><br>
<img width="200px" length="200px" src="<?php echo $row['image1']; ?>">

<span><br>Do you like your picture? <br></span>
<a href="my_profile.php">Yes, continue.</a><br>
<a href="editimage.php?set=<?php echo $_SESSION['myid']; ?>">No, change it.</a>

<?php }
?>
	
	
<?php }?>

</div>
</div>
</div>


<?php include ('footer.php'); ?>