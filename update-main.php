<!DOCTYPE html>
<html>
	<head>
	<title>ISTE NITC Students' Chapter| Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" href="css/skel-noscript.css" />
	<link rel="stylesheet" type="text/css" href="css/cms.css">
	<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
		<div id="wrapper-main">
			<div id="header">
				<div class="outlayer">
					<section class="color-1">
						<nav class="cl-effect-14">
							<a href="index.html">Home</a>
							<a href="events/index.html">Events</a>
							<a href="iv/team.html">Our Team</a>
							<a href="#">Contact Us</a>
							<a href="gallery/index.html">Gallery</a>
						</nav>
					</section>
				</div>
			</div>
			<div id="main-content2">
				<div id="wrapper-auto">
					<section>
						<h2>Changes</h2>
					</section>
					<div id="cms-form">
							<?php
							$updateold=$_POST["update-text"];
							$file="update-main.txt";
							$store=fopen($file, 'w');
							fwrite($store, $updateold);
							fclose($store);
							echo "The changes have been made. You can check out the home page for the changes you have made";
							 ?>
					</div>								
				</div>
			</div>
			<div id="footer1">
				<div id="footer-middle">
					<div class="footer-left">
						<div class="fb-like" data-href="http://www.facebook.com/istenitc" data-width="310" data-show-faces="true" data-send="false"></div>
					</div>
					<div class="footer-middle">
						</div>
					<div class="footer-right">
					<br/>
						<p>&copy; ISTE NITC Students' Chapter| Site Designed by <a href="http://kiranganji.co.nf">Kiran Ganji</a></p>
					</div>
				
				</div>
			</div>
					
		</div>
	</body>
</html>