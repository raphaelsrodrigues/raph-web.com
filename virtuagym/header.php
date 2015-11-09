<!DOCTYPE html>

<html lang="en">
	
	<head>

		<?php
		ob_start();
		require('includes/connect.php');
		require('includes/database.php');
		require('includes/plandays.php');
		require('includes/pagination.php');
		require('includes/user.php');
		require('includes/plan.php');
		require('includes/exercisedifficulty.php');
		require('includes/exercise_instances.php');
		require('includes/exercise.php');
		session_start();
		?>
		
		<title>raph-web.com</title>
		
		<meta charset="utf-8">
		<meta property="og:url" content="http://www.raph-web.com/" />
		<meta property="og:title" content="A word about web development." />
		<meta property="og:type" content="article" />
		<!--<meta property="og:image" content="http://www.raph-web.com/images/webraph.jpg" />
		<meta property="og:image" content="http://www.raph-web.com/images/promo2.jpg" />-->
		<meta property="og:image" content="http://www.raph-web.com/images/socialmedia.tif" />
		<meta property="og:description" content="raph-web.com is the personal portfolio of web developer Raphael Rodrigues. 
		Showcasing cross-platform UI and Interactive work with front and back-end technologies." />
		<meta name="viewport" content="width=device-width, initial-scale=0.5">
		<meta name="Keywords" content="web development, web languages, language, development, html, css, coding, code, raph, raph-web">
		<meta name="description" content="raph-web.com is the personal portfolio of web developer Raphael Rodrigues. 
		Showcasing cross-platform UI and Interactive work with front and back-end technologies.">
		<meta name="author" content="Raphael Rodrigues">
		
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<script type="text/javascript" src="scripts/script.js"></script>
		<!--[if lt IE 9]>	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>	<![endif]-->
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="scripts/jquery.fancybox.css" type="text/css" media="screen" />
		<script type="text/javascript" src="scripts/jquery.fancybox.pack.js"></script>
		
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		
	</head>
		
	<body>
		
		<div class='nav1' class='notranslate'>
			
			
		<ul  class="myMenu">
			
			<!-- <div style='display:inline; float:right;word-spacing:5px;'>
			<li>
				<a class='topnav' target='_top' href='languages.php' title='web-languages I work with'>DEVELOPMENT |</a>
			</li>
			
			<li>
				<a class='topnav' target='_top' href='contact.php' title='contact'>CONTACT</a>
			</li>
			</div> -->
			
			<li><!-- 
				<a class='topnav' target='_top' href='index.php' title='home'>
					<img src='../images/home.png' style='padding-right: 10px;' />
				</a> -->
			</li>
			
			<li class='has-sub'>
				<a class='topnav' target='_top' href='index.php' title='Plan Overview'>Your Plans</a>
			</li>
			
			
		</ul>
		
	</div>

	
</div>
