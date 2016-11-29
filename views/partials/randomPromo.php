<?php

	require_once('connection/conn.php');
	$mysql = new conexao;
	$info = $mysql->sql_query("select * from products order by rand() limit 1");
	$row = $info->fetch_array(MYSQLI_ASSOC);
	
	if ($row) {

		$dados = array_map('utf8_encode', $row);

		echo "<div class='col-lg-6 col-md-6'>";
		echo "<p class='text-justify'>".$dados['description']."</p>";
		echo "<abbr>R$</abbr><h3>".$dados['price']."</h3>";
		echo "<em>o quilo</em>
			</div>";	

		echo "<div class='col-lg-6 col-md-6'>";
		echo "<a id='promo' href='#'><img src='assets/images/".$dados['file']."'/></a>";
		echo "</div>";	


	}

?>