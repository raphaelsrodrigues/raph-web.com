<?php include ('header.php'); ?>

<?php require_once("includes/initialize.php"); ?>

<?php if(!$session->is_logged_in()) {redirect_to("public/admin/login.php");} ?>

<?php 
	$max_file_size = 1048576;	//expressed in bytes
							// 10240 = 10KB
							// 102400 = 100KB
							// 1048576 = 1MB
							// 10485760 = 10MB
						
	if(isset($_POST['submit'])) {
		$photo = new Photograph();
		$photo->id = $_SESSION['user_id'];
		$photo->caption = $_POST['caption'];
		$photo->attach_file($_FILES['file_upload']);
		if($photo->save()) {
			// Success
			$session->message("Photograph uploaded successfilly.");
			redirect_to("my_photo_album.php");
			
			// redirect_to("public/list_photos.php");
		} else {
			//Failure
			$message = join("<br />", $photo->errors);
		}
	}

?>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class= "login_main_inner">

<h2>Photo Upload</h2>

<?php echo output_message($message); ?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">	

		<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
		
		<p><input type="file" name="file_upload" accept="image/*" /></p>
		
		<p>Caption: <input type="text" name="caption" value="" /></p>
		
		<input type="submit" name="submit" value="Upload" />
</form>

<a href="my_photo_album.php"><p>Go back to My Photo Album</p></a>

</div>
</div>
</div>


<?php include ('footer.php'); ?>