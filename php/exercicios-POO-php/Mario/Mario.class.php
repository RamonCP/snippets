<?php 
include_once("Personagem.class.php");
class Mario extends Personagem{
	public function coletaMoeda(){
		++$this->pontos;
		if($this->pontos == 100){
			++$this->vida;
			$this->pontos = 0;
		}
	}
}