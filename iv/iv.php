<!DOCTYPE HTML>
<html>
	<head>
		<title>Industrial Visit</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
			<link rel="stylesheet" type="text/css" href="css/skel-noscript.css" />
			<link rel="stylesheet" type="text/css" href="css/style.css" />
			<link rel="stylesheet" type="text/css" href="css/style-desktop.css" />
			<link rel="stylesheet" type="text/css" href="css/component.css" />
		
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	</head>
	<body class="subpage">

		<!-- Header -->
			<div id="header">
			<div class="outlayer">
				<section class="color-1">
				<nav class="cl-effect-14">
					<a href="../index.html">Home</a>
					<a href="../events/index.html">Events</a>
					<a href="#">Our Team</a>
					<a href="#">Contact Us</a>
					<a href="../gallery/index.html">Gallery</a>
				</nav>
			</section>
			</div>
		</div>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<div class="9u">
								
								<!-- Main Content -->
									<section>
										<header>
											<h2>Industrial Visit</h2>
											<h4>Tell me and will forget,show me I may remember,involve me and I will understand</h4>
										</header>
										<p>
											ISTE NITC Students' Chapter is glad to announce that we are conducting the Industrial Visit to two industries namely Peekay Steels and Diesel power Plant Nallilam on 21st September 2013. Please go through the below text for knowing more about the industries. 
										</p>
										<h3>Peekay Steels</h3>
										<div id="iv-box">
											<div id="iv-image-box"></div>
											<div id="iv-text-box">
												<p>Peekay Group was established in the year 1942 by Haji P.K.Moidu, a legend of his own time for his uncommon vision. Peekay Steel Castings (P) Ltd, manufacture high quality steel castings made of Carbon steel, Alloy steel, Stainless steel,Duplex steel, Nickel base alloys etc. in various sizes and weights up to 11000 Kg per piece for the petrochemical industry, water supply, earth moving, transportation and other engineering industries. For more detais click <a href="http://peekaysteel.com/">here</a></p>
											</div>
										</div>
										<h3>Diesel Power Plant</h3>
										<div id="iv-box">
											<div id="iv-image-box2"></div>
											<div id="iv-text-box">
												<p>One of the pioneering companies that have graduated from the Techical Business Incubaor at NITC, Choice India Rubber Products is one of the major rubber processing firms in the region. The company manufactures moulded rubber products, radiator hoses and other such items,and currently operates from Koodarinji,Mukkam. The industry houses various state of the art facilities and machines such as Tool roll mill, Hydraulic press, Steam autoclave, Extruders, die castings etc.</p>
											</div>
										</div>
										<h2>Contacts</h2>
										<p>Jobin George Mathew: 7736437859 &nbsp;&nbsp;&nbsp;&nbsp;Kartikey Vaid: 9961185824<br/>
										Karthika C Ravindran: 9400708596 &nbsp;&nbsp;&nbsp;&nbsp;Lindu Mary Lawrence: 9497451935
										</p>
										<h2>Industrial Visit 2013 Registration</h2>
										<form action="signup_ac.php" method="post">
											Name<br/>
											<input name="name" type="text" id="login" size="30"/><br/><br/>
											Your NITC Roll No.<br/>
											<input name="password" type="text" id="login" size="30"/><br/><br/>
											Email<br/>
											<input name="email" type="text" id="login"/><br/><br/>
											Phone Number<br/>
											<input name="phnumber" type="text" id="login" /><br/><br/>
											<input type="submit" name="Submit" value="Register" id="submit">
										</form>
									</section>

							</div>
							<div class="3u">
								
								<!-- Sidebar -->
									<section>
										<header>
											<h2>Updates</h2>
										</header>
										<?php 
										$file="update2.txt";
										$store=fopen($file,'r');
										$display=fread($store, filesize($file));
										fclose($store);
										echo $display;
										?>
									</section>
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Copyright -->
			<div id="copyright">
				<span class="copy">&copy;</span> ISTE NITC Students' Chapter| Site Designed by <a href="http://kiranganji.co.nf">Kiran Ganji</a>
			</div>

	</body>
</html>