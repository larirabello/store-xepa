<?php

	$id = $_REQUEST["id"];

	require_once('../connection/conn.php');
	$mysql = new conexao;

	$info = $mysql->sql_query("select * from products where id=".$id);

	$row = $info->fetch_array(MYSQLI_ASSOC);

	if ($row) {

		$encoded_rows = array_map('utf8_encode', $row);
		echo json_encode($encoded_rows,  JSON_PRETTY_PRINT);

	} else {
		echo "{}";
	}
	
	

?>