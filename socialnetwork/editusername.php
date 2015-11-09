<?php include ('header.php'); ?>

<?php 	if(!isset($_SESSION['myid'])) {Header("Location: index.php");} ?>

<?php

$userid = $_SESSION['myid'];

if (isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['newusername'])){
	
$myusername=$_REQUEST['user'];
$mypassword=$_REQUEST['pass'];
$mynewusername=$_REQUEST['newusername'];

$sql="SELECT * FROM clients WHERE username = '$mynewusername'";
$check= User::find_by_sql($sql);

if(empty($check)){

$found_user = User::authenticate($myusername, $mypassword);

if ($found_user){
	
	$sql = "UPDATE clients SET username='$mynewusername' WHERE user_id='$userid'";

if ($database->query($sql) === TRUE) {
	$_SESSION['myuser'] = $myusername;
    $message = "Username successfully updated.";
	Header("Location: my_profile.php");

} else {
	$message = "Something went wrong. Username was NOT updated.";}
} else {
	$message = "Username/password combination incorrect.";}
} else {
	$message = "Username already taken";}
}

?>


<body>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class= "login_main_inner">

<?php echo "<p>{$message}</p>"; ?>

      <div class="login-card">
    <h3>Update your Username</h3>
  <form action="#" method="post" onSubmit="return validateForm();" enctype="multipart/form-data">
    <input type="text" name="user" placeholder="Current Username" required><br>
    <input type="password" name="pass" placeholder="Password" required><br>
    <input type="text"  name="newusername" placeholder="New Username" required><br>
    <input type="submit" name="login" class="login login-submit" value="Update">
  </form>
  
</div>



</div>
</div>
</div>
</body>



<?php include ('footer.php'); ?>