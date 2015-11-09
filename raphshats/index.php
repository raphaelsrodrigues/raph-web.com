<?php include ('header.php'); ?>

<?php 	//if (!isset($_SESSION['myuser']))
//{?>
<!--<span><a href="user-login.php"> <button type="button" class="guest">Sign-up</button></a></span>-->
<?php //}
//else{ ?>
<!--<p>You are logged in and ready to shop</p>-->
<?php //} ?>

<div class="mainproducts">

<div class="product1">
	<a href="classic.php"><h4 align="center">Classic</h4>
<img height="200" width="200" src= "images/1.jpg" /></a>
</div>

<div class="product2">
	<a href="prime.php"><h4 align="center">Prime</h4>
<img height="200" width="200" src= "images/9.jpg" /></a>
</div>

<div class="product2">
	<a href="bridal.php"><h4 align="center">Bridal</h4>
<img height="200" width="200" src= "images/18.jpg" /></a>
</div>

</div>
<!--
<?php
print_r($_SESSION);
?>
<br>
<?php

if(!isset($_COOKIE['cookiename'])) {
    echo "Cookie named cookiename is not set!";
} else {
    echo "Cookie cookiename is set!<br>";
    echo "Value is: " . $_COOKIE['cookiename'];
}
?>-->

</body>

<?php include ('footer.php'); ?>