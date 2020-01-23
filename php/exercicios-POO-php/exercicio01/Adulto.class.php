<?php 

class Adulto{
	private $peso;

	public function engordar($quilos){
		$this->peso += $quilos;
		echo "Engordei ".$this->peso." quilos.";
	}

	public function emagrece($quilos){
		$this->peso -= $quilos;
		echo "Engordei ".$this->peso." quilos.";
	}
}

?>