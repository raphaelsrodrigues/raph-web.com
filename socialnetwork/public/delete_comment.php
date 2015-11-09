<?php

require_once("../includes/initialize.php");

?>

<?php

if(empty($_GET['id'])) {
	$session->message("No comment ID was provided.");
	redirect_to('list_photos.php');
}

$comment = Comment::find_by_id($_GET['id']);
if($comment && $comment->delete()) {
	$session->message("The comment was deleted.");
	redirect_to("comments.php?id={$comment->photograph_id}");
} else {
	$session->message("The comment could not be deleted.");
	redirect_to('../my_photo_album.php');
}

?>

<?php if (isset($database)) { $database->close_connection(); } ?>
