<?php


$username_er = '0';

{

if($username_er !='1'){
$date = date("Y-m-d");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$name = $fname ."  ".$lname;
$activation = '1';

?>


if (document.forms["register"]["pass"].value==null || document.forms["register"]["pass"].value.trim()=="")
{
	document.getElementById("pass").innerHTML="Please fillup the Password";
	err = '1';	
}
 if(document.forms["register"]["pass"].value.trim()!="")
{
 		var pass = document.forms["register"]["pass"].value.trim();
		if(pass.length<6)
{
			document.getElementById("pass").innerHTML="Pass contain minimum 6 letters";
			err = '1';
			//alert(pass.length);	
}
		if(pass.length==6)
{
		document.getElementById("pass").innerHTML="";
			//err = '0';
}
}






 if (document.forms["register"]["confirm"].value==null || document.forms["register"]["confirm"].value.trim()=="")
{
	document.getElementById("confirm").innerHTML="Please fillup the Confirm  Password";
	err = '1';	
}
 if (document.forms["register"]["pass"].value.trim() !="" && document.forms["register"]["confirm"].value !="")
{
		if( document.forms["register"]["pass"].value.trim() != document.forms["register"]["confirm"].value.trim())
{
			document.getElementById("confirm").innerHTML="Password doesn't match";
			err = '1';	
}
		else
{
			document.getElementById("confirm").innerHTML="";
err= '0';
//err = '0';
}
		//alert(err+'_0',err_useryes+'_1');
}
	
	
	
	


if (err == '1')
{
	//alert(err);
	return false;
}




<?php
if (isset($_POST['Login']))


{

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:login_success.php");
}


?>





// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($conn, $myusername);
$mypassword = mysqli_real_escape_string($conn, $mypassword);

	
	
	
	// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:login_success.php");
	