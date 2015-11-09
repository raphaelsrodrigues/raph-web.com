<?php include ('header.php'); ?>

<?php 	if(isset($_SESSION['myuser']))
	{?>
		
		
		<?php

	function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2, $unit = 'Km') { 
    $theta = $longitude1 - $longitude2; 
    $distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + 
                (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * 
                cos(deg2rad($theta))); 
    $distance = acos($distance); 
    $distance = rad2deg($distance); 
    $distance = $distance * 60 * 1.1515; 
    switch($unit) { 
        case 'Mi': 
            break; 
        case 'Km' : 
            $distance = $distance * 1.609344; 
    } 
    
    return (round($distance,2)); 
}
	

	
?>
		
		

<body>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class= "login_main_inner">


<?php

$others = $_REQUEST["set"];

$sql="SELECT * FROM clients WHERE user_id='$others'";

$result = $database->query($sql);

while ($row = $result->fetch_assoc()){ ?>

<h2><?php echo $row['username']; ?></h2>

<img width="200px" length="200px" src="<?php echo $row['image1']; ?>">

<?php
$photos = Photograph::find_by_id_many($id=$others);
$numberphotos = count($photos);
?>

	<a href="others_photo_album.php?set=<?php echo $others; ?>"><p>Photo Album (<?php echo $numberphotos; ?>)</p></a>

<!-- <h3><?php echo $row['location']; ?></h3> -->
<p>Distance: <?php

$latdist = $_SESSION['mylat'];
$longdist = $_SESSION['mylong'];

echo getDistanceBetweenPointsNew($latdist, $longdist, $row['latitude'], $row['longitude']);?> km</p>
 
 <?php }
?>


</div>
</div>
</div>
</body>



<?php } else{ 
		
		Header("Location: index.php");
	
	} ?>

<?php include ('footer.php'); ?>