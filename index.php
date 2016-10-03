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
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			<header class="text-center" style="padding:40px">
				<h1>Projeto Desenvolvimento para Servidores II</h1>
			</header>
		</div>
		<button type="button" class="btn btn-default"><a href="views/form.php">Formulário</a></button>
	</div>
	<div class="row images">
	<?php

			 	require_once('connection/conn.php');
				$mysql = new conexao;
				$info = $mysql->sql_query("select * from products");

				//$i=0;
				while($dados=mysqli_fetch_array($info)) {

					echo "<div class='col-md-4 col-lg-4 col-sm-6 col-xs-12'>";
					if(!empty($dados['file'])){
					echo "<a href='views/details.php'><img class='center-block' src='assets/images/".$dados['file']."'></img></a>";
					}else{
					echo "<img class='img-responsive' src='assets/images/no_image.png' align='absmiddle'></img>";
					}
					echo "<p class='center-block name'>";
					echo utf8_encode($dados['name']);
					$teste = $dados["name"];
					echo "</p>";
					//echo "<a class='color-icon' href='views/details.php'><button type='button' class='btn btn-warning btn-circle pull-right'  data-toggle='modal' data-target='#myModal'>+</button></a>";
					echo "<button type='button' class='btn btn-warning btn-circle pull-right'  data-toggle='modal' data-target='.bs-example-modal-lg'>+</button>";
					echo "<br><hr>";


					//$i++;
    				//if ($i%3 == 0) echo '</div><div class="row images">';
    				for ($i=0; $i%3 == 0; $i++) {
    					echo "</div>";
    				}
				}

	?>
	</div>
	<!-- MODAL -->
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	 
	    </div>
	  </div>
	</div>
	<footer>
		<p class="text-center">Larissa Rabello - Outubro/2016</p>
		<hr>
		<p class="text-center">Desenvolvimento para Servidores II</p>
	</footer>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>