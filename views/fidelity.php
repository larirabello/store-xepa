<!doctype html>
<html class="no-js" lang="pt-BR">
<head>
    <?php 
      @include('partials/includes.php');
    ?>
</head>
<body class="container-fluid main">
<style type="text/css">


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
    <div class="hero-image__content text-center" >
      <h3 class="hero-image__title" style="padding-top: 100px">Vantagens</h3>
    
      <p class="hero-image__desc" style="padding-left: 80px;font-size: 3em">Vantagens</p>
      <p class="hero-image__desc" style="padding-left: 80px; padding-top: 30px"> Acumule pontos e troque por descontos e brindes incríveis com seus feirantes preferidos!</p> 
   </div>
  </section>
  <div class="container-fluid">
  <article>
    <form  class="" name="register" onsubmit="return validation()" novalidate style="margin-left: 360px">
      <div class="row">
        <h1>Cadastrar Código</h1>
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
    <div class="row" style="margin-left: 360px">
      <div class="input-field col s6">
        <textarea id="textarea1" name="opinion" class="materialize-textarea"></textarea>
        <label for="textarea1">Código</label>
      </div>
    </div>
    <input type="submit" class="btn waves-effect waves-light" value="Enviar" style="margin-left: 360px">
    </form>
  </article>
  <hr style="margin-top: 20px; margin-bottom: 70px">
  <section>
    <div class="img-holder bg-cover row">
      <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
        <img src="//cdn.shopify.com/s/files/1/1148/3974/articles/feedback_01_grande.jpg?v=1473936155" alt="Imagem ilustrativa" style="width:300px;margin-left: 400px; padding-bottom: 100px">   
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3 style="font-weight: bold">Clientela satisfeita</h3>
        <p style="padding-left: 0px; width: 300px">In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam id dolor.</p>
      </div>
    </div>
        
  </section>
  </div>
  <?php
  @include('../views/partials/footer.php');
  ?>
<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

<script type="text/javascript" src="../assets/js/navbar.js"></script>
<script type="text/javascript" src="../assets/js/galleryModal.js"></script>
</body>
</html>