<?php include ('header.php'); ?>

<?php 	if(isset($_SESSION['myuser']))
	{?>
		
	
<body>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class= "login_main_inner">




</div>
</div>
</div>
</body>



<?php } else{ 
		
		Header("Location: index.php");
	
	} ?>

<?php include ('footer.php'); ?>