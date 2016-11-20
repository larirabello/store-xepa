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
<header style="z-index:200;margin-top: 20px;" class="text-center" style="padding:30px">
					<div class="row top" style="display:inline">
		        		<div class="col-lg-4 pull-left">
		        			<h1 id="slogan-left">Os alimentos orgânicos mais frescos...</h1>
		        		</div>
		        		<a href="#" id="logo"><div></div></a>
		        		<div class="col-lg-4 pull-right">
		        			<h1 id="slogan-right">... Da horta para a sua mesa</h1>
		        		</div>
		        	</div>
					<nav class="main-nav">
						<a href="#" id="logo"><div></div></a>
						<ul class="nav nav-justified">
							<li><a href="#">Encontre sua feira <span class="glyphicon glyphicon-tree-deciduous"></span></a></li>
							<li><a href="#">Lista de Compras <span class="glyphicon glyphicon-apple"></a></li>
							<li><a href="#">Cartão Fidelidade <span class="glyphicon glyphicon-piggy-bank"></a></li>
						</ul>
					</nav>
				</header>
	<!--<div class="row">
		<div class="menu-header">
			<header class="text-center" style="padding:30px">
				<a href="#"><img id="logo" src="assets/images/logo2.png"/></a>
			</header>
			<nav>
				<ul class="nav nav-justified">
					<li><a href="#">Encontre sua feira <span class="glyphicon glyphicon-tree-deciduous"></span></a></li>
					<li><a href="#">Lista de Compras <span class="glyphicon glyphicon-apple"></a></li>
					<li><a href="#">Cartão Fidelidade <span class="glyphicon glyphicon-piggy-bank"></a></li>
				</ul>
			</nav>
		</div>
		<!-- <button type="button" class="btn btn-default"><a href="views/form.php">Formulário</a></button> 
	</div> -->
	<div class="homepage-hero-module">
	    <div class="video-container">
	        <div class="filter">
	        	
				<div><a class="pull-right" href="#"><span class="glyphicon page-down"></span></a></div>
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





	<div class="row images">
	<?php

			 	require_once('connection/conn.php');
				$mysql = new conexao;
				$info = $mysql->sql_query("select * from products");

				//$i=0;
				while($dados=mysqli_fetch_array($info)) {

					echo "<div class='col-md-4 col-lg-4 col-sm-6 col-xs-12'>";
					if(!empty($dados['file'])) {
					echo "<a href='views/details.php'><img class='center-block' src='assets/images/".$dados['file']."'></img></a>";
					}else{
					echo "<img class='img-responsive' src='assets/images/no_image.png' align='absmiddle'></img>";
					}
					echo "<p class='center-block name'>";
					echo utf8_encode($dados['name']);
					$teste = $dados["name"];
					echo "</p>";
					//echo "<a class='color-icon' href='views/details.php'><button type='button' class='btn btn-warning btn-circle pull-right'  data-toggle='modal' data-target='#myModal'>+</button></a>";
					echo "<a href='#modal1'  data-id='".$dados['id']."'><button type='button' class='btn btn-warning btn-circle pull-right' data-target='.bs-example-modal-lg'>+</button></a>";
					echo "<br><hr>";


					//$i++;
    				//if ($i%3 == 0) echo '</div><div class="row images">';
    				for ($i=0; $i%3 == 0; $i++) {
    					echo "</div>";
    				}
				}			

					
	?>
	</div>
	  <!-- Modal Structure -->
	  <div id="modal1" class="modal">
	    <div class="modal-content">
	      <h4>Modal Header</h4>
	      <a href='#'><img class='center-block' src=''></img></a>
	      <p>A bunch of text</p>
	      <br>
	      <p class="price"></p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
	    </div>
	  </div>
	<footer>
		<p class="text-center">Larissa Rabello - Outubro/2016</p>
		<hr>
		<p class="text-center">Desenvolvimento para Servidores II</p>
	</footer>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	  <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

	<script type="text/javascript" src="assets/js/video.js"></script>
	<script type="text/javascript" src="assets/js/navbar.js"></script>
  	<script type="text/javascript">
		
		 $(document).ready(function(){
	    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		    $('.modal').modal({
		    	ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.	   
	        		let id = $(trigger).data("id");

	        		$.ajax({url	: "api/produtos.php",
	        				type : "POST",
	        				dataType : "json",
	        				data : {id : id}
	        		}).then(data => {
	        
	        				$(modal).find('div.modal-content').find('h4').html(data.name);

	        				$(modal).find('div.modal-content').find('p').html(data.description);

	        				$(modal).find('div.modal-content').find('p.price').html("R$ "+data.price);

	        				$(modal).find('div.modal-content').find('img').attr('src', 'assets/images/'+data.file);

	        		}) 
	      		}});

		  });
	</script>
	</body>
</html>
