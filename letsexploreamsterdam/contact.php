<?php include ('header.php'); ?>

	<div id="personalcard">

<div id="contactpicture">
<img src="pictures/raphael.jpg" height="240" width="165">
</div>


<div id=mycard>
<h4 style="line-height:0.5em">Raphael Rodrigues</h4>
<p>Founder</p>
<h4 style="line-height:0.5em">e-mail:</h4>
<p><a href="mailto:raph.webdevelopment@gmail.com">raph@raph-web.com</a></p>
		
</div>
</div>

<div class="newsletter">

<h3>Send us a Message.</h3>

<form method="post" action="insertProcess.php">
 
   Name: <input type="text" name="name">
   <br><br>

   E-mail: <input type="text" name="email">
   <br><br>

   Comment: <textarea name="comment" rows="4" cols="30"></textarea>
   <br><br>

   <input type="submit" name="submit" value="Submit"> 

</form>

</div>

</body>
</html>