<?php

require_once("../includes/initialize.php");

?>

<?php

if(empty($_GET['id'])) {
	$session->message("No photograph ID was provided.");
	redirect_to('list_photos.php');
}

$photo = Photograph::find_by_id($_GET['id']);
if($photo && $photo->destroy()) {
	$session->message("The photo {$photo->filename} was deleted.");
	redirect_to('../my_photo_album.php');
} else {
	$session->message("The photo could not be deleted.");
	redirect_to('../my_photo_album.php');
}

?>

<?php if (isset($database)) { $database->close_connection(); } ?>
