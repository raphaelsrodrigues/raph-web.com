$(document).ready(function() {
    $(".fancybox").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',
    });
});


$(function(){
		
	/*	$(".first").hide();
		$(".second").hide();
		$(".third").hide();*/
		
		$("#primeiro").hide();
		$("#segundo").hide();
		$("#terceiro").hide();
		$("#quarto").hide();
		$("#quinto").hide();
		$("#sexto").hide();
		$("#setimo").hide();
		$(".appears").hide();
		
	/*	$(".first").fadeIn(3000);
		
		setTimeout(function(){
		$(".second").fadeIn(3000);} , 2000);
		
		setTimeout(function(){
		$(".third").fadeIn(3000);} , 4000);*/
		
		setTimeout(function(){
		$("#primeiro").fadeIn(2000);} , 500);
		
		setTimeout(function(){
		$("#segundo").fadeIn(2000);} , 1500);
		
		setTimeout(function(){
		$("#terceiro").fadeIn(2000);} , 2500);
		
		setTimeout(function(){
		$("#quarto").fadeIn(2000);} , 3500);
		
		setTimeout(function(){
		$("#quinto").fadeIn(2000);} , 4500);
		
		setTimeout(function(){
		$("#sexto").fadeIn(2000);} , 5500);
		
		setTimeout(function(){
		$("#setimo").fadeIn(2000);} , 6500);
		
		setTimeout(function(){
		$(".appears").fadeIn(2000);} , 7500);

	});
	


$(function(){
		
		$(".porttudo").hide();
		//$(".contact3").hide();
		
		$(".porttudo"). slideDown("slow");
		//$(".contact3").slideDown("slow");
  });





function validateForm()
{
	var x = document.forms["register"]["email"].value;
	var atpos = x.indexOf("@");
	var dotpos = x.lastIndexOf(".");
	var letters = /^[0-9a-zA-Z\s\.\,\!\?\'']+$/;
	var letters2 = /^[A-Za-z\s]+$/;  

if(document.getElementById("name").value=='')
	{
		document.getElementById("name").style.border="1px solid red";
		document.getElementById('name').focus();
		return false;
	}

else if (!document.getElementById("name").value.match(letters2))
	{
		alert ("Your name must contain letters only.");
		document.getElementById('name').focus();
		return false;
	}

else if (document.getElementById("email").value=='')
	{
		document.getElementById("email").style.border="1px solid red";
		document.getElementById('email').focus();
		return false;
	}

else if(document.getElementById("comment").value=='')
	{
		document.getElementById("comment").style.border="1px solid red";
		document.getElementById('comment').focus();
		return false;
	}
	
else if (!document.getElementById("comment").value.match(letters))
	{
		alert ("Message must contain letters, numbers and ',.!?' only.");
		document.getElementById('name').focus();
		return false;
	}
	
else if (atpos<1 || dotpos<atpos+2 || dotpas+2>=x.length)
	{
	alert ("Not a valid e-mail address");
	document.getElementById('email').focus();
	return false;
	}
}



$(document).ready(function() {
    $(".fancybox").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',
    });
});



$(function(){
	
	$(".pulse1").mouseover(function() {
	
	$(".pulse1").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	
	$(".pulse2").mouseover(function() {
	
	$(".pulse2").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	$(".pulse3").mouseover(function() {
	
	$(".pulse3").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	$(".pulse4").mouseover(function() {
	
	$(".pulse4").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	$(".pulse5").mouseover(function() {
	
	$(".pulse5").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	$(".pulse6").mouseover(function() {
	
	$(".pulse6").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	$(".pulse7").mouseover(function() {
	
	$(".pulse7").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	$(".pulse8").mouseover(function() {
	
	$(".pulse8").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	$(".pulse9").mouseover(function() {
	
	$(".pulse9").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	$(".pulse10").mouseover(function() {
	
	$(".pulse10").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	$(".pulse11").mouseover(function() {
	
	$(".pulse11").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	$(".pulse12").mouseover(function() {
	
	$(".pulse12").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	
	$(".pulse13").mouseover(function() {
	
	$(".pulse13").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	
	$(".pulse14").mouseover(function() {
	
	$(".pulse14").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	
	$(".pulse15").mouseover(function() {
	
	$(".pulse15").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
	
	$(".pulse16").mouseover(function() {
	
	$(".pulse16").fadeTo("fast", 0.3).fadeTo("fast", 1.0).fadeTo("fast", 0.3).fadeTo("fast", 1.0);
	
	});
		});
		

//$(window).scroll(function(e){ 
//  $el = $('.nav2'); 
 // if ($(this).scrollTop() > 110 && $el.css('position') != 'fixed'){ 
 //   $('.nav2').css({'position': 'fixed', 'top': '0px'}); 
 // }
 // if ($(this).scrollTop() < 110 && $el.css('position') == 'fixed')
 // {
 //   $('.nav2').css({'position': 'static', 'top': '0px'}); 
//  } 
///});



$(document).ready(function(e) {
		
var $lang = $('.topnavlng');
		
$('.topnavlng').find('a').on('click',function(e){
	e.preventDefault();
			
	var $desc = $('.description');
			
			switch($(this).attr('href')) {
				
				case 'languages/myhtml.php':
				$desc.load('languages/myhtml.php');
				break;
				
				case 'languages/mycss.php':
				$desc.load('languages/mycss.php');
				break;
				
				case 'languages/myjavascript.php':
				$desc.load('languages/myjavascript.php');
				break;
				
				case 'languages/myjquery.php':
				$desc.load('languages/myjquery.php');
				break;
				
				case 'languages/mysql.php':
				$desc.load('languages/mysql.php');
				break;
				
				case 'languages/myphp.php':
				$desc.load('languages/myphp.php');
				break;
				
				case 'languages/myajax.php':
				$desc.load('languages/myajax.php');
				break;
				
				case 'languages/mylanguage.php':
				$desc.load('languages/mylanguage.php');
				break;
				
				case 'languages/myobjectivec.php':
				$desc.load('languages/myobjectivec.php');
				break;
			}
		});
	});
	

window.fbAsyncInit = function() {
        FB.init({
          appId      : 'your-app-id',
          xfbml      : true,
          version    : 'v2.3'
        });
      };
      
      (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
