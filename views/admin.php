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
	<div class="container">
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
					echo  "<td><a style='' title='Editar item' class='btn-floating'><span style='margin-left:30%' class='glyphicon glyphicon-edit'></span></a></td>";
					echo  "<td><a style='' title='Excluir item' class='btn-floating red'><span style='margin-left:30%' class='glyphicon glyphicon-remove'></span></a></td>";

					echo "</tr>";



					/*if(!empty($dados['file'])) {
					echo "<a><img style='width:320px;height:320px' class='center-block' src='../assets/images/".$dados['file']."'></img></a>";
					}else{
					echo "<img class='img-responsive' src='../assets/images/no_image.png' align='absmiddle'></img>";
					}
					echo "<p class='center-block name'>";
					echo utf8_encode($dados['name']);
					$teste = $dados["name"];
					echo "</p>";
					//echo "<a class='color-icon' href='views/details.php'><button type='button' class='btn btn-warning btn-circle pull-right'  data-toggle='modal' data-target='#myModal'>+</button></a>";
					echo "<a href='#modal1'  data-id='".$dados['id']."'><button type='button' class='btn btn-warning btn-circle pull-right' data-target='.bs-example-modal-lg'>+</button></a>";
					echo "<br><hr>";


					//$i++;
    				//if ($i%3 == 0) echo '</div><div class="row images">';
    				for ($i=0; $i%3 == 0; $i++) {
    					echo "</div>";
    				}

    				*/
				}	
				
				?>

		</tbody>
		</table>
 	    </div> 
	</div>
  <?php
  @include('../views/partials/footer.php');
  ?>
	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>

	<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>

	<script type="text/javascript" src="../assets/js/navbar.js"></script>
	</body>
</html>
