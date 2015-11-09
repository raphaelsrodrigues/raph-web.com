<?php
include ('header.php'); 
require_once("includes/initialize.php");
?>

<?php 	if(!isset($_SESSION['myid'])) { Header("Location: index.php"); } ?>
		

	<script src="scripts/script.js"></script>

	<script type="text/javascript">
		function start() {
		doGet() ;
		initialize();
	}
		window.onload = start;
	</script>

	<script>
	var messageAreaElem;
	var geocoder;
	
	function doGet() {
		
		if (navigator.geolocation) {
			
		navigator.geolocation.getCurrentPosition(positionCallback, positionErrorCallback);
		
		} else {
			messageAreaElem = "Your browser does not support HTML5 geolocation.";
			document.getElementById("answer").innerHTML = messageAreaElem;
		}
	}
	
	function positionCallback(position) {
	
	var latitude = position.coords.latitude;
	var longitude = position.coords.longitude;	
	var timestamp = new Date();
		timestamp.setTime(position.timestamp);
		window.latitude = latitude;
		window.longitude = longitude;
		
		if (!latitude || !longitude) {
			messageAreaElem.innerHTML = "HTML5 Geolocation is supported in your browser, but location is currently not available.";
			
		} else {
	
	codeLatLng(latitude, longitude); }
		
	}
	
	function positionErrorCallback(error) {
		messageAreaElem.innerHTML = "Error " + error.code + ", " + error.message;
	}
	
	function onLoad() {
		document.getElementById("getButton").addEventListener("click", doGet, true);
		messageAreaElem = document.getElementById("messageArea");
	}
	
	window.addEventListener("load", onLoad, true);
	
	
	 function initialize() {
    geocoder = new google.maps.Geocoder();
  }

function codeLatLng(latitude, longitude) {
	var latlng = new google.maps.LatLng(latitude, longitude);
	geocoder.geocode({'latLng': latlng}, function(results, status) {
		
		if (status == google.maps.GeocoderStatus.OK) {
			console.log(results)
			if (results[1]) {
				
				//formatted address
			//alert(results[1].formatted_address);
			
				//find country name
			for (var i=0; i<results[1].address_components.length; i++) {
				
				for (var b=0; b<results[1].address_components[i].types.length; b++) {
					
					//Types that hold a city may vary admin_area_lvl_1, sublocality, among others.
			if (results[1].address_components[i].types[b] == "country") {
				
				//this is the object you are looking for
			city=results[1].address_components[i];
			break;
			}
		}
	}
	
	//document.getElementById("answer").innerHTML = "city";
	loadXMLDoc(city.long_name);
	
	} else { document.getElementById("answer").innerHTML = "No results found"; }
	
	} else { alert("Geocoder failed due to: " + status);
	document.getElementById("answer").innerHTML = "No results found baby"; }
	
	});
	
	}
  
</script>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class= "login_main_inner">
	
<?php
	$myuserid = $_SESSION['myid'];
	$user = User::find_by_id($myuserid);
?>
	
	<!-- <?php
		
		echo $user->username."<br />";
		echo $user->user_id."<br />";
		echo $user->password."<br />";
				
		?> -->
		
		<?php echo output_message($message); ?>
		
		<h2 style="line-height: 60%;">- <?php echo $user->username; ?> -</h2>
		<p style="font-size:12px; line-height: 20%;">
			<a href="editusername.php?set=<?php echo $user->user_id; ?>">edit username</a>
		</p>
		
		<br />
		
		<img width="200px" length="200px" src="<?php echo $user->image1; ?>" />
		<p style="font-size:12px; line-height: 20%;">
			<a href="editimage.php?set=<?php echo $user->user_id; ?>">edit profile picture</a>
		</p>
		
		<br>
	
		<?php
$getphotos = $_SESSION['myid'];
$photos = Photograph::find_by_id_many($id=$getphotos);
$numberphotos = count($photos);
?>

	<a href="my_photo_album.php"><p>Your Photo Album (<?php echo $numberphotos; ?>)</p></a>
	
	<h3><div id="ajaxDiv"></div></h3>
	<div id="answer"> </div>
	
	<hr />
	
	<a href="others.php?set=<?php echo $_SESSION['myid']; ?>">&raquo; how others see you &laquo;</a>

</div>
</div>
</div>

<?php include ('footer.php'); ?>