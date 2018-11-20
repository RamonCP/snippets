<?php

class Carro{

	private $id_carro;
	private $nome;
	private $marca;
	private $modelo;
	private $image_car;

	public function __get($atributo){
		return $this->atributo;
	} 

	public function __set($atributo, $valor){
		$this->atributo = $valor;
	}

}


?>