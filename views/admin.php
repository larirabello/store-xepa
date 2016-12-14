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



@import url(http://fonts.googleapis.com/css?family=Arimo);
  label[for="file-input"] {
    display: block;
    margin-bottom: 1em;
    font-size: 1em;
    color: #fff;
    opacity: .9;
    font-weight: bold;
  }

  input[type="file"] {
    cursor: pointer !Important;
  }
  input[type="file"]::-webkit-file-upload-button {
    background: #E62163;
    border: 0;
    padding: 1em 2em;
    cursor: pointer;
    color: #fff;
    border-radius: .2em;
  }
  input[type="file"]::-ms-browse {
    background: #E62163;
    border: 0;
    padding: 1em 2em;
    cursor: pointer;
    color: #fff;
    border-radius: .2em;
  }

  @media only screen and (min-width: 993px) {
  .container {
       width: 100%;
  }
}
  </style>
	<div class="nav-wrapper">
	<?php
	@include('partials/header.php');
	?>
	</div>
	<div class="container" style="margin-bottom: 100px">

		
		<a style="margin-right:-10px" class="waves-effect waves-light btn pull-right" href="#modalInserir" >Novo Produto</a>
		<div class="row">
		<h1>Produtos Cadastrados</h1>
    <div class="row pull-right">
      <input placeholder="Insira o ID" id="search" name="search" style="width: 40%" />
      <button class="mdl-button mdl-js-button mdl-js-ripple-effect" id="btnSearch">Consultar</button>
		</div>
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
					echo  "<td><a href='#modalEditar' data-id='".$dados['id']."' title='Editar item' class='btn-floating edit'><span style='margin-left:30%' class='glyphicon glyphicon-edit'></span></a></td>";
					echo  "<td><a  data-id='".$dados['id']."' title='Excluir item' class='delete btn-floating red'><span style='margin-left:30%' class='glyphicon glyphicon-remove'></span></a></td>";

					echo "</tr>";
				}	
				
				?>

		</tbody>
		</table>
 	    </div> 
	</div>
	<!-- Modal Structure NOVO PRODUTO -->
	  <div id="modalInserir" class="modal">
	    <div class="modal-content">
	      <h4>Novo produto</h4>
	      <form method="post" action="" id="upload" enctype="multipart/form-data">
          <div class="row">
            <div id="image_preview">
              <img class="pull-right" id="previewing" style="width:200px;height: 100px" src="noimage.png" />
            </div>
             <div class="input-field col-lg-6">
                <input id="name" type="text" name="name" class="validate">
                <label for="name">Nome</label>
              </div>
            </div>
  	        <div class="input-field col s3">
  	          <textarea id="description" type="text" name="description" class="validate"></textarea>
  	          <label for="description">Descrição</label>
  	        </div>
  	        <div class="input-field col s3">
  	          <input id="price" type="number" name="price" class="validate"/>
  	          <label for="price">Preço</label>
  	        </div>
  	        <div class="input-field col s3">
  	          <select id="type" name="type" class="validate">
        				<option value="" selected>Escolha uma opção</option>
        				<option value="1">Frutas</option>
        				<option value="2">Legumes</option>
        				<option value="3">Verduras</option>	
                <option value="4">Ervas</option>		
      			  </select>
  	          <label for="type">Categoria</label>
  	        </div>
  	        <div class="input-field col s6">
  	          <input  id="image" type="file" name="image" class="validate"/>
  	          <label for="image"></label>
  	        </div>	      
	       </form>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" id="a" class="register-confirm modal-action modal-close waves-effect waves-green btn-flat">Confirmar</a>
        <a href="#!" id="a" class=" modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
	    </div>
	  </div>

    <!-- Modal Structure CONSULTA PRODUTO -->
    <div id="modalConsulta" class="modal">
      <div class="modal-content">
        <h4>Consulta de produto</h4>
        <form method="post" action="" id="upload" enctype="multipart/form-data">
        <div class="row">
          <div id="image_preview">
            <img class="pull-right" id="previewing" style="width:200px;height: 100px" src="noimage.png" />
          </div>
           <div class="input-field col-lg-6">
              <input id="name" type="text" name="name" class="validate">
              <label for="name">Nome</label>
            </div>
          </div>
          <div class="input-field col s3">
            <textarea id="description" type="text" name="description" class="validate"></textarea>
            <label for="description">Descrição</label>
          </div>
          <div class="input-field col s3">
            <input id="price" type="number" name="price" class="validate">
            <label for="price">Preço</label>
          </div>
          <!--<div class="input-field col s3">
            <select id="type" name="type" class="validate">
              <option value="" disabled selected>Escolha uma opção</option>
              <option value="1">Frutas</option>
              <option value="2">Legumes</option>
              <option value="3">Verduras</option> 
              <option value="4">Ervas</option>    
            </select>
            <label for="type">Categoria</label>
          </div>
          <!--<div class="input-field col s6">
            <input  id="image" type="file" name="image" class="validate">
            <label for="image"></label>
          </div> -->       
         </form>
      </div>
      <div class="modal-footer">
        <a href="#!" id="a" class=" modal-action modal-close waves-effect waves-green btn-flat">Confirmar</a>
        <a href="#!" id="a" class=" modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
      </div>
    </div>

        <!-- Modal Structure EDITAR PRODUTO -->
    <div id="modalEditar" class="modal">
      <div class="modal-content">
        <h4>Editar produto</h4>
        <form method="post" action="" id="upload" enctype="multipart/form-data">
          <input type="hidden" name="action" value="edit"/>
          <input type="hidden" name="id" />
          <input type="hidden" name="file" />
          <div class="row">
            <div id="image_preview">
              <img class="pull-right" id="previewing" style="width:200px;height: 100px" src="noimage.png" />
            </div>
             <div class="input-field col-lg-6">
                <input id="name" type="text" name="name" class="validate">
                <label for="name">Nome</label>
              </div>
            </div>
            <div class="input-field col s3">
              <textarea id="description" type="text" name="description" class="validate"></textarea>
              <label for="description">Descrição</label>
            </div>
            <div class="input-field col s3">
              <input id="price" type="number" name="price" class="validate">
              <label for="price">Preço</label>
            </div>
            <div class="input-field col s3">
              <select id="type" name="type" class="validate">
                <option value="" selected>Escolha uma opção</option>
                <option value="Frutas">Frutas</option>
                <option value="Legumes">Legumes</option>
                <option value="Verduras">Verduras</option> 
                <option value="Ervas">Ervas</option>    
              </select>
              <label for="type">Categoria</label>
            </div>      
            <div class="input-field col s6">
              <input  id="image" type="file" name="image" class="validate"/>
              <label for="image"></label>
            </div>    
         </form>
      </div>
      <div class="modal-footer">
        <a href="#!" id="a" class="register-confirm modal-action modal-close waves-effect waves-green btn-flat">Confirmar</a>
        <a href="#!" id="a" class=" modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
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
	<script type="text/javascript" src="../assets/js/delete.js"></script>
  <script type="text/javascript" src="../assets/js/edit.js"></script>
  <script type="text/javascript" src="../assets/js/admin.js"></script>
	<script type="text/javascript">

		
	</script>

	</body>
</html>
