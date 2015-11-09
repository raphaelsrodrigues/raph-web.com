<h3>CSS<br>Cascading Style Sheets</h3><br>


<h4>Definition</h4>

	<p>The Cascading Style Sheets (CSS) is a style sheet language 
	used to describe the look and formatting of a document written in a markup language. 
	CSS is an essential web technology used by most websites to create visually 
	engaging webpages and User Interface.</p>

	<h4>Usage</h4>
	
	<p>CSS was designed mainly to enable the separation of document content 
		from document presentation, including elements such as the layout, colors, 
		and fonts. This separation improves content accessibility, provide 
		more flexibility and control of the presentation characteristics.</p><br>
		
		<img src="../images/inspect3.png" style="display:block; margin:auto; padding: 5px 5px 5px 5px; border: 2px solid #e8e8e8" /> <br>
		
		<p>Use the "right-click trick" to Inspect the Element of a web page on the Internet. 
			What pops up on the bottom of the page also has information about the
			style. The tags used in your HTML file are used as reference by the CSS file 
			so it can perform modifications to the characteristics of the content. 
			Default characteristics for every item of HTML markup are defined in the browser, 
			but with CSS they can be altered or enhanced.</p><br>
			
			
		<img src="../images/cssantes.jpg" style="display:block; margin:auto; padding: 5px 5px 5px 5px; border: 2px solid #e8e8e8" /> <br>
		<img src="../images/cssdepois.jpg" style="display:block; margin:auto; padding: 5px 5px 5px 5px; border: 2px solid #e8e8e8" /> <br>
		
			
			<p>The style of the page has to be defined on the html file. It can be described 
				between the tags <b>< style ></b> and <b>< /style ></b> or on its own file (style.css) but referenced 
			by the <b>< link ></b> tag in the html file.</p><br>
			
		<img src="../images/stylelink.jpg" style="display:block; margin:auto; padding: 5px 5px 5px 5px; border: 2px solid #e8e8e8; width:350px; height:35px;" /><br>
		
		<p>Note that HTML files are not intended to contain tags for formatting a document, 
			they are intended to define the content of a document, like:</p>
			
			<p>
			<b>< h1 > This is a heading < /h1 ></b><br>
			<b>< p >This is a paragraph.< /p ></b><br>
			</p>
			
			<p>When tags like < font >, and color attributes were added 
				to the HTML 3.2 specification, it started a nightmare for web 
				developers. Development of large web sites, where fonts and color 
				information were added to every single page, became a long and expensive process. 
				To solve this problem, the World Wide Web Consortium (W3C) created CSS. 
				In HTML 4.0, all formatting could be removed from the 
				HTML document, and stored in a separate CSS file.</p>
		
		