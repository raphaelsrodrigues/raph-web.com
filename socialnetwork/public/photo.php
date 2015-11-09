<?php include ('header.php'); ?>

<?php
if(empty($_GET['id'])) {
	$session->message("No photograph ID was provided.");
	redirect_to('my_photo_album.php');
}

echo $_GET['id'];

$photo = Photograph::find_by_id($_GET['id']);
if(!$photo) {
	$session->message("The photo could not be located.");
	redirect_to('my_photo_album.php');
}
?>

<a href="my_photo_album.php">&laquo; Back</a>

<br />
<br />

<div style="margin-left: 20px;">
	<img src="<?php echo $photo->image_path(); ?>" />
	<p><?php echo $photo->caption; ?></p>
</div>


<?php include ('footer.php'); ?>