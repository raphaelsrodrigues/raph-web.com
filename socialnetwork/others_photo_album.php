<?php include ('header.php'); ?>

<?php 	if(!isset($_SESSION['myid'])) { Header("Location: index.php"); } ?>
	
<?php
$others = $_REQUEST["set"];
$photos = Photograph::find_by_id_many($id=$others);
$otheruser = User::find_by_id($others);
?>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class= "login_main_inner">

<h2><?php echo $otheruser->username; ?> - Photo Album</h2>

<?php echo output_message($message); ?>


	<?php foreach($photos as $photo): ?>

	<a href="photo.php?id=<?php echo $photo->user_id; ?>">
		<img src="<?php echo "public/" .$photo->image_path(); ?>" width="100" /><br />
	</a>
	
		<?php echo $photo->caption; ?><br /><br />
	
	<?php endforeach; ?>

</div>
</div>
</div>


<?php include ('footer.php'); ?>