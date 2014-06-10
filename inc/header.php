<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Primal Strength | <?php echo $pageTitle; ?></title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!--[if lt IE 9]>
			<script type="text/javascript" src="assets/plugins/lt-ie9/html5.js"></script>
			<script type="text/javascript" src="assets/plugins/lt-ie9/respond.min.js"></script>
			<script type="text/javascript" src="assets/plugins/lt-ie9/excanvas.compiled.js"></script>
		<![endif]--> 

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Dosis:300,400" rel="stylesheet" type="text/css" />


		<!-- CORE CSS FRAMEWORK -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/font-linecons/linecons.css" rel="stylesheet" type="text/css" />

		<!-- PLUGINS -->
		<link href="assets/css/superslides.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

		<!-- CSS TEMPLATE -->
		<link href="assets/css/reset.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/framework.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/typography.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<link href="assets/css/blog.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/overwrite.css" rel="stylesheet" type="text/css" />


		<!-- ICONS -->
		<link rel="shortcut icon" href="assets/images/favicon1.png" type="image/x-icon" />
		<link rel="icon" href="assets/images/favicon1.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="assets/images/favicon1.ico" type="image/x-icon" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- STYLESWITCHER -->
		<link href="assets/plugins/styleswitcher/styleswitcher.css" rel="stylesheet" type="text/css"/>

		<!-- Morenizr -->
		<script type="text/javascript" src="assets/plugins/modernizr.min.js"></script>
	</head>
	<body>

		<!-- HOME -->
		<section id="home" class="full-screen video" style="background-image:url('assets/images/facility-images/plates.png');"><!-- background used for mobiles or error/not loading -->

			<!-- video audio icon -->
			<a href="#" id="video-volume"><i class="fa fa-volume-down"></i></a>

			<!-- Video Background - replace videoURL with your youtube video URL -->
			<a id="YTPlayer" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=0D1cdS45Q1c',containment:'body',autoPlay:true, mute:true, startAt:4, opacity:1}">youtube</a>
			<!--/Video Background -->

			<span class="raster"><!-- video raster --></span>

			<!-- Caption -->
			<div class="image-caption">
				<div class="inner">
					<img src="assets/images/logo/logo.png" class="img-responsive" alt="" />
				</div>
			</div>

		</section>
		<!-- /HOME -->



		<!-- Main Nav -->
		<header id="header">

			<nav class="navbar navbar-inverse" role="navigation"><!-- add "wihite" class for white nav bar -->
				<!-- <div class="container"> -->

					<!-- Mobile Menu Button -->
					<button id="mobileMenu" class="fa fa-bars" type="button" data-toggle="collapse" data-target=".navbar-collapse"></button>

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<a class="navbar-brand scrollTo" href="#home">
							
							<!--
								Span class:
									- dark
									- white
									- styleColor (if you select "green" style color, the color will be green).

									You can combine them 
									Example:
										<span class="white">ISIS</span><span class="styleColor">ONE</span>
							-->
							<span class="heading"><?php 
												if($section == "index") {echo "Primal Summer Camp";}
												if($section == "adult") {echo "Adult Summer Programme";}
							 				?>
							</span>
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<!-- Fullscreen Button - Unavailable for IE -->
						<a href="#" class="btn-fullscreen"><i class="fa fa-external-link"></i></a>

						<ul class="nav navbar-nav navbar-right">
							<li><a href="#home" class="scrollTo">Home</a></li>
							<li><a href="#about" class="scrollTo">About</a></li>
							<li><a href="#dates" class="scrollTo">Dates &amp; Times</a></li>
							<li><a href="#services" class="scrollTo signUp">Sign-Up Now</a></li>
							<li><a href="#work" class="scrollTo">Our Facility</a></li>
							<li><a href="#contact" class="scrollTo">Contact</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->

				<!-- </div> -->
			</nav>

		</header>
		<!-- /Main Nav -->




