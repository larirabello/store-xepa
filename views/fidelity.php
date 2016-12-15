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
    <div class="row">
      <div class=""></div>
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
<script type="text/javascript" src="../assets/js/galleryModal.js"></script>
</body>
</html>