<?php 
include_once("Personagem.class.php");
class Yoshi extends Personagem{
	public function comeFruta(){
		++$this->pontos;
		if($this->pontos == 100){
			++$this->vida;
			$this->pontos = 0;			
		}
	}
}