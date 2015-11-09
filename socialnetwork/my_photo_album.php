<?php include ('header.php'); ?>

<?php 	if(!isset($_SESSION['myid'])) { Header("Location: index.php"); } ?>
	


<?php
$getphotos = $_SESSION['myid'];
$photos = Photograph::find_by_id_many($id=$getphotos);
?>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class= "login_main_inner">

<h2>My Photo Album</h2>

<?php echo output_message($message); ?>



<table class="bordered">
	<tr>
		<th>Image</th>
		<th>Caption</th>
		<th>Size</th>
		<th>&nbsp;</th>
	</tr>
	
	<?php foreach($photos as $photo): ?>
	
		<tr>
			<td>
				<a href="photo.php?id=<?php echo $photo->user_id; ?>">
					<img src="<?php echo "public/" .$photo->image_path(); ?>" width="100" />
				</a>
			</td>
			<td><?php echo $photo->caption; ?></td>
			<td><?php echo $photo->size_as_text(); ?></td>
			<td><a href="public/delete_photo.php?id=<?php echo $photo->user_id; ?>">Delete</a></td>
		</tr>
		
		<?php endforeach; ?>
</table>

<a href="photo_upload.php"><p>Upload a New Image</p></a>

</div>
</div>
</div>


<?php include ('footer.php'); ?>