<?php

class Dashboard {

	public $data_inicio;
	public $data_fim;
	public $numero_vendas;
	public $total_vendas;
	public $total_despesas;
	public $reclamacoes;
	public $elogios;
	public $sugestoes;

	public function __get($atributo){
		return $this->atributo;
	}

	public function __set($atributo, $valor){
		$this->atributo = $valor;
		return $this;
	}

}

?>