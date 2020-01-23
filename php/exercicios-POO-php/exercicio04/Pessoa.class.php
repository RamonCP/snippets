<?php 

class Pessoa{
	private $sexo, $idade;

	function getIdade(){
		return $this->idade;
	}

	function setIdade($idade){
		$this->idade = $idade;
	}

	function getSexo(){
		return $this->sexo;
	}

	function setSexo($sexo){
		$this->sexo = $sexo;
	}

	function oQueEh(){
		if($this->sexo == "Feminino"){
			echo "Você é uma menina";
		}else{
			echo "Você é um menino";
		}
	}
}