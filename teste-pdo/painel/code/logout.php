<?php
session_start();
require 'conexao.php';
require 'usuario_model.php';

$id = $_GET['id'];

$conexao = new Conexao();
$user_model = new User_model($conexao);
$result = $user_model->get_single($_SESSION['id_user']);

if(md5($result[0]->id) == $id):
	session_destroy();
	header("Location: http://localhost/teste-pdo/painel/login.php");
else:
	echo "Não é igual";
endif;		
