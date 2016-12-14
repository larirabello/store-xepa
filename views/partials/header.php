<header style="z-index:200;margin-top: 20px;" class="text-center" style="padding:30px">
	<div class="row clear pull-right">
    	<?php 
		if ($_SESSION['status'] != 'ativo') {
			echo "<a href='../views/login.php' class='pull-right' style='margin-right: 50px'>Login</a>";
		} else {
			
			echo $welcome."<br>";
			//echo "<a style='margin-right:-10px' href='../views/admin.php'>Painel Admin</a><br>";
			echo "<a style='margin-right:-10px' href='../api/logout.php'>Logout</a>";
		}

	?>
	</div>
	<div class="row top" style="display:inline">
	
		
		<div class="col-lg-4 pull-left">
			<h1 id="slogan-left">Os alimentos orgânicos mais frescos...</h1>
		</div>
		<a href="../index.php" id="logo"><div></div></a>
		<div class="col-lg-4 pull-right">
			<h1 id="slogan-right">... Da horta para a sua mesa</h1>
		</div>

	</div>
	<nav class="main-nav">
		<a href="#" id="logo"><div></div></a>
		<ul class="nav nav-justified">
			<li><a href="../views/find.php">Encontre sua feira <span class="glyphicon glyphicon-tree-deciduous"></span></a></li>
			<li><a href="../views/list.php">Lista de Compras <span class="glyphicon glyphicon-apple"></a></li>
			<li><a href="../views/fidelity.php">Cartão Fidelidade <span class="glyphicon glyphicon-piggy-bank"></a></li>
		</ul>
	</nav>
</header>