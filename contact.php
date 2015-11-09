<?php include ('header.php'); ?>

<div id="main">
	
	<div class="porttudo">	
		<div class="newsletter">
							<h3>Contact Box</h3>
		<form name="register" id="register" method="post" action="#" onSubmit="return validateForm();">
		<table width="100%">
	<tr>
	<td>	
	  	<input required type="text" maxlength="25" placeholder="Your Name" name="name" id="name">
	  	<br><br>
		<input required type="email" placeholder="Your e-mail" name="email" id="email">
		<br><br>
	</td>
	</tr>
	<tr>
	<td>
		<textarea required placeholder="Your message" name="comment" id="comment" rows="6" cols="35"></textarea>
		<br><br>
	</td>
	</tr>
	<tr>
	<td>
		<input style="float: left" type="submit" name="submit" value="Submit">
	</td>
	</tr>
		</table>
		</form>
		</div>
					
		<div class="contact"> 
		<div class="contact1">
			<h3>Linkedin Profile</h3>
			<a target="_blank" href="http://nl.linkedin.com/in/raphrodrigues/" title="Linkedin Profile">
			<img width="90" length="90" src="images/linkedin.png" /></a>
			</div>
			
		<div class="contact2">
				<h3>E-mail</h3>
			<a target="_blank" href="mailto:raph@raph-web.com" title="E-mail">
			<img width="90" length="90" src="images/email-logo-grey.png" /></a>
		</div>
		</div>
		</div>
		</div>

<?php

if (isset($_POST['name'], $_POST['email'], $_POST['comment'])){
	

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comment = $_REQUEST['comment'];
$to = "raph@raph-web.com";
$subject = "From ".$name." -- Contact Form";
$headers =	"From: ".$email ;
			
mail($to, $subject, $comment, $headers);

require_once("includes/connect.php");

$sql= "INSERT INTO message (userName, userEmail, userMessage)
VALUES('$name', '$email', '$comment')";

if ($conn->query($sql) === TRUE) {
	
	$last_id = $conn->insert_id;
	echo "Thank you for the message, I might be getting it soon.";
		
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

$conn->close;

?>


</div>


<?php include ('footer.php'); ?>