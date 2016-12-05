<!doctype html>
<html class="no-js" lang="pt-BR">
<head>
    <?php 
      @include('partials/includes.php');
    ?>
</head>
<body class="container-fluid">
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
  <style type="text/css">

  	body {
  		margin-top: 260px!important;
  	}
    
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

  a:hover, a:focus {
    color: #B0A290;
}

  </style>
	<div class="nav-wrapper">
	<?php
	@include('partials/header.php');
	?>
	</div>
	<div class="container" style="margin-bottom: 100px">
		<!-- <a style="margin-right:-10px" class="waves-effect waves-light btn pull-right" href="../api/logout.php">Logout</a> -->
		<a style="margin-right:-10px" class="waves-effect waves-light btn pull-right" href="form.php">Novo Produto</a>
		<div class="row">
		<h1>Produtos Cadastrados</h1>
		<table class="bordered highlight">
        <thead>
          <tr>
          	  <th data-field="id">Cód.</th>
              <th data-field="name">Nome</th>
              <th data-field="description">Descrição</th>
              <th data-field="price">Preço</th>
              <th data-field="type">Categoria</th>
              <th data-field="file">Imagem</th>
              <th data-field="edit">Editar</th>
              <th data-field="delete">Excluir</th>
          </tr>
        </thead>
        <tbody>	
		<?php

			 	require_once('../connection/conn.php');
				$db = Db::getInstance();
				$info = $db->sql_query("select * from products");

				
				while($dados=mysqli_fetch_array($info)) {

					echo "<tr>";

					echo "<td>".$dados['id']."</td>";
					echo "<td>".utf8_encode($dados['name'])."</td>";
					echo "<td>".utf8_encode($dados['description'])."</td>";
					echo "<td>".utf8_encode($dados['price'])."</td>";
					echo "<td>".utf8_encode($dados['type'])."</td>";
					echo "<td><img style='width:60px;height:60px'  src='../assets/images/".$dados['file']."'></img></td>";
					//echo "<td>".$dados['file']."</td>";
					echo  "<td><a data-target='.bs-example-modal-lg' title='Editar item' class='btn-floating'><span style='margin-left:30%' class='glyphicon glyphicon-edit'></span></a></td>";
					echo  "<td><a  data-id='".$dados['id']."' title='Excluir item' class='delete btn-floating red'><span style='margin-left:30%' class='glyphicon glyphicon-remove'></span></a></td>";

					echo "</tr>";
				}	
				
				?>

		</tbody>
		</table>
 	    </div> 
	</div>
	<!-- Modal Structure -->
	  <div id="modal1" class="modal">
	    <div class="modal-content">
	      <h4>Modal Header</h4>
	      <a href='#'><img style='padding:0;width:300px' class='center-block' src=''></img></a>
	      <p>A bunch of text</p>
	      <br>
	      <p class="price"></p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
	    </div>
	  </div>
	<?php
	  @include('../views/partials/footer.php');
	?>
	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>

	<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>

	<script type="text/javascript" src="../assets/js/navbar.js"></script>
	<script type="text/javascript" src="../assets/js/delete.js"></script>
	<script type="text/javascript">

	//INSERT INTO `products`(`name`, `description`, `price`, `file`, `type`) VALUES ('teste', 'teste teste','100','yshhdhuds','teste');
		

	</script>
	</body>
</html>
