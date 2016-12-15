<!doctype html>
<html class="no-js" lang="pt-BR">
<head>
    <?php 
      @include('partials/includes.php');
    ?>
</head>
<body class="container-fluid main">
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