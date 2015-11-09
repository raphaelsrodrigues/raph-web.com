<?php include ('header.php'); ?>

<?php

$email_er = '0';
if(isset($_POST['continue']))
{
	
	$sql="SELECT * FROM clients WHERE email= '$_POST[email]';";
	$result = $database->query($sql);

	if(mysqli_num_rows($result) > 0)
{
	$email_er = '1';
}
 ?>

<script type="text/javascript">
function username(str){

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  { if (xmlhttp.readyState==4 && xmlhttp.status==200)
  { document.getElementById("username_err").innerHTML=xmlhttp.responseText; }
  }
xmlhttp.open("GET","ajaxcheckemail.php?q="+str);
xmlhttp.send();
 }
 </script>
 
 
 <script type="text/javascript">

function validateForm() {

var letters = /^[0-9]+$/;
var letters1 = /^[A-Za-z]+$/;
var letters2 = /^[A-Za-z\s]+$/;
var letterNumber = /^[0-9a-zA-Z]+$/; 
//var x=document.forms["register"]["Email"].value;
//var atpos=x.indexOf("@");
//var dotpos=x.lastIndexOf(".");
//var fname=document.forms["register"]["fname"].value;
//var lname=document.forms["register"]["lname"].value;
//var phone=document.forms["register"]["phone"].value;
//var username_err=document.forms["register"]["username_err"].value;
//var err = '0';
//var err_useryes = '1';

if(document.getElementById("fname").value==='')
	{
		document.getElementById("fname").style.border="1px solid red";
		document.getElementById('fname').focus();
		return false;
	}
	
else if(document.getElementById("username_err").innerHTML === "Username isn't available")
	{
		document.getElementById("fname").style.border="1px solid black";
		document.getElementById('fname').focus();
		return false;
	}

else if(document.getElementById("Email").value==='')
	{
		document.getElementById("Email").style.border="1px solid red";
		document.getElementById('Email').focus();
		return false;
	}

else if(document.getElementById("pass").value==='')
	{
		document.getElementById("pass").style.border="1px solid red";
		document.getElementById('pass').focus();
		return false;
	}

}

</script>

<div class="main-content-wrapper clearfix">
<div class="login_main">

<div class= "login_main_inner">


<?php if($email_er=='1') { ?>
<div style="color:#F00;">Email already exists.<br><a href="start-register.php">New User? Join Now.</a></div>
<?php } ?>


<?php if($email_er=='0') { ?>
	
	<div class="login_main_heading"><img src="images/username.jpg" /></div>
	
<div class="login_main_heading2"> Choose a Username and Password to activate your account.</div>

<form name="register" action="somewhere.php" id="register" onSubmit="return validateForm();" method="post">

<table>

<tr>
<td> <label class="basic_font"> Email </label></td>

<td> <input name="Email" class="register_2_email" id="Email" value="<?php if(isset($_POST['email'])) { echo $_POST ['email']; } ?>" /> </td></tr>

<tr>

<td> <label class="basic_font">Username</label> </td>

<td> <input name="fname" class="register_2_email" id="fname" type="text" onblur="username(this.value)" required /> </td></tr>

<tr>
<td> <label class="basic_font"> Password </label></td>

<td> <input name="pass" class="register_2_email" id="pass" type="Password" required /> </td></tr>


<div style="margin-left:365px;"><span id="confirm_err" class="help"></span></div>

<td colspan="2"><input class="button" type="submit" name="submit" id="submit" value="Submit" /></td></tr>

</table>
<div id="username_err"></div>
</form>
</div>



<?php } ?>
<div class="clear">
	
</div>
</div>
</div>

<?php } else{ 
		
		Header("Location: index.php");
	
	} ?>

<?php include ('footer.php'); ?>