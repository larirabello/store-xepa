<?php

	require_once('connection/conn.php');
	$db = Db::getInstance();
	$info = $db->sql_query("select * from products order by rand() limit 2");

	while($dados=mysqli_fetch_array($info)) {

		echo "<div class='col-lg-6 col-md-6'>";
		if(!empty($dados['file'])) {
			echo "<a href='#'><img class='random-prod' style='height:550px' src='assets/images/".$dados['file']."'></img></a>";
			}else{
			echo "<img class='img-responsive' src='assets/images/no_image.png' align='absmiddle'></img>";
			}
		echo "</div>";	
		}


?>