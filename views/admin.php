<!doctype html>
<html class="no-js" lang="pt-BR">
<head>
    <?php 
      @include('partials/includes.php');
    ?>
</head>
<body class="container-fluid">
<?php
session_start("login");

if ($_SESSION['status'] !== "ativo")
   {
	session_destroy();
	header("location:index.php");
	}
	echo "Bem vindo ao sistema";	
	echo "<br>Olá,".$_SESSION['nome'];
?>
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


  </style>
	<div class="nav-wrapper">
	<?php
	@include('partials/header.php');
	?>
	</div>
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
      <a href="../api/logout.php">logout</a>
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
  <?php
  @include('../views/partials/footer.php');
  ?>
	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>

	<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>

	<script type="text/javascript" src="../assets/js/validation.js"></script>
	</body>
</html>
