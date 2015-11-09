<?php include ('header.php'); ?>

<?php 	//if (!isset($_SESSION['myuser']))
//{?>
<!--<span><a href="user-login.php"> <button type="button" class="guest">Sign-up</button></a></span>-->
<?php //}
//else{ ?>
<!--<p>You are logged in and ready to shop</p>-->
<?php //} ?>

<?php 
//Run query to select latest 6 wedding items.
$dynamicList= "";

$sql="SELECT * FROM bridal ORDER BY product_id DESC LIMIT 6 ";

if ($result=$conn->query($sql)){

// Mysqli_num_row is counting table row

$rowcount=$result->num_rows;

if($rowcount>0){
	
	while($row = mysqli_fetch_array($result)){
		$id = $row["product_id"];
		$product_name = $row["product_name"];
		$description = $row["description"];
		$price = $row["price"];
		$quantity = $row["quantity"];
		$dynamicList .= $id;
		
		//$dynamicList .= '<strong> ' .$product_name.' </strong>';	
		//$dynamicList .= '<strong> ' .$product_name. '</strong> - Description:' .$description. ' Price: $' .$price.'';
		
			}
	
		} else {
			$dynamicList = "Sorry, we are out of this item"; }
	}

?>

<body class="body">

<div class="inventory">
	
<div class="lista1">

<div class="item1">
	<a href="product.php?id=13"><h4 align="center">Glow </h4>
<img height="150" width="150" src= "images/13.jpg" /></a>
</div>

<div class="item2">
	<a href="product.php?id=14"><h4 align="center">Merry </h4>
<img height="150" width="150" src= "images/14.jpg" /></a>
</div>

<div class="item2">
	<a href="product.php?id=15"><h4 align="center">Lucky </h4>
<img height="150" width="150" src= "images/15.jpg" /></a>
</div>

</div>

<div class="lista2">

<div class="item1">
	<a href="product.php?id=16"><h4 align="center">Sunny </h4>
<img height="150" width="150" src= "images/16.jpg" /></a>
</div>

<div class="item2">
	<a href="product.php?id=17"><h4 align="center">Bright </h4>
<img height="150" width="150" src= "images/17.jpg" /></a>
</div>

<div class="item2">
	<a href="product.php?id=18"><h4 align="center">Jolly </h4>
<img height="150" width="150" src= "images/18.jpg" /></a>
</div>
</div>
</div>

</body>

<?php include ('footer.php'); ?>