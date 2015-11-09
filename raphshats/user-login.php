<?php include ('header.php'); ?>

<script>
function validateCont()
{

if(document.getElementById("email").value == '')

{

alert("Email can't be blank.");
document.getElementById('email').focus();
return false;

}

var x = document.forms["cont"]["email"].value;
var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+2 || dotpas+2>=x.length)

{
alert ("Not a valid e-mail address");
return false;
}

}

</script>


<div class="main-content-wrapper clearfix">
<div class="login_main">

<div class="login_main_inner">
<div class="login_main_heading">New Customer? Join Now</div>
<div class="login_main_formdiv">

<form name="cont" id="cont" method="post" onsubmit="return validateCont();" action="user-register.php">

<label class="register_heading"> Register by entering your email</label><br>

<input placeholder="Your email here" type="text" name="email" id="email" class="register_email">
<br>

<label class="register_verify"> Your e-mail is safe. We will never share it.</label>
<br>

<input type="submit" name="continue" id="continue" value="continue" class="button">
</div>
</div>
<div class="clear"></div>
</div>
</div>


<?php include ('footer.php'); ?>
