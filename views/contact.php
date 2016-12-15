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
  <div class="container" style="margin-bottom: 100px">
	<article>
    <div  style="margin-top:260px" class="row">
    <form  name="register" onsubmit="return validation()" novalidate>
      <div class="row">
        <h1>Cadastrar Novo Produto</h1>
      </div>
      <div class="row">
        <div id="errors"></div>
        <h2>Dados Pessoais</h2>
        <div class="input-field col s6">
          <!--<input placeholder="Insira seu nome aqui" id="first_name" type="text" name="name" class="validate">-->
          <input id="first_name" type="text" name="name" class="validate">
          <label for="first_name">Nome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="description" type="text" name="email" class="validate">
          <label for="description">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="price" type="text" name="user" class="validate">
          <label for="price">Usuário (se cadastrado)</label>
        </div>
      </div>    
     </div>    
    <div class="row">
      <div class="input-field col s12">
        <textarea id="textarea1" name="opinion" class="materialize-textarea"></textarea>
        <label for="textarea1">Faça sua sugestão/reclamação</label>
      </div>
    </div>
    <input type="reset" class="btn waves-effect waves-light" value="Cancelar">
    <input type="submit" class="btn waves-effect waves-light" value="Enviar">
    </form>
    </div>
	</article>
  </div>
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