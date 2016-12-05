<?php
	require_once('../connection/conn.php');
	$db = Db::getInstance();

	$codigo = $_POST['id'];

	$info = $db->sql_query("delete from products where id = $codigo");

	if (!$info) {
		die('Erro! O sistema apresentou problemas ao deletar.');
	} else {
		echo "Exclusão realizado com Sucesso!";
	}


?>
