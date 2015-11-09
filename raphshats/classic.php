<?php include ('header.php'); ?>

<?php 	//if (!isset($_SESSION['myuser']))
//{?>
<!--<span><a href="user-login.php"> <button type="button" class="guest">Sign-up</button></a></span>-->
<?php //}
//else{ ?>
<!--<p>You are logged in and ready to shop</p>-->
<?php //} ?>

<body class="body">

<div class= "inventory">
<div class="lista1">

<div class="item1">
	<a href="product.php?id=1"><h4 align="center">Flair</h4>
<img height="150" width="150" src= "images/1.jpg" /></a>
</div>

<div class="item2">
	<a href="product.php?id=2"><h4 align="center">Mellow</h4>
<img height="150" width="150" src= "images/2.jpg" /></a>
</div>

<div class="item2">
	<a href="product.php?id=3"><h4 align="center">Dazz</h4>
<img height="150" width="150" src= "images/3.jpg" /></a>
</div>

</div>

<div class="lista2">

<div class="item1">
	<a href="product.php?id=4"><h4 align="center">Geny</h4>
<img height="150" width="150" src= "images/4.jpg" /></a>
</div>

<div class="item2">
	<a href="product.php?id=5"><h4 align="center">Breeze</h4>
<img height="150" width="150" src= "images/5.jpg" /></a>
</div>

<div class="item2">
	<a href="product.php?id=6"><h4 align="center">Vivid</h4>
<img height="150" width="150" src= "images/6.jpg" /></a>
</div>
</div>
</div>

</body>

<?php include ('footer.php'); ?>