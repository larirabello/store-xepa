<!doctype html>
<html class="no-js" lang="pt-BR">
<head>
    <?php 
      @include('partials/includes.php');
    ?>
</head>
<body class="container-fluid main">
<style type="text/css">
/**/

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


  /* background */

  .hero-image {
    height: 100vh;
    max-height: 1000px;
    background: url('http://cdn.shopify.com/s/files/1/1148/3974/t/8/assets/img_homepage_slide_2.jpg?3289570631051682394') 50% 50% no-repeat;
    background-size: cover;
    position: relative;
    z-index: -1;
}

.hero-image__title {
    margin-bottom: 200px;
    font-family: "Raleway",Tahoma,Geneva,sans-serif;
    font-size: 60px;
    font-weight: 700;
    line-height: 72px;
    z-index: 1000;
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