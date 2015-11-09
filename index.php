<?php include ('header.php'); ?>

<?php $dayid = "li-" .date('Y-m-d'); ?>


<style>
	
	#<?php echo $dayid; ?> {
	background-color: #7092BE !important;
	color:white !important;}
	
</style>


<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(52.345257,4.801862),
    zoom:10,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  
   // Creating a marker and positioning it on the map  
    var marker = new google.maps.Marker({  
      position: new google.maps.LatLng(52.345257,4.801862),
      title: 'Click to zoom',
      map: map,
      icon: 'http://www.raph-web.com/images/marker2.png' // null = default icon
      });
      
       marker.addListener('click', function() {
    map.setZoom(11);
    map.setCenter(marker.getPosition());
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

</head>


	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-3B41bwQV8DnVe1nW26R3H-gIWkb6JkE&callback=initMap"
        async defer></script>


    <script>

var map;
function initMap() {
	
	mapCanvas = document.getElementById('map');
	
	mapOptions = {
      center: {lat: 21.059535099999998, lng: 105.8318649},
      zoom: 5,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
	
  map = new google.maps.Map(mapCanvas, mapOptions);
  
  marker = new google.maps.Marker({  
      position: new google.maps.LatLng(21.059535099999998,105.8318649),  
      map: map  
    });
}

    </script> -->
    
    <!-- <script type="text/javascript">
    
    window.initialize();
    
  function initialize() {
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
      center: new google.maps.LatLng(-16.7224000,-43.8656600),
      zoom: 18,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
    
    
    // Creating a marker and positioning it on the map  
    var marker = new google.maps.Marker({  
      position: new google.maps.LatLng(-16.7223000,-43.8656600),  
      map: map  
    });
    
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script> -->
 
<div id="main">

	
<div class="maininfo2">
	<div class="video">
	
	<h3 align="center">A word about web development</h3>
	
	<h4 align="center">Know Your IDE</h4>
				
<iframe width="560" height="315" src="https://www.youtube.com/embed/eCcxAh1Pzgw" frameborder="0" allowfullscreen></iframe> </div></div>		<!--<div class="index">

		<div class="first"><p>Amsterdam based web designer/developer.</p></div>
		<div class="second"><p>I like coding data driven websites.</p></div>
		<div class="third"><p>Born in Brazil I have also lived in The U.S.</p></div>
		
		
		<div id="primeiro"><p>.grayline{</p></div>
		<div class="grayline">
	<div id="segundo"><p>position: absolute;</p></div>
	<div id="terceiro"><p>width: 20px;</p></div>
	<div id="quarto"><p>height: 100%;</p></div>
	<div id="quinto"><p>left: 40%;</p></div>
	<div id="sexto"><p>background-color: gray;</p></div>
	<div id="setimo"><p>}</p></div>
	</div>
	<div class="appears"></div>
	
	</div>-->

		
		<div class="maininfo">
			
		<div style="text-align: justify;" id="explore">
			
			<div class="container-fluid">
				<div class="row">
			
<!--		<div class="homepictures">
			
			<a href="#"><img src="images/promo.jpg" style="float:left;"></a>
			<div class="homesight">
			<h3><a  class='menu' target='_top' href="#">raph-web.com</a></h3>
			<p>raph-web.com is the personal portfolio of web developer Raphael Rodrigues. 
			Showcasing cross-platform UI and Interactive work with front and back-end technologies.</p>
  		</div>
		</div>-->
		<h3 align="center" style="color: #3b5998;">Current on the web</h3>
		<br>
			
			<div class="col-lg-6">
		
		<div class="homepictures">
			
			<img src="images/crossplatform.jpg" style="float:left;">
			<div class="homesight">
			<h3>Cross Platform</h3>
			<p>Applications are expected to run on desktop computers, mobile and tablet devices.  
			Supporting a variety of platforms helps to increase market diffusion.</p>
		</div>
		</div>
		
		<div class="homepictures">
			
			<img src="images/sql.jpg" style="float:left;">
			<div class="homesight">
			<h3>Database Driven</h3>
			<p>Enables collection and storage of information from clients and products. 
			Newsletter registration, users sign-up, access to chart, profile update and much more.</p>
		</div>
		</div>		

				<div class="homepictures">
			
			<img src="images/html1.jpg" style="float:left;">
			<div class="homesight">	
			<h3>HTML 5</h3>
			<p>The final and complete fifth revision of the HTML Standard. 
			Its most interesting features include Drag and Drop, audio/video elements and Geolocation.</p>
		</div>
		</div>
		
			</div>
			<div class="col-lg-6">
		
		<div class="homepictures">
			
			<img src="images/geolocation.png" style="float:left;">
			<div class="homesight">
			<h3>Geolocation</h3>
			<p>Used to identify the geographic location of a device. 
				Considering this can compromise user privacy, the position is only available when the request is approved. </p>
		</div>
		</div>
		
		<div class="homepictures">
			
			<img src="images/oop.jpg" style="float:left;">
			<div class="homesight">
			<h3>OOP</h3>
			<p>Object Oriented Programming makes complex data structures more manageable, 
				it also makes team development and larger projects much easier to maintain.</p>
		</div>
		</div>
		
		<div class="homepictures">
			
			<img src="images/facebookapi.jpg" style="float:left;">
			<div class="homesight">
			<h3>FaceBook API</h3>
			<p>Post rich stories from your web page with ‪OpenGraph‬ metatags.  
			 It makes 'link posts' stand out in the stream with organized information, titles and images.</p>
		</div>
		</div>
		
		</div>

		</div>
		</div>
</div>
</div>

<!-- <a href="https://dl.dropboxusercontent.com/u/63864034/applet/raph-applet.html"  target="_blank"><h3>&nbsp;&nbsp;&nbsp;my first applet</h2></a> -->

<!-- <div class="maininfo">
			
<div class="container">
<br><h4 align="center" style="color: #3b5998;">My Personal Favorites</h4><br>
	<div class="row">
		<div class="col-md-4">
<p align="center">1. Bootstrap</p>
</div>
<div class="col-md-4">
<p align="center">2. Google Maps API</p>
</div>
<div class="col-md-4">
<p align="center">3. Dynamic Calendars</p>
</div>
</div>
</div>
</div> -->

<div class="container-fluid">
	<div class="row">
		
		<div class="col-lg-6">
			<div class="flowdiv">
				<br>
				<h3 align="center" style="color: #3b5998;">Google Maps Javascript API</h3>
				<br>
				
				<div id="googleMap" style="width: 500px; height: 472px; display: block; margin-left: auto; margin-right: auto"></div>
				<br>
			</div>
		</div>
		
		<div class="col-lg-6">
			<div class="flowdiv">
				<br>
				<h3 align="center" style="color: #3b5998;">PHP Built Interactive Calendars</h3>
				<br>
				
				<?php
				$calendar = new Calendar();
				echo $calendar->show();
				?>
				
				<br>
			</div>
			
			<div class="flowdiv">
				<br>				
				<a href="socialnetwork/start-register.php" style="text-decoration: none;" title='Sign-Up Shortcut'>
					<h1 align="center" style="color: #3b5998;">Network Sign-Up Shortcut</h1>
				</a>
			</div>

</div>
</div>
</div>


</div>
</div>


<?php include ('footer.php'); ?>