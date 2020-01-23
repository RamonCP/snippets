<?php 

class Sequencia{
	private $inicio, $fim;

	function setInicio($inicio){
		$this->inicio = $inicio;
	}
	function setFim($fim){
		$this->fim = $fim;
	}

	function exibirTodosNumeros(){
		for ($i=$this->inicio; $i <= $thi s->fim; $i++) { 
			echo $i."<br>";
		}
	}
	function exibirPares(){
		for($i = $this->inicio; $i<=$this->fim; $i++){
			if($i % 2 == 0){
				echo $i."<br>";
			}
		}
	}
	function exibirImpares(){
		for($i = $this->inicio; $i<=$this->fim; $i++){
			if($i % 2 ==1){
				echo $i."<br>";
			}
		}
	}	
}