<?php include ('header.php'); ?>

<?php 	if(!isset($_SESSION['myuser'])) { ?>

<div style="font-size: 18px; font-family: Verdana; padding-top:10px;" class="index">

<div style="text-align: center;">	
<p>Raph is a web development experience.</p>

<p>Complete the Sign-Up form and Log In to join the group and access the complete website.</p>
</div>

<br>
<hr />
<br>

<div style="width: 50%; margin: 0 auto;">
<p><a href="start-register.php">&raquo; Sign-Up Here &laquo;</a> <br />
	
	<ol>
	<li>Provide your e-mail</li>
	<li>Choose a username and password</li>
	<li>Grant access to your location</li>
	<li>Provide a profile picture.</li>
	</ol>

<p>Build your profile, check others and see who is close to you.</p>

</div>
<br>
<hr />
<br>


<div style="text-align: center;">
	
<p>Number of Members: 

<?php
	
	$sql="SELECT user_id FROM clients;";
	$result = $database->query($sql);
	
	$row_cnt = $result->num_rows;
	echo $row_cnt;
?>

</p>

</div>
</div>

<br>
<hr />
<br>


<?php } else { Header("Location: allusers.php"); } ?>


<?php include ('footer.php'); ?>