	<?php

	include('header.php'); 
	

$username_er = '0';
if(isset($_POST['continue']))
{
$emailquery = mysqli_query($conn, "SELECT * FROM clients WHERE email= '$_POST[email]'");
if(mysqli_num_rows($emailquery) > 0)
{
	$username_er = '1';
}
}
 ?>

<script type="text/javascript">
function username(str123){
if (str.length==0)
  { 
  document.getElementById("username_err").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    
	document.getElementById("username_err").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","usernameajax.php?q="+str123,true);
xmlhttp.send();
 }

function validateForm()
{

var letters = /^[0-9]+$/;
var letters1 = /^[A-Za-z]+$/;
var letters2 = /^[A-Za-z\s]+$/;
var x=document.forms["register"]["Email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
var fname=document.forms["register"]["fname"].value;
var lname=document.forms["register"]["lname"].value;
var phone=document.forms["register"]["phone"].value;
var phone1 = phone.replace(/[^0-9]/g, '');
var phone2 = phone.replace(/[^A-Za-z]/g, '');
var zipcode_1 = document.forms ["register"]["zipcode"].value;
var zipcode1 = zipcode_1.replace(/[^0-9]/g, '');
var zipcode2 = zipcode_1.replace(/[^A-Za-z]/g, '');
var err = '0';
var err_useryes = '1';
var phone_erms = '0';
var zipcode_erms = '0';
//alert(fname);zipcode
if(document.getElementById("fname").value=='')
	{
		document.getElementById("fname").style.border="1px solid red";
		document.getElementById('fname').focus();
		return false;
	}

else if(document.getElementById("lname").value=='')
	{
		document.getElementById("lname").style.border="1px solid red";
		document.getElementById('lname').focus();
		return false;
	}

else if (document.getElementById("Email").value=='')
	{
		document.getElementById("Email").style.border="1px solid red";
		document.getElementById('Email').focus();
		return false;
	}


else if(document.getElementById("addressline1").value=='')
	{
		document.getElementById("addressline1").style.border="1px solid red";
		document.getElementById('addressline1').focus();
		return false;
	}
else if(document.getElementById("addressline2").value=='')
	{
		document.getElementById("addressline2").style.border="1px solid red";
		document.getElementById('addressline2').focus();
		return false;
	}
else if(document.getElementById("city").value=='')
	{
		document.getElementById("city").style.border="1px solid red";
		document.getElementById('city').focus();
		return false;
	}
else if(document.getElementById("state").value=='')
	{
		document.getElementById("state").style.border="1px solid red";
		document.getElementById('state').focus();
		return false;
	}
else if(document.getElementById("zipcode").value=='')
	{
		document.getElementById("zipcode").style.border="1px solid red";
		document.getElementById('zipcode').focus();
		return false;
	}
else if(document.getElementById("country").value=='')
	{
		document.getElementById("country").style.border="1px solid red";
		document.getElementById('country').focus();
		event.preventDefault();
	}
else if(document.getElementById("pass").value=='')
	{
		document.getElementById("pass").style.border="1px solid red";
		document.getElementById('pass').focus();
		return false;
	}
else if(document.getElementById("confirm").value=='')
	{
		document.getElementById("confirm").style.border="1px solid red";
		document.getElementById('confirm').focus();
		event.preventDefault();
	}
	
//insert Password Validations

//insert Register and Confirm Password Validations

}


function numbersonly(e)
{
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}

</script>

<div class="main-content-wrapper clearfix">
<div class="login_main">

<div class= "login_main_inner">


<?php if($username_er=='1') { ?>
<div style="color:#F00;">Email already exists.<br><a href="user-login.php">New Customer? Join Now.</a></div>
<?php } ?>


<?php if($username_er=='0') { ?>
	
<div class="login_main_heading2">REGISTER <br> Inform us the <strong>delivery address</strong> to be associated with your account</div>
<br>

<form name="register" action="user-insert.php" id="register" onSubmit="return validateForm();" method="post">

<table>
<tr>

<td> <label class="basic_font">First Name</label> </td>

<td> <input name="fname" class="register_2_email" id="fname" type="text" /> </td></tr>

<tr>
<td> <label class="basic_font"> Last Name </label></td>

<td> <input name="lname" class="register_2_email" id="lname" type="text" /> </td></tr>


<tr>
<td> <label class="basic_font"> Phone No. </label></td>

<td> <input name="phone" class="register_2_email" id="phone" type="text" onkeypress="return numbersonly(event)" /> </td></tr>


<tr>
<td> <label class="basic_font"> Address line 1 </label></td>

<td> <input name="addressline1" class="register_2_email" id="addressline1" type="text" /> </td></tr>


<tr>
<td> <label class="basic_font"> Address line 2 </label></td>

<td> <input name="addressline2" class="register_2_email" id="addressline2" type="text" /> </td></tr>



<tr>
<td> <label class="basic_font"> City </label></td>

<td> <input name="city" class="register_2_email" id="city" type="text" /> </td></tr>


<tr>
<td> <label class="basic_font"> State </label></td>

<td> <input name="state" class="register_2_email" id="state" type="text" /> </td></tr>


<tr>
<td> <label class="basic_font"> Zipcode </label></td>

<td> <input name="zipcode" class="register_2_email" id="zipcode" type="text" /> </td></tr>


<tr>
<td> <label class="basic_font"> Country </label></td>

<td> <input name="country" class="register_2_email" id="country" type="text" /> </td></tr>


<tr>
<td> <label class="basic_font"> Email </label></td>

<td> <input name="Email" class="register_2_email" id="Email" value="<?php if(isset($_POST['email'])) { echo $_POST ['email']; } ?>" /> </td></tr>


<tr>
<td> <label class="basic_font"> Password </label></td>

<td> <input name="pass" class="register_2_email" id="pass" type="Password" /> </td></tr>


<div style="margin-left:365px;"><span id="confirm_err" class="help"></span></div>

<td colspan="2"><input class="button" type="submit" name="submit" id="submit" value="Submit" /></td></tr>

</table>
</form>
</div>
<?php } ?>
<div class="clear"></div>

</div>
</div>

<?php include ('footer.php'); ?>