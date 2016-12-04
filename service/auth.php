<?php

require_once('../connection/conn.php');

class AuthService {

	function login($user, $pass) {

		$db = Db::getInstance(); //chamando o singleton

		$info = $db->sql_query("select * from users where user = '$user' and pass='$pass'");	

		if (!$info) { die('Query Inválida: ' . mysqli_error()); }

    	$registro = mysqli_num_rows($info);	

    	$array = [];

    	if($registro!=1) {

    		$array['status'] = "erro";

		}else {
			$array = mysqli_fetch_array($info);
			$array['status'] = "sucesso";

		}

		return $array;	
	}
}