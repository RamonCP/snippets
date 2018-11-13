<?php 

class Televisao{
	private $status, $canal, $volume;

	function __construct(){
		$this->status = false;
		$this->canal = 3;
		$this->volume = 10;
	}

	public function ligaDesliga(){
		$this->status = !$this->status;
	}
	public function aumentaCanal(){
		$this->canal ++;
	}
	public function diminuiCanal(){
		$this->canal --;
	}
	public function aumentaVolume(){
		$this->volume ++;
	}
	public function diminuiVolume(){
		$this->volume --;
	}
	public function mostraCanal(){
		return $this->canal;
	}
	public function mostraVolume(){
		return $this->volume;
	}
}

?>