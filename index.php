<!doctype html>
<html class="no-js" lang="pt-BR">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    <title>Xêpa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css"/>      
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.brown-orange.min.css" />
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    <!-- Latest compiled and minified CSS
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway+Dots" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"><!--letra do header -->
</head>
<body class="container-fluid main">
	<style type="text/css">
		
		.main-nav,
		.main {
		  position: relative; 
		 
		}

		.main-nav {
		  z-index: 150;
		  top:10%;
		  transition: all 0.6s ease;
		}

		.main-nav #logo {
			display: none;
		}

		header,
		.main-nav-scrolled {
			position: fixed;
			width: 100%;
			top: 0;

		}

		header .header--clear  {
			transform: translate3d(0, -130px, 0);
		}

		header div a {
			border: none;
		}
		header #logo div{
			width: 128px;
			height: 96px;
			background-size: 128px 96px;
			margin: 0 auto;
			background: url('assets/images/logo2.png');
		}

		.main-nav-scrolled {
			height: 122px;
		}
		.main-nav-scrolled #logo {
			display: block;
			background-size: 64px 38px;
			margin: 0 auto;
		}

		.top-scrolled #logo {
			display: none;
		}

		.main-nav-scrolled #logo div {
			width: 64px;
			height: 38px;
			background-size: 64px 38px;
	    	background-repeat: no-repeat;
			margin: 0 auto;
		}


	</style>
	<?php
	@include('views/partials/header.php');
	?>
	<div class="homepage-hero-module">
	    <div class="video-container">
	        <div class="filter">
	        	<div><a class="pull-right" id="button" href="#promo"><span class="glyphicon page-down"></span></a></div>
	        </div>
	        <video autoplay loop class="fillWidth">
	            <source src="assets/images/video/MP4/Veggie-Stand.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
	            <source src="assets/images/video/WEBM/Veggie-Stand.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
	        </video>
	        <div class="poster hidden">
	            <img src="assets/images/video/Snapshots/Veggie-Stand.jpg" alt="">
	        </div>
	    </div>
	</div>
	<div class="row container promo">
	<section>
		<?php
		@include('views/partials/randomPromo.php');
		?>
	</section>
	<!--<hr style="padding-top: 50px"> -->
	</div>
	<div class="row destaques">
		<section>
		<?php
		@include('views/partials/randomProducts.php');
		?>
		</section>
	</div>
	<?php
	@include('views/partials/footer.php');
	?>
		
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	  <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

	<script type="text/javascript" src="assets/js/video.js"></script>
	<script type="text/javascript" src="assets/js/navbar.js"></script>
	</body>
</html>
