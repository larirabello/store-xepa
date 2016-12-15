<!doctype html>
<html class="no-js" lang="pt-BR">
<head>
    <?php 
      @include('partials/includes.php');
    ?>
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
      background: url('../assets/images/logo2.png');
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

    .container-fluid {
      background-color: #fff;
    }

   /* .col-lg-4 {
      padding: 0;
      margin:0;
      width: 400px;
    }
  */


  h1.prod-type {
    text-transform: uppercase;
    font-family: 'Raleway', sans-serif;
    padding-left: 10px;
    font-size: 24px;
    
  }

  p.prod-desc {
    font-family: 'Bitter', serif;
    padding-left: 10px;
    font-size: 1em;
    font-style: italic;
    color: #B7ADA9;
    
  }

  .images {
    padding-bottom:150px;
  }

  nav {
    background: #F5F4F4;
    width: 100%;
  }

  header {
    background-color: #F5F4F4;
    margin-top: 0!important;
    padding-top: 20px;
  }

  .nav > li > a:hover, .nav > li > a:focus {
    background-color: #F5F4F4;
  }

  .main-nav-scrolled {
    border-top: none;
  }


  /* background */

  .hero-image {
    height: 100vh;
    max-height: 1000px;
    background: url(//cdn.shopify.com/s/files/1/1148/3974/t/10/assets/img_hero_image.jpg?15282771685175236283) 50% 50% no-repeat;
    background-size: cover;
    position: relative;
    z-index: -1;
}

.hero-image__title {
    margin-bottom: 32px;
    font-family: "Raleway",Tahoma,Geneva,sans-serif;
    font-size: 60px;
    font-weight: 700;
    line-height: 72px;
    z-index: 1000;
}


/* lista */

ul.address {
  columns: 2;
  -webkit-columns: 2;
  -moz-columns: 2;
}

  </style>
  <?php

  $welcome = "";
  $user = "";

  session_start("login");

  if (isset($_SESSION['nome'])) {
    $welcome = "<br>Olá, ".$_SESSION['nome'];
  }

    
  ?>
  <div class="nav-wrapper">
  <?php
  @include('partials/header.php');
  ?>
  </div>
	<section class="hero-image">
	  <div class="hero-image__content text-center">
	    
	      <h1 class="hero-image__title">Real Food Projects</h1>
	    
	    
	      <p class="hero-image__desc">Featuring 30 Skills and 47 Recipes from Scratch, this book will change the way you cook.</p>
	    
	    <a class="btn btn--default" href="http://foodly-store.myshopify.com/blogs/recipes" title="Take a look at book">Take a look at book</a>
	  </div>
	</section>
	<section>
		<div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14632.036039659335!2d-47.13133985!3d-23.53217835!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1480369065958" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>
	<article>
		<section>
			<div class="row center-block" style="margin: 0 auto;">
				<h1 class="text-center">Feiras mais próximas</h1>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-left: 25%;">
				<ul class="address">
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
				</ul>
				</div>
			</div>
		</section>
		<section>
			<div class="row center-block" style="margin: 0 auto;">
				<h1 class="text-center">Todas as feiras</h1>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-left: 25%;">
				<ul class="address">
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
					<li>Rua Marechal Deodoro da Fonseca, 132 - Centro, São Roque - SP, 18130-070</li>
				</ul>
				</div>
			</div>
		</section>
	</article>
	<?php
	  @include('../views/partials/footer.php');
	?>





<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

<script type="text/javascript" src="../assets/js/navbar.js"></script>
</body>
</html>