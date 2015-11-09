<?php include ('header.php'); ?>

<?php 	if(isset($_SESSION['myid']))
	{

$userid = $_SESSION['myid'];


if(isset($_POST['submit'])):
	$tmp_name = $_FILES["myprofilepix"]["tmp_name"];
	$uploadfilename = $_FILES["myprofilepix"]["name"];
	$saveddate = date("mdy-Hms");
	$newfilename = "uploads/".$saveddate."_".$uploadfilename;
	
	$uploadurl = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['REQUEST_URI']).'/'.$newfilename;
	
	if (move_uploaded_file($tmp_name, $newfilename)):
		
		$sql ="UPDATE clients SET image1 ='$newfilename' WHERE user_id = '$userid'";
		
		if ($database->query($sql) === TRUE) {
	
	$last_id = $database->insert_id;
			
			Header("Location: my_profile.php");
		
}

// else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
// }
		
	$msg = "File uploaded";
	$_SESSION['profilepix']=$newfilename;
	define("profpic", "$newfilename");
	
	else:
	$msg = "Sorry, not uploaded";
	$formerrors = true;
	
	endif;
	endif;

?>



<body>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class= "login_main_inner">
	
 <h3>Update your profile picture</h3>

<form id="myform" name="theform" class="group" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onSubmit="return validateForm();" enctype="multipart/form-data">

		
		<label for="myprofilepix">Upload a Photo</label> <br>
		<input type="hidden" name="MAX_FILE_SIZE" value="1024000" />
		<input type="file" name="myprofilepix" id="myprofilepix" accept="image/*" /><br>
		<input type="submit" name="submit" value="Upload">

</form>


</div>
</div>
</div>
</body>

<?php } else{ 
		
		Header("Location: index.php");
	
	} ?>

<?php include ('footer.php'); ?>