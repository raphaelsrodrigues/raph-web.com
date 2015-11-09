<?php include ('header.php'); ?>


<?php 	if (isset($_SESSION['myuser']))
	{?>
	
		
	<?php
	//////////////////////////////////////////////////////////////
	// SECTION 1 User attempts to add something to cart from the product page 
	//////////////////////////////////////////////////////////////
	if(isset($_POST['pid'])){
		
		$pid=$_POST['pid'];
		$found= false;
		$i = 0;
	
	//if the cart session variable is not set or cart array is empty.
	
	if(!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1){
		
		//Run if cart is empty or not set.
		$_SESSION["cart_array"] = array(0 => array("item_id" => $pid, "quantity" => 1));
		
	} else {
		//Run if cart has at least one item.
		foreach ($_SESSION["cart_array"] as $each_item){
			$i++;
			//access to the list of all the key value pair that is busted down.
			while (list($key, $value) = each($each_item)) {
				if($key == "item_id" && $value == $pid) {
					//that item is in cart already so lets adjust its quantity using array_splice()
					array_splice($_SESSION["cart_array"], $i-1, 1, array(array("item_id" => $pid, "quantity" => $each_item['quantity'] + 1)));
					
					$found = true;
				}//close if condition
			}//close while loop
		}//close foreach loop
		
		if ($found == false) {
			
			array_push($_SESSION["cart_array"], array("item_id" => $pid, "quantity" => 1));
			
			}
		}
		header("location: cart.php");	
	}
	
	?>
	
	<?php 
	//////////////////////////////////////////////////////////////
	// SECTION 2 User chooses to empty their shopping cart.
	//////////////////////////////////////////////////////////////
	if(isset($_GET['cmd']) && $_GET['cmd'] == "emptycart") {
		unset($_SESSION["cart_array"]);
	}
	?>
	
	<?php
	//////////////////////////////////////////////////////////////
	// SECTION 3 User wants to Update quantity.
	//////////////////////////////////////////////////////////////
	if(isset($_POST['item_to_adjust']) && $_POST['item_to_adjust'] != "") {
		
		$item_to_adjust = $_POST['item_to_adjust'];
		$quantity = $_POST['quantity'];
		$quantity = preg_replace('#[^0-9]#i', '', $quantity);
		
		//conditions for quantity.
		if($quantity < 1) {$quantity = 1;}
		if($quantity >= 100) {$quantity = 99;}
		if($quantity == "") {$quantity = 1;}
		$i = 0;
		foreach ($_SESSION["cart_array"] as $each_item){
			$i++;
			//access to the list of all the key value pair that is busted down.
			while (list($key, $value) = each($each_item)) {
				if($key == "item_id" && $value == $item_to_adjust) {
					//that item is in cart already so lets adjust its quantity using array_splice()
					array_splice($_SESSION["cart_array"], $i-1, 1, array(array("item_id" => $item_to_adjust, "quantity" => $quantity)));
					
				}//close if condition
			}//close while loop
		}//close foreach loop
		
	header("location:cart.php");
	exit();
	}
	
	?>
	
	
	<?php 
	///////////////////////////////////////////////////////////////
	//SECTION 4 User wants to remove an item from the cart
	//////////////////////////////////////////////////////////////
	
	if (isset($_POST['index_to_remove']) && $_POST['index_to_remove'] !=""){
		//Access the array and run code to remove that array index
		$key_to_remove = $_POST['index_to_remove'];
		if(count($_SESSION['cart_array']) <= 1){
			unset($_SESSION['cart_array']);
		}else{
			unset($_SESSION['cart_array']["$key_to_remove"]);
			sort($_SESSION['cart_array']);
		}
	}
	?>
	
	<?php 
	//////////////////////////////////////////////////////////////
	//SECTION 5 (Renders the cart for the users to view)
	/////////////////////////////////////////////////////////////
	$cartOutput = "";
	$cartTotal = "";
	
	if(!isset($_SESSION['cart_array']) || count($_SESSION['cart_array']) < 1) {
		$cartOutput = "<h3 align='center'><br>Your shopping cart is empty</h3>";
	} else {
		$i = 0;
		foreach ($_SESSION["cart_array"] as $each_item) {
		
			$item_id = $each_item['item_id'];
			
			$sql="SELECT * FROM products WHERE product_id='$item_id' LIMIT 1";
			if ($result=$conn->query($sql)) {
		$rowcount=$result->num_rows;

		if($rowcount>0){
			
		//get all the products details
		while($row = mysqli_fetch_array($result)){
		$product_name = $row["product_name"];
		$price = $row["price"];
		$category = $row['category'];
		$description = $row['description'];
		}
		
		} else {
		echo "Product doesn't exist";
		}
		}
			$pricetotal = number_format($price * $each_item['quantity'],2);
			$cartTotal = number_format($pricetotal + $cartTotal,2);
			
			//setlocale(LC_MONETARY, "en_US");
			//$pricetotal = money_format("%10.2n", $pricetotal);
			
			//Dynamic table row assembly
			$cartOutput .= "<tr bgcolor='e7e7e7'>";
			$cartOutput .= "<td><a href='product.php?id=$item_id'>" .$category. " - " .$product_name. "
			<br/><img src='images/".$item_id.".jpg' alt='".$product_name."' width='60' height='60' border='1'/></a></td>";
			$cartOutput .= "<td>".$description. "</td>";
			$cartOutput .= "<td>$" .$price. "</td>";
			$cartOutput .= "<td> <form action='cart.php' method='post'>
			<input name='quantity' type='text' value='" .$each_item['quantity']."' size='1' maxlength='2' />
			<input name='adjustBtn".$item_id."' type='submit' value='Update Quantity' />
			<input name='item_to_adjust' type='hidden' value='".$item_id."' />
			</form> </td>";
			//$cartOutput .= "<td>" .$each_item['quantity']."</td>";
			$cartOutput .= "<td>$" .$pricetotal."</td>";
			$cartOutput .= "<td><form action='cart.php' method='post'>
			<input name='deleteBtn".$item_id."' type='submit' value='Remove' />
			<input name='index_to_remove' type='hidden' value='".$i."' />
			</form></td>";
			$cartOutput .= "</tr>";
			
			$i++;
			
			//$cartOutput .= "<td>" .$each_item['item_id']."<br />";
			//while (list($key, $value) = each($each_item)) {
			//	$cartOutput .= "$key:$value<br />";
			//}
			
		}		
		$cartTotal = "<div  style='font-size:20px' align='right'>Cart Total: $".$cartTotal. "USD </div>";
	}
	?>
		
<body class="body">

<div class="cart">

<table width="100%" border ="1" cellspacing="0" cellpadding="6">
	<tr>
		<td width= "15%" bgcolor="#ffffff">Product</td>
		<td width= "42%" bgcolor="#ffffff">Description</td>
		<td width= "8%" bgcolor="#ffffff">Unit Price</td>
		<td width= "15%" bgcolor="#ffffff">Quantity</td>
		<td width= "10%" bgcolor="#ffffff">Total</td>
		<td width= "10%" bgcolor="#ffffff">Remove Item</td>
	</tr>
	<?php echo $cartOutput; ?>
	
</table>

</div>

<div class="carttotal"><br><?php echo $cartTotal; ?></div>

<br/>
<br/>
<?php 
	if(isset($_SESSION['cart_array'])) {
	echo "<div class='emptycart'><a href = 'cart.php?cmd=emptycart'><button>Empty Shopping Cart</button></a></div>";
	}
?>


<?php }
		else{ ?>
					
	<div class="blockcart">
		<div class="blockcartcontent">
	<p>Please Log-In or <a href="user-login.php">Sign-up</a> before accessing a cart.
	</p>
	</div>
	</div>
		<?php } ?>

</body>

<?php include ('footer.php'); ?> 
