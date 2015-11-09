<?php include ('header.php'); ?>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class="login_main_inner">

<?php

$myusername=$_SESSION['myuser'];
$mypassword=$_SESSION['mypass'];

$sql="SELECT fname FROM clients WHERE email='$myusername' and password='$mypassword'";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){ ?>

<span> Hello  <?php echo $row['fname']; ?></span>

<?php }
?>

</div>
</div>
</div>


<?php include ('footer.php'); ?>
