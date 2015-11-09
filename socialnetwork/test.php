<?php

require("header.php");


//PROCEDURAL WAY OF CREATING USER

$fname = "randolph";
$myemail = "randolph@uol.com";
$pass = "12345";

//returns a MySQLi result object.

// $sql ="INSERT INTO clients (email, username, password)
// VALUES('$myemail', '$fname', '$pass')";
// 
// if ($database->query($sql) === TRUE) {
// 	
	 //this might 
	// $last_id = $database->insert_id;
		
// }

//OBJECT ORIENTED WAY OF CREATING USER
	
	// $user = new User();
	// $user->username = "johnsmith";
	// $user->password = "abcd12345";
	// $user->email = "john@jonh.com";
	// $user->location = "somewhere";
	// $user->create();
	
//UPDATE USERS	

// $user = User::find_by_id(120);
// $user->password = "changemeplease";
// $user->save();
// 
// $user = User::find_by_id(120);
// $user->delete();

?>

<?php

$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = 3;
$total_count = User::count_all();
$latit = $_SESSION['mylat'];
$longit = $_SESSION['mylong'];
$dist=100;
$myid = $_SESSION['myid'];


$results = User::find_by_distance_pagination($page, $per_page, $total_count, $latit, $longit, $dist, $myid);

echo $latit;
echo "<br />";
echo $longit;
echo "<br />";
echo $dist;
echo "<br />";
echo $myid;
echo "<br />";
echo $page;
echo "<br />";
echo $per_page;
echo "<br />";
echo $total_count;
echo "<br />";

?>

<table class="bordered">
	<tr>
		<th>Username</th>
		<th>Email</th>
		<th>Location</th>
	</tr>
	
	<?php foreach($results as $result): ?>
		
		<tr>
			<td><?php echo $result->username; ?></td>
			<td><?php echo $result->email; ?></td>
			<td><?php echo $result->location; ?></td>
		</tr>
		
		<?php endforeach; ?>
</table>



<?php
echo "User ID: " .$_SESSION['myid'];
$photos = Photograph::find_all();
?>

<h2>Photographs</h2>

<?php echo output_message($message); ?>

<table class="bordered">
	<tr>
		<th>Image</th>
		<th>Caption</th>
		<th>Size</th>
	</tr>
	
	<?php foreach($photos as $photo): ?>
		
		<tr>
			<td><img src="<?php echo "public/" .$photo->image_path(); ?>" width="100" /></td>
			<td><?php echo $photo->caption; ?></td>
			<td><?php echo $photo->size_as_text(); ?></td>
		</tr>
		
		<?php endforeach; ?>
</table>


 <?php echo "<hr />"; ?>
 
 <!-- Works with the find_by_sql() code that is commented, bad because returns only one data. -->

<!-- <?php
echo "User ID: " .$_SESSION['myid'];
$photos = Photograph::find_by_id($id=8);
?>

<h2>Photographs</h2>

<table class="bordered">
	<tr>
		<th>Image</th>
		<th>Caption</th>
		<th>Size</th>
	</tr>
		
		<tr>
			<td><img src="<?php echo "public/" .$photos->image_path(); ?>" width="100" /></td>
			<td><?php echo $photos->caption; ?></td>
			<td><?php echo $photos->size_as_text(); ?></td>
		</tr>

</table> -->


