<?php
	
	require 'conexao.php';
	require 'car_model.php';

	$dados_car['id_carro'] = $_POST['id'];
	$dados_car['nome'] = $_POST['nome'];
	$dados_car['marca'] = $_POST['marca'];
	$dados_car['modelo'] = $_POST['modelo'];
	$dados_car['image_car'] = ($_FILES['image_car']['name'] != '') ? $_FILES['image_car']['name'] : $_POST['image_current'];

	$dados_car['image_current'] = $_POST['image_current'];

	$conexao = new Conexao();
	$user_model = new CarroModel($conexao);
	$result = $user_model->update($dados_car);
	if($result):
		header("Location: http://localhost/teste-pdo/painel/carros.php");
	else:
		var_dump($result);
	endif;	
