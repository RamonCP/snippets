<?php

class Personagem{
	protected $vida,$pontos;

	function __construct(){
		$this->vida = 3;
		$this->pontos = 0;
	}

	public function perdeVida(){
		--$this->vida;
	}	

	public function mostraVida(){
		return $this->vida;
	} 

	public function comeCogumelo(){
		++$this->vida;
	}
}