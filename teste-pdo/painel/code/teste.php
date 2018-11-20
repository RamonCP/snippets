<?php
	require "conexao.php";
	require "car_model.php";

	$conexao = new Conexao();
	$carro_model = new CarroModel($conexao);
	echo "<pre>";
	print_r($carro_model->get_assoc());
	echo "</pre>";
