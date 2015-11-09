<?php include ('header.php'); ?>

<?php

$fname = $_REQUEST['fname'];
$Email = $_REQUEST['Email'];
$pass = $_REQUEST['pass'];

//returns a MySQLi result object.

$sql ="INSERT INTO clients (email, username, password)
VALUES('$Email', '$fname', '$pass')";

if ($database->query($sql) === TRUE) {
	//this might 
	$last_id = $database->insert_id;
	}

//Creating ID Session

$sql="SELECT * FROM clients WHERE username='$fname' and password='$pass'";

if ($result=$database->query($sql)){

// Mysqli_num_row is counting table row

$rowcount=$result->num_rows;

if($rowcount==1)
{
	
	while ($row = $result->fetch_assoc()){
			
		$_SESSION['myid']= $row['user_id'];
		$_SESSION['myuser']=$row['username']; }
	
} else {
echo "Something went wrong.  We couldn't create your User ID.";
}
}

?>

<script>
	var messageAreaElem;
	var geocoder;
	
	//Handles the "Get Current Position" button.
	function doGet() {
		
		//Test if the browser supports geolocation.
		if (navigator.geolocation) {
			
		//Tell the user the browser does support geolocation.
		//messageAreaElem.innerHTML = "Your browser does support HTML5 geolocation.";
		messageAreaElem = "See who's around your area.";

		//Request the current position.
		navigator.geolocation.getCurrentPosition(positionCallback, positionErrorCallback);
		
		} else {
			//messageAreaElem.innerHTML = "Your browser does not support HTML5 geolocation.";
			messageAreaElem = "Your browser does not support HTML5 geolocation.";
		}
		
			document.getElementById("answer").innerHTML = messageAreaElem;
		
	}
	
	//Geolocation callback, receiver position information.
	function positionCallback(position) {
	
	var latitude = position.coords.latitude;
	var longitude = position.coords.longitude;	
	var accuracy = position.coords.accuracy;
	var heading = position.coords.heading;	
	var speed = position.coords.speed;
	var altitude = position.coords.altitude;	
	var altitudeAccuracy = position.coords.altitudeAccuracy;
	var timestamp = new Date();
		timestamp.setTime(position.timestamp);
		window.latitude = latitude;
		window.longitude = longitude;
		
		if (!latitude || !longitude) {
			messageAreaElem.innerHTML = "HTML5 Geolocation is supported in your browser, but location is currently not available.";
			
		} else {
			codeLatLng(latitude, longitude)
		//	function initialize() {
    var mapCanvas = document.getElementById('map-canvas');
    var mapOptions = {
      center: new google.maps.LatLng(latitude, longitude),
      zoom: 11,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
  //}
  google.maps.event.addDomListener(window, 'load', initialize);
			
			document.getElementById("latitude").value = latitude;
			document.getElementById("longitude").value = longitude;
			document.getElementById("locationAccuracy").value = accuracy;
			document.getElementById("heading").value = heading;
			document.getElementById("speed").value = speed;
			document.getElementById("altitude").value = altitude;
			document.getElementById("altitudeAccuracy").value = altitudeAccuracy;
			document.getElementById("timestamp").value = timestamp;
		}
		
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
         //alert(results[1].formatted_address)
        //find country name
             for (var i=0; i<results[1].address_components.length; i++) {
            for (var b=0;b<results[1].address_components[i].types.length;b++) {

            //Types that hold a city may vary admin_area_lvl_1, sublocality, among others.
                if (results[1].address_components[i].types[b] == "country") {
                    //this is the object you are looking for
                    city= results[1].address_components[i];
                    break;
                }
            }
        }
        //city data
        document.getElementById("city").innerHTML = city.long_name;
        
        } else {
          document.getElementById("city").innerHTML = "No results found";
        }
      } else {
        alert("Geocoder failed due to: " + status);
      }
    });
  }

	 //add to databse
    // function loadXMLDoc(city.long_name){return this;}
  
</script>

<script type="text/javascript">
function start() {
// put all your onload functions here

doGet() ;
initialize();
}
window.onload = start;
</script>

<body>
	
	

<div class="main-content-wrapper clearfix">
<div class="login_main">
	<div class="login_main_heading"><img src="images/location.jpg" /></div>
<div class="login_main_inner">
	
<!--	<div id="resultArea">
		<h3>Core Information</h3>
		<label>Latitude (degrees)</label><br/>
		<input type="text" id="latitude" size="60" readonly="true"/><br/>
		
		<label>Longitude (degrees)</label><br/>
		<input type="text" id="longitude" size="60" readonly="true"/><br/>
		
		<label>Location accuracy (m)</label><br/>
		<input type="text" id="locationAccuracy" size="60" readonly="true"/><br/>
		
		<h3>Optional Information</h3>
		<label>Heading (degrees)</label><br/>
		<input type="text" id="heading" size="60" readonly="true"/><br/>
		
		<label>Speed (m/s)</label><br/>
		<input type="text" id="speed" size="60" readonly="true"/><br/>
		
		<label>Altitude (m)</label><br/>
		<input type="text" id="altitude" size="60" readonly="true"/><br/>
		
		<label>Altitude accuracy (m)</label><br/>
		<input type="text" id="altitudeAccuracy" size="60" readonly="true"/><br/>
		
		<label>Timesstamp</label><br/>
		<input type="text" id="timestamp" size="60" readonly="true"/><br/>
		
</div>
	
	<br>
	</div>
<br>-->
	
<!-- <button onclick="doGet()">Share Your Location</button> <br> <br>-->

<?php

$_SESSION['myuser'] = $fname;
$_SESSION['mypass'] = $pass;

$sql="SELECT username FROM clients WHERE username='$fname' and password='$pass'";

$result = $database->query($sql);

while ($row = $result->fetch_assoc()){ ?>

<span> Hello  <?php echo $row['username']; ?>.</span>

<?php }
?>

<div id="answer"></div>
<!--<div id="city"></div>
</br>-->

<div style="padding: 0px; display: block; margin-left: auto; margin-right: auto" id='map-canvas'></div>

<script src ="scripts/script.js"></script>
<button type="button" onclick="loadXMLDoc(city.long_name)">Set Location</button>
<div id="ajaxDiv"></div>
<a href="profile.php"><h3>Continue</h3></a>

</div>
</div>
</div>


</body>
<?php include ('footer.php'); ?>
