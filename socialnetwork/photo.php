<?php include ('header.php'); ?>

<?php
if(empty($_GET['id'])) {
	$session->message("No photograph ID was provided.");
	redirect_to('index.php');
}

$photo = Photograph::find_by_id($_GET['id']);
if(!$photo) {
	$session->message("The photo could not be located.");
	redirect_to('index.php');
}

$finduser = $photo->id;
$otheruser = User::find_by_id($finduser);

if(isset($_POST['submit'])) {
	
	$userid = $_SESSION['myid'];
	$user = User::find_by_id($userid);
	$authora = $user->username;
	$authora_id = $user->user_id;
	
	$body = trim($_POST['body']);
	
	$new_comment = Comment::make($photo->user_id, $authora_id, $authora, $body);
	if($new_comment && $new_comment->save()) {
		//comment save
		//No message needed, the comment will be seen.
		
		redirect_to("photo.php?id={$photo->user_id}");
	} else {
		//Failed
		$message = "There was an error that prevented the comment from being saved.";
	}
	
} else {
	$author = "";
	$body = "";	
}

$comments = $photo->comments();


?>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class= "login_main_inner">
	
	<?php echo output_message($message); ?>
	
	<!-- Call the username of the owner of the ppicture with $photo->id -->
	<h2><?php echo $otheruser->username; ?></h2>

<br />
<br />

	<!-- Display picture and caption -->
<div style="margin-left: 20px;">
	<img src="<?php echo "public/" .$photo->image_path(); ?>" />
	<p><?php echo $photo->caption; ?></p>
</div>

<!-- Start list Comments -->

<?php
	$myuserid = $_SESSION['myid'];
	$user = User::find_by_id($myuserid);
	$author = $user->username;
?>

<hr />
<br>

<div id="comments">
<?php foreach($comments as $comment): ?>
	
	<!-- IF $_SESSION['myid'] = $photo-id then allow user to dele comments -->
	
	<div class="comment" style="margin-bottom: 2em;">
		<div class="author">
			<a href="others.php?set=<?php echo $comment->author_id; ?>">
				<?php echo htmlentities($comment->author); ?>:
			</a>
		</div>
		<div class="body">
			<?php echo strip_tags($comment->body, '<strong><e><p>'); ?>
		</div>
		<div class="meta-info" style="font-size: 0.8em;">
			<?php echo datetime_to_text($comment->created); ?>
		</div>
		
		<div class="meta-info" style="font-size: 0.8em;">
		<?php
	if($_SESSION['myid'] == $photo->id || $_SESSION['myid'] == $comment->author_id) {
		echo "<a href='delete_comment.php?id=" .$comment->id. "'>Delete Comment</a>";
	}
		?>
		</div>
	
	</div>
	<?php endforeach; ?>
	<?php if(empty($comments)) {echo "No Comments."; } ?>
</div>

<br>
<hr />

<!-- Stop listing comments -->

<!-- Start Comment FORM -->

<div id="comment-form">
	
<form action="photo.php?id=<?php echo $photo->user_id; ?>" method="post">
	<table>
		<tr>
			<td><?php echo $author. ": "; ?></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><textarea name="body" cols="40" rows="8" placeholder="leave a new comment"><?php echo $body; ?></textarea></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Submit" /></td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>

<hr />
	
</div>

<!-- Finish Comment FORM -->

<a href="javascript:history.back()">&laquo; Back</a>


</div>
</div>
</div>




<?php include ('footer.php'); ?>