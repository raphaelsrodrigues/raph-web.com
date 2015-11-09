<!DOCTYPE HTML> 
<html lang="en">
	
	<head>
		<title>Let's Explore Amsterdam</title>

		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="../mystyle.css">



	</head>

	<body id="htmlsource">



<div id='topnav'>
<div id='logo'>
<a href='../index.html'><img class='logo' src="../pictures/img1.jpg"></a>
</div>
<div id='topnavTut' class='notranslate'>
<a class='topnav' target='_top' href='../index.html'>HOME</a>
<a class='topnav' target='_top' href='../sights/sights.html'>SIGHTS </a>
<a class='topnav' target='_top' href='../sights/sightspictures.html'>PICTURES </a>
<a class='topnav' target='_top' href='../tours.html'>TOURS </a>

<div style='float:right;word-spacing:0;'>

<a class='topnav' target='_top' href='../contact.html'>CONTACT</a>
<span style='letter-spacing:14px;'> |</span>
</div>
</div>
</div> 

<div class="guidedtour">
	
	<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comment = $_REQUEST['comment'];

require_once("connect.php");

$sql= "INSERT INTO newsletter (userName, userEmail, userComment)
VALUES('$name', '$email', '$comment')";

if ($conn->query($sql) === TRUE) {
	
	$last_id = $conn->insert_id;
	echo "New record created successfully. Your member code is:" .$last_id;
		
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close;

?>

</div>

</body>
</html>