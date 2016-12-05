<?php

			 	require_once('../connection/conn.php');
				$db = Db::getInstance();
				$info = $db->sql_query("select * from products");


				//$i=0;
				while($dados=mysqli_fetch_array($info)) {

					echo "<div class='col-md-4 col-lg-4 col-sm-6 col-xs-12'>";
					if(!empty($dados['file'])) {
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

    				//session_start();

					//$_SESSION['total'] = count($dados);


    				$total = count($dados);
				
				}

					"total ".$total;	


		

					
	?>