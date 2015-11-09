<?php include ('header.php'); ?>


<!--Gives message That's embarrassing.. The file comment.php could not be found
 <?php
 require_once("includes/initialize.php");
 ?> -->

<?php

if(empty($_GET['id'])) {
	$session->message("No comment ID was provided.");
	redirect_to('my_profile.php');
}

$comment = Comment::find_by_id($_GET['id']);
if($comment && $comment->delete()) {
	$session->message("The comment was deleted.");
	redirect_to("photo.php?id={$comment->photograph_id}");
} else {
	$session->message("The comment could not be deleted.");
	redirect_to('my_profile.php');
}

?>

<?php if (isset($database)) { $database->close_connection(); } ?>
