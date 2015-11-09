<?php
require_once("../includes/initialize.php");
?>

<?php 	if(!isset($_SESSION['myid'])) { Header("Location: index.php"); } ?>

<?php
echo "User ID: " .$_SESSION['myid'];
$photos = Photograph::find_all();
?>

<h2>Photographs</h2>

<?php echo output_message($message); ?>

<table class="bordered">
	<tr>
		<th>Image</th>
		<th>Filename</th>
		<th>Caption</th>
		<th>Size</th>
		<th>Type</th>
		<th>Comments</th>
		<th>&nbsp;</th>
	</tr>
	
	<?php foreach($photos as $photo): ?>
		
		<tr>
			<td><img src="<?php echo $photo->image_path(); ?>" width="100" /></td>
			<td><?php echo $photo->filename; ?></td>
			<td><?php echo $photo->caption; ?></td>
			<td><?php echo $photo->size_as_text(); ?></td>
			<td><?php echo $photo->type; ?></td>
			<td>
				<a href="comments.php?id=<?php echo $photo->user_id; ?>">
				<?php echo count($photo->comments()); ?>
				</a>
			</td>
			<td><a href="delete_photo.php?id=<?php echo $photo->user_id; ?>">Delete</a></td>
		</tr>
		
		<?php endforeach; ?>
</table>

<a href="../photo_upload.php"><p>Upload a New Image</p></a>

<br/>
