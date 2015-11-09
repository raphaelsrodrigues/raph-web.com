<?php
require_once("../includes/initialize.php");
?>

<?php 	if(!isset($_SESSION['myid'])) { Header("Location: index.php"); } ?>

<?php
if(empty($_GET['id'])) {
	$session->message("No photograph ID was provided.");
	redirect_to('my_photo_album.php');
}

$photo = Photograph::find_by_id($_GET['id']);
if(!$photo) {
	$session->message("The photo could not be located.");
	redirect_to('my_photo_album.php');
}

$comments = $photo->comments();

?>

<a href="javascript:history.back()">&laquo; Back</a>

<h2>Comments on <?php echo $photo->filename; ?></h2>

<div id="comments">
<?php foreach($comments as $comment): ?>
	<div class="comment" style="margin-bottom: 2em;">
		<div class="author">
			<?php echo htmlentities($comment->author); ?> wrote:
		</div>
		<div class="body">
			<?php echo strip_tags($comment->body, '<strong><e><p>'); ?>
		</div>
		<div class="meta-info" style="font-size: 0.8em;">
			<?php echo datetime_to_text($comment->created); ?>
		</div>
		<div class="actions" style="font-size: 0.8em;">
			<a href="delete_comment.php?id=<?php echo $comment->id; ?>"> Delete Comment <?php echo $comment->id; ?></a>
		</div>
	</div>
	<?php endforeach; ?>
	<?php if(empty($comments)) {echo "No Comments."; } ?>
	
</div>
 