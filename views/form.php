<!doctype html>
<html class="no-js" lang="pt-BR">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Projeto Desenvolvimento para Servidores I</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../node_modules/materialize-css/dist/css/materialize.css"/>
    <link rel="stylesheet" type="text/css" href="../node_modules/materialize-css/css/ghpages-materialize.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
    <!-- Latest compiled and minified CSS
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			<header class="text-center" style="padding:40px">
				<h1>Projeto Desenvolvimento para Servidores I</h1>
			</header>
		</div>
	</div>
	<div class="container">
	<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
      	  <label>Selecione uma cor: </label>
          <p>
	      <input name="group1" type="radio" id="test1" />
	      <label for="test1">Red</label>
	    </p>
	    <p>
	      <input name="group1" type="radio" id="test2" />
	      <label for="test2">Yellow</label>
	    </p>
	    <p>
	      <input class="with-gap" name="group1" type="radio" id="test3"  />
	      <label for="test3">Green</label>
	    </p>
	      <p>
	        <input name="group1" type="radio" id="test4" disabled="disabled" />
	        <label for="test4">Brown</label>
	    </p>
      </div>
      <div class="input-field s6">
      	<p>
	      <input type="checkbox" id="test5" />
	      <label for="test5">Red</label>
	    </p>
	    <p>
	      <input type="checkbox" id="test6" checked="checked" />
	      <label for="test6">Yellow</label>
	    </p>
	    <p>
	      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
	      <label for="filled-in-box">Filled in</label>
	    </p>
	    <p>
	      <input type="checkbox" id="indeterminate-checkbox" />
	      <label for="indeterminate-checkbox">Indeterminate Style</label>
	    </p>
      </div>
     </div>
    </form>
  </div>

		 
	</div>
	<footer>
		<p class="text-center">Larissa Rabello - Outubro/2016</p>
		<hr>
		<p class="text-center">Desenvolvimento para Servidores I</p>
	</footer>
	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>

	<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>
	</body>
</html>