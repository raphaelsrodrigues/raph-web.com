<h3>JAVASCRIPT</h3>	<br>
<h4>Definition</h4>	
<p>JavaScript is a <b>dynamic</b> computer programming language 
	used to make web pages interactive. It is frequently 
	used as part of web browsers, whose implementations 
	allow client-side scripts to interact with the user,
	control the browser and alter the document content that is displayed.</p>
	
<p>The language first appeared in 1995. It was developed under the name Mocha and 
	officially called LiveScript when it first shipped in beta releases, 
	then it was renamed JavaScript when it was deployed in the Netscape browser version 2.0B3.</p>
	
<p>JavaScript is an interpreted language, which means its 
	implementations execute instructions directly, so no special 
	programs are required to create usable code. Any plain 
	text editor such as Notepad is quite satisfactory 
	for being able to write JavaScript.</p>
	
	<br>
	
<h4>Usage</h4>

<p>To make web pages interactive JavaScript describes and identifies events that 
	occur in the browser when "something happens" to the HTML elements:</p>

<p>- An element is clicked on.</p>
<p>- The page has loaded.</p>
<p>- An input field is changed.</p>
<p>- An image has been loaded.</p>
<p>- The mouse moves over an element.</p>
<p>- An HTML form is submitted.</p>

<br>
<div style="text-align: center;">
<div style="text-align:center; display:inline-block; border: 2px solid #e8e8e8;"><b><p>Example 1</p></b>

<p id="p1"> Click on the buttons below<br>to hide and show this paragraph. </p>

<input type="button" value="Hide text" onclick="document.getElementById('p1').style.visibility='hidden'">
<input type="button" value="Show text" onclick="document.getElementById('p1').style.visibility='visible'">
</div>

<br><br>

<div style="text-align:center; display:inline-block; border: 2px solid #e8e8e8;"><b><p>Example 2</p></b>

<p>Click "Try it" to execute<br>the displayDate() function.</p>

<button id="myBtn">Try it</button><br>

<p id="demo"></p>

<script>
document.getElementById("myBtn").onclick = displayDate;

function displayDate() {
    document.getElementById("demo").innerHTML = Date();
}
</script>
</div>
</div>

<br><br>

 <p>The examples above show how JavaSript can 
 	make the web page interactive. Although they seem simple there are endless 
 	possibilities to what you can achieve with this language. It allows you 
 	to modify the HTML file structure in any way you want.</p>
 	
 <p>Scripts are more easily used on multiple pages of the site 
 if they are placed in separate files. In this case a .JS extension 
 should be used. You then link the JavaScript to your HTML by 
 inserting a < script > tag. The same JavaScript can then be added 
 to several pages just by adding the appropriate tag into each of 
 the pages to set up the link.</p>
 