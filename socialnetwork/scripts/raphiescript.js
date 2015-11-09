///////start-register.php

function validateCont()
{

if(document.getElementById("email").value == '')

{

alert("Email can't be blank.");
document.getElementById('email').focus();
return false;

}

var x = document.forms["cont"]["email"].value;
var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+2 || dotpas+2>=x.length)

{
alert ("Not a valid e-mail address");
return false;
}

}

//////user-register.php

function username(str){
if (str.length==0)
  { 
  document.getElementById("username_err").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    
	document.getElementById("username_err").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajaxcheckemail.php?q="+str);
xmlhttp.send();
 }

function validateForm()
{

var letters = /^[0-9]+$/;
var letters1 = /^[A-Za-z]+$/;
var letters2 = /^[A-Za-z\s]+$/;
var x=document.forms["register"]["Email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
var fname=document.forms["register"]["fname"].value;
var lname=document.forms["register"]["lname"].value;
var phone=document.forms["register"]["phone"].value;
var phone1 = phone.replace(/[^0-9]/g, '');
var phone2 = phone.replace(/[^A-Za-z]/g, '');
var zipcode_1 = document.forms ["register"]["zipcode"].value;
var zipcode1 = zipcode_1.replace(/[^0-9]/g, '');
var zipcode2 = zipcode_1.replace(/[^A-Za-z]/g, '');
var err = '0';
var err_useryes = '1';
var phone_erms = '0';
var zipcode_erms = '0';
//alert(fname);zipcode
if(document.getElementById("fname").value=='')
	{
		document.getElementById("fname").style.border="1px solid red";
		document.getElementById('fname').focus();
		return false;
	}

else if (document.getElementById("Email").value=='')
	{
		document.getElementById("Email").style.border="1px solid red";
		document.getElementById('Email').focus();
		return false;
	}

else if(document.getElementById("pass").value=='')
	{
		document.getElementById("pass").style.border="1px solid red";
		document.getElementById('pass').focus();
		return false;
	}
else if(document.getElementById("confirm").value=='')
	{
		document.getElementById("confirm").style.border="1px solid red";
		document.getElementById('confirm').focus();
		event.preventDefault();
	}
	
//insert Password Validations
//insert Register and Confirm Password Validations

}


function numbersonly(e)
{
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}

///////////////somewhere.php

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
                if (results[1].address_components[i].types[b] == "administrative_area_level_1") {
                    //this is the object you are looking for
                    city= results[1].address_components[i];
                    break;
                }
            }
        }
        //city data
        //document.getElementById("city").innerHTML = city.long_name;
        
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
