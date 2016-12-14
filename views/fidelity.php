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

  img.no {
    margin: 0 auto;
  }

  </style>
  <?php

  $welcome = "";
  $user = "";

  session_start("login");

  if ($_SESSION['status'] !== "ativo")
     {
    session_destroy();
    header("location:index.php");
    }

    $welcome = "<br>Olá, ".$_SESSION['nome'];
  ?>
  <div class="nav-wrapper">
  <?php
  @include('partials/header.php');
  ?>
  </div>
  <div class="container-fluid">
  <div class="row text-center"  style="padding-top:250px;">
      <div class="col-lg-12 col-md-12">
        <h1 class="prod-type">Produtos</h1>
        <p class="prod-desc">
        X produtos na lista</p>
      </div>
    </div> 
    <div class="row images">
      <div>
        <?php
          @include('partials/gallery.php');
        ?>
      </div>
    </div>
  </div>
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <div class="row" style="text-align: center;padding-bottom: 5px">
        <a href='#'><img style='width:300px' class="no" src=''></img></a>
      </div>
      <div class="row">
        <p>A bunch of text</p>
        <br>
        <p class="price"></p>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">FECHAR</a>
    </div>
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