<?php
	
	require_once('../service/auth.php');

	/*$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'views/admin.php';*/

	$user = $_POST['user']; // o que vem do form
	$pass = sha1($_POST['pass']);

	$authService = new AuthService;

	$result = $authService->login($user, $pass);



	if ($result) {

		session_start('login');
		$_SESSION['id'] = $result['id'];
		$_SESSION['nome'] = $result['nome'];
		$_SESSION['status'] = 'ativo';
		$_SESSION['tipo'] = $result['tipo'];	
		
		header("Location:../views/admin.php");

	} else {

		header("Location:../views/login.php");
	
	}