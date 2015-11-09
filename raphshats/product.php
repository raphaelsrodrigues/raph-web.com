<?php include ('header.php'); ?>

<?php 	//if (!isset($_SESSION['myuser']))
//{?>
<!--<span><a href="user-login.php"> <button type="button" class="guest">Sign-up</button></a></span>-->
<?php //}
//else{ ?>
<!--<p>You are logged in and ready to shop</p>-->
<?php //} ?>
		
	<?php
	//Check to see the URL varialbe is set and that it exists in the database
	
	if(isset($_GET['id'])){
		//$id= $_GET['id'];
		$id= preg_replace('#[^0-9]#i', '', $_GET['id']);
		
		//Use variable to check to see if the id exist in the database.
		$sql="SELECT * FROM products WHERE product_id='$id' LIMIT 1";
		
		if ($result=$conn->query($sql)) {
		$rowcount=$result->num_rows;

		if($rowcount>0){
			
		//get all the products details
		while($row = mysqli_fetch_array($result)){
			
		$id = $row["product_id"];
		$product_name = $row["product_name"];
		$description = $row["description"];
		$price = $row["price"];
		$quantity = $row["quantity"];
		$category = $row["category"];
		}
		
		} else {
		echo "Product doesn't exist";
		}
		} else {
		echo "There is somethig wrong with the query";		
		}
		} else {
			echo "Data to render this page is missing.";
		}
	
	?>	
		
<body class="body">

<br>

<div class="showproduct">
<div class="showimage">
<img height="200" width="200" src="images/<?php echo $id; ?>.jpg" alt='".$product_name."'  border='1'/>
</div>

<div class="showdescription">
<p><?php echo $category. " - " .$product_name  ?><br>
	<?php echo $description ?><br>
	<?php echo "$".$price ?></p>
	 
	<form id="form2" name="form2" method="post" action="cart.php">
	<input type="hidden" name="pid" id="pid" value="<?php echo $id; ?>"  /> 
	<input type = "submit" name="button" id="button" value="Add to Cart" />
	</form>
</div>
</div>

</body>

<?php include ('footer.php'); ?> 
