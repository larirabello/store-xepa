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
    <form class="col s12" name="register" onsubmit="return validation()" novalidate>
      <div class="row">
      	<h1>Cadastro</h1>
        <div id="errors"></div>
      	<h2>Dados Pessoais</h2>
        <div class="input-field col s6">
          <!--<input placeholder="Insira seu nome aqui" id="first_name" type="text" name="name" class="validate">-->
          <input id="first_name" type="text" name="name" class="validate">
          <label for="first_name">Nome</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="surname" class="validate">
          <label for="last_name">Sobrenome</label>
        </div>
        <div class="row">
          <div class="input-field col s6">
      	  <label>Sexo </label><br><br>
          <p>
	      <input class="with-gap" name="sexo" type="radio" id="test1" />
	      <label for="test1">Feminino</label>
	    </p>
	    <p>
	      <input class="with-gap" name="sexo" type="radio" id="test2" />
	      <label for="test2">Masculino</label>
	    </p>
      </div>
        <div class="input-field col s6">
          <input disabled value="Desativado" id="disabled" type="text" class="validate">
          <label for="disabled">Cidade</label>
        </div>
        <div class="input-field col s6">
          <input disabled value="Desativado" id="disabled" type="text" class="validate">
          <label for="disabled">Estado</label>
        </div>
      </div>    
       
      <!--<div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div> -->
      <h2>Dados de Acesso</h2>
       <div class="row">
        <div class="input-field col s6">
          <!--<input id="email" type="email" name="email" class="validate"> -->
          <input id="email" type="email" name="email">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" name="password" class="validate">
          <label for="password">Senha</label>
        </div>
      </div>
      
      </div>




      <h2>Mais algumas informações...</h2>
      
     <div class="row">
     <h3 style="font-size:1.4em">Preferências</h3>
     	<div class="input-field s6">
	      	<p>
		      <input type="checkbox" name="preferences" id="opt1" />
		      <label for="opt1">Frutas</label>
		    </p>
		    <p>
		      <input type="checkbox" name="preferences" id="opt2" />
		      <label for="opt2">Legumes</label>
		    </p>
        <p>
          <input type="checkbox" name="preferences" id="opt3"/>
          <label for="opt3">Verduras</label>
        </p>
        <p>
          <input type="checkbox" name="preferences" id="opt4"/>
          <label for="opt4">Peixes e Aves</label>
        </p>	
        <p>
          <input type="checkbox" name="preferences" id="opt5"/>
          <label for="opt5">Carne vermelha</label>
        </p>	    
      	</div>
     </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="opinion" class="materialize-textarea"></textarea>
          <label for="textarea1">O que você gostaria de encontrar na feira mais próxima?</label>
        </div>
      </div>

  	<input type="submit" class="btn waves-effect waves-light" value="Enviar">
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

	<script type="text/javascript" src="../assets/js/validation.js"></script>
	</body>
</html>