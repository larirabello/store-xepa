<?php 

	require_once('../connection/conn.php');
	$db = Db::getInstance();

	if(isset($_FILES["image"]["type"])) {
		$validextensions = array("JPEG", "´JPG", "PNG");
		$temporary = explode(".", $_FILES["image"]["name"]);
		$file_extension = end($temporary);

		echo $_FILES["image"]["type"];
		echo $file_extension;

		echo (($_FILES["image"]["type"] == "image/png") || ($_FILES["image"]["type"] == "image/jpg") || ($_FILES["image"]["type"] == "image/jpeg"));
		echo ($_FILES["image"]["size"] < 5000000);
		echo in_array($file_extension, $validextensions);


		if ((($_FILES["image"]["type"] == "image/png") || ($_FILES["image"]["type"] == "image/jpg") || ($_FILES["image"]["type"] == "image/jpeg")
		) && ($_FILES["image"]["size"] < 5000000)//Approx. 100kb files can be uploaded.
		) {
			if ($_FILES["image"]["error"] > 0) {
				echo "Return Code: " . $_FILES["image"]["error"] . "<br/><br/>";
			} else {
				if (file_exists("../assets/images/" . $_FILES["image"]["name"])) {
					echo $_FILES["image"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
				} else {
					$sourcePath = $_FILES['image']['tmp_name']; // Storing source path of the file in a variable
					$targetPath = "../assets/images/".$_FILES['image']['name']; // Target path where file is to be stored
					move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
					echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
					echo "<br/><b>File Name:</b> " . $_FILES["image"]["name"] . "<br>";
					echo "<b>Type:</b> " . $_FILES["image"]["type"] . "<br>";
					echo "<b>Size:</b> " . ($_FILES["image"]["size"] / 1024) . " kB<br>";
					echo "<b>Temp file:</b> " . $_FILES["image"]["tmp_name"] . "<br>";
				}
			}
			$file = $_FILES["image"]["name"];
		} else {
			echo "<span id='invalid'>***Tamanho ou Tipo de Arquivo inválido***<span>";
			$file = $_POST["file"];
		}

	}

	// recuperando os dados método POST[]
	$name =  $_POST["name"];
	$description =  $_POST["description"];
	$price =  $_POST["price"];
	$type = $_POST["type"];

	if (isset($_POST["action"]) && $_POST["action"] == "edit") {
		$id = $_POST["id"];

		$sqlstring = "update products set name='$name', description='$description', price='$price', file='$file', type='$type' where id=$id";

	} else {

		// montando e executando a string
		$sqlstring = "insert into products (name, description, price, file, type)
		values ('$name',
		'$description',
		$price,
		'$file',
		'$type')";
	}
	


	$info = $db->sql_query($sqlstring);

	if (!$info) {
		die('Erro! O sistema apresentou problemas ao cadastrar.');
	} else {
		echo "Exclusão realizado com Sucesso!";
	}



?>