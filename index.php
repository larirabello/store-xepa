<!doctype html>
<html class="no-js" lang="pt-BR">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Projeto Desenvolvimento para Servidores II</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    <!-- Latest compiled and minified CSS
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="background-color:#FFD1AA; height:100px">
			<header class="text-center" style="padding:40px">
				<h1>Projeto Desenvolvimento para Servidores II</h1>
			</header>
		</div>
	</div>
	<div class="row images">
	<?php

			 	require_once('connection/conn.php');
				$mysql = new conexao;
				$info = $mysql->sql_query("select * from products");

				while($dados=mysqli_fetch_array($info)) {
					echo "";
					if(!empty($dados['file'])){
					echo "<img src='assets/images/".$dados['file']."' align='absmiddle'></img>&nbsp;&nbsp;";
					}else{
					echo "<img src='assets/images/no_image.png' align='absmiddle'></img>&nbsp;&nbsp;";
					}
					echo "<p class='center-block'>";
					echo utf8_encode($dados['name']);
					echo "</p><hr>";
				}

	?>


		<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
			<img class="center-block" src="http://67.media.tumblr.com/tumblr_m6mn0sUcuE1r8mh8no1_500.jpg" style="width:290px; height:290px">
			<p class="center-block">Descrição da Imagem</p>
			<hr>
		</div>
		<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
			<img class="center-block" src="http://67.media.tumblr.com/tumblr_m6mn0sUcuE1r8mh8no1_500.jpg" style="width:290px; height:290px">
			<p class="center-block">Descrição da Imagem</p>
			<hr>
		</div>
		<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
			<img class="center-block" src="http://67.media.tumblr.com/tumblr_m6mn0sUcuE1r8mh8no1_500.jpg" style="width:290px; height:290px">
			<p class="center-block">Descrição da Imagem</p>
			<hr>
		</div>
	</div>
		<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>