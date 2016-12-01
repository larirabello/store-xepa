<!doctype html>
<html class="no-js" lang="pt-BR">
<head>
    <?php 
      @include('partials/includes.php');
    ?>
</head>
<body class="container-fluid main">
	<style type="text/css">
		
		.mdl-layout {
		  align-items: center;
		  justify-content: center;
		}
		.mdl-layout__content {
			padding: 24px;
			flex: none;
		}

		.mdl-card {
			width: 500px;
		}

		body {
			background-color: #F5F5F5;
		}

		.mdl-color--primary {
		    background-color: rgba(238, 110, 116, 0.3)!important;
		}
		
	</style>
	<div class="mdl-layout mdl-js-layout mdl-color--grey-100">
		<main class="mdl-layout__content">
			<div class="mdl-card mdl-shadow--6dp">
				<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
					<a class="center-block" href=""><img src="../assets/images/logo2.png"/></a>
				</div>
		  	<div class="mdl-card__supporting-text" style="padding-left: 23%">
		  		<h1>Login</h1>
					<form action="#">
						<div class="mdl-textfield mdl-js-textfield">
							<input id="user" type="text" name="user" class="validate">
	          				<label for="first_name">Usuário</label>
	          				<input id="pass" type="password" name="pass" class="validate">
          					<label for="pass">Senha</label>
          					</div>
						<div class="mdl-textfield mdl-js-textfield">
							<!--<input class="mdl-textfield__input" type="text" id="username" />
							<label class="mdl-textfield__label" for="username">Usuário</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="password" id="userpass" />
							<label class="mdl-textfield__label" for="userpass">Senha</label>-->
						</div>
					</form>
				</div>
				<div class="mdl-card__actions mdl-card--border">
					<button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Entrar</button>
				</div>
			</div>
		</main>
	</div>
</body>
</html>