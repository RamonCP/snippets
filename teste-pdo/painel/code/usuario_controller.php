<?php
	session_start();
	require "usuario_model.php";
	require "conexao.php";

	$dados['user'] = $_POST['email'];
	$dados['pass'] = $_POST['pass'];
	
	$conexao = new Conexao();
	$user_model = new User_model($conexao);
	$login = $user_model->login($dados);

	if($login):
		$_SESSION['logado'] = true;
		$_SESSION['id_user'] = $login[0]->id;
		$_SESSION['nome'] = $login[0]->nome;
		$_SESSION['email'] = $login[0]->email;
		$return['status'] = 1;
		echo json_encode(1);	
	else:
		echo json_encode(0);
	endif;		