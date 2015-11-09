<?php include ('header.php'); ?>

<?php

$userchat = $_SESSION['myuser'];
$userfile = $userchat.".html";
	
?>
		
		<style>
	
	form, p, span {
    margin:0;
    padding:0; }
  
input { font:12px arial; }
  
a {
    color:#0000FF;
    text-decoration:none; }
  
    a:hover { text-decoration:underline; }
  
#wrapper, #loginform {
    margin:0 auto;
    padding-bottom:25px;
    background:#EBF4FB;
    width:504px;
    border:1px solid #ACD8F0; }
  
#loginform { padding-top:18px; }
  
    #loginform p { margin: 5px; }
  
#chatbox {
    text-align:left;
    margin:0 auto;
    margin-bottom:25px;
    padding:10px;
    background:#fff;
    height:270px;
    width:430px;
    border:1px solid #ACD8F0;
    overflow:auto; }
  
#usermsg {
    width:395px;
    border:1px solid #ACD8F0; }
  
#submit { width: 60px; }
  
.error { color: #ff0000; }
  
#menu { padding:12.5px 25px 12.5px 25px; }
  
.welcome { float:left; }
  
.logout { float:right; }
  
.msgln { margin:0 0 2px 0; }

</style>

<script>

window.onload = function(){
        setInterval (loadLog, 2000);
        loadXMLDoc ();
 }
 
 </script>


<body>
	
<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class= "login_main_inner">

<div align="center">Welcome to our live chat support</div>

	<div id="wrapper">
		<div id="menu">
        	<p class="welcome">From: <b><?php echo $_SESSION['myuser']; ?></b> - To:<b> administrator</b><br></p>
        	<p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        	<div style="clear:both"></div>
    	</div>
     
    	<div id="chatbox">
    	
    	<?php
			if(file_exists($userfile) && filesize($userfile) > 0){
				
				$handle = fopen($userfile, "r");
    			$contents = fread($handle, filesize($userfile));
    			fclose($handle);
    			echo $contents; }
			
			else {
						
				$fp = fopen($userfile, 'a');
  				fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['myuser'] ." has started the chat session.</i><br></div>");
				fclose($fp); }
				
	
			?>
		</div>
     
    	<form name="message" action="">
    	    <input name="usermsg" type="text" id="usermsg" size="63" autofocus />
    	    <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
    	</form>
	</div>


</div>
</div>
</div>
</body>

	<script>
	//If user wants to end session
	
		$(document).ready(function(){
		
		$("#exit").click(function(){
			var exit = confirm("Are you sure you want to end the session?");
			if(exit==true){window.location = 'index.php?chatlogout=true';}		
		});
	});
	</script>

	<script>
	//If user submits the form
	
		$(document).ready(function(){
			
		$("#submitmsg").click(function(){
			var clientmsg = $("#usermsg").val();
			$.post("chatpost.php", {text: clientmsg});
			
			$("#usermsg").prop("value", "");
			
			return false;
		});
	});	
	</script>
	
	<script>
	
	function loadLog(){
		
	///var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
	
	$.ajax({
		
		url: userfile,
		cache: false,
		success: function(result){
					
			$("#chatbox").html(result);
			
			///var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
			
			//if(newscrollHeight > oldscrollHeight){
				
					$("#chatbox").animate({ scrollTop: 99999 }, 'normal'); //}

			},
			});
		}
	
	</script>
	
	<script>
	
	function loadXMLDoc () {	
		var request;

		if (window.XMLHttpRequest) {
			request = new XMLHttpRequest();
		
		} else {
			request = new ActiveXObject ("Microsoft.XMLHTTP");
		}
	
		request.open ('GET', 'chatajax.php');
	
		request.onreadystatechange = function() {
			if (request.readyState==4 && request.status==200) {
				console.log(request);
		
				var userfile = request.responseText;
				window.userfile = userfile;
			}
		}

		request.send();
	}

</script>
	
	

<?php include ('footer.php'); ?>