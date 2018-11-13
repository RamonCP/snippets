<?php

	require 'Dashboard.php';
	require 'Dashboard_model.php';
	require 'Conexao.php';

	$dash = new Dashboard();
	$conexao = new Conexao();

	$competencia = $_GET['competencia'];
	$competencia = explode('-', $competencia);
	$ano = $competencia[0];
	$mes = $competencia[1];

	//Calcula quantos dias tem um mês
	$dias_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

	$dash->data_inicio = $ano.'-'.$mes.'-01';
	$dash->data_fim = $ano.'-'.$mes.'-'.$dias_mes;

	$dash_model = new Dashboard_model($conexao, $dash);

	$dash->numero_vendas = $dash_model->getNumeroVendas();
	$dash->total_vendas = $dash_model->getTotalVendas();
	$dash->total_despesas = $dash_model->getTotalDespesas();
	$list = $dash_model->getTotalContato();
	$dash->reclamacoes = $list['reclamacoes'];
	$dash->elogios = $list['elogios'];
	$dash->sugestoes = $list['sugestoes'];
	// echo "<pre>";
	// print_r($dash);
	// echo "</pre>";

	echo json_encode($dash);
	// echo $ano.'/'.$mes.'/'.$dias_mes;

?>