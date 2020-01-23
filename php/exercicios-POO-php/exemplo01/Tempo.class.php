<?php 

class Tempo{
	private $inicio;

	public function __construct(){
		$this->inicio = microtime();
		echo "O objeto foi instanciado em ".date('H:i:s')."<br>";
	}

	public function __destruct(){
		$diferenca = microtime() - $this->inicio;
		echo "O objeto foi finalizado em ".date('H:i:s')."<br>";
			echo "Tempo de processamento ".$diferenca."<br>";
	}
}

?>