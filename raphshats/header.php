<!DOCTYPE html>

<html>

<head>
	
	<?php
	ob_start();
	require('includes/connect.php');
	require('includes/constants.php');
	session_start();
	?>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
			
</head>


<body class="body">
		
	<div class="uptop">
	<table width="100%">
    <tr>
	<td>
        	
            <div class="left">
                <a href="index.php"><img src="images/RIMG2.jpg"></a>
            </div>
     </td>
     <td>      
            <div class="right" align='right'>
                <a href="cart.php"><button type="button">Your Cart</button></a>
            </div>
            
	</td>
	</tr>
	</table>
	</div>

	
		<?php 	if(isset($_SESSION['myuser']) || isset($_POST['fname']))
	{?>
		
		
		
		<div class="row_user_auth" align="right">
			<span>
				<a href="<?php echo LOGOUT_URL; ?>">
					<button type="button" class="guest">Log Out</button>
					</a>
					</span>
					</div>
		
		
	
	<?php }

				else{ ?>
					
	
	<div class="row_user_auth">
	<div align="right">
	<form action="checklogin.php" method="post" class="login" enctype="multipart/form-data">
	<table>
	<input type="email" placeholder="e-mail address" name="myusername" class="input" autofocus required />
	<input type="password" placeholder="password" name="mypassword" class="input" onfocus="if (this.value =='Password')this.value='';" />
	<input type="submit" class="button" name="Login" value="Log-In" > or <a href="user-login.php"><button type="button" class="guest">Sign-up</button></a>
	</table>
	</form>
	</div>
	</div>

		<?php } ?>

