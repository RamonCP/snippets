<?php 

class Retangulo{
	private $ladoMaior;
	private $ladoMenor;

	public function setLadoMaior($ladoMaior){
		$this->ladoMaior =	$ladoMaior;
	}

	public function setLadoMenor($ladoMenor){
		$this->ladoMenor = $ladoMenor;
	}

	public function calculaArea(){
		$resultado = $this->ladoMaior * $this->ladoMenor;
		return $resultado;
	}
}

?>