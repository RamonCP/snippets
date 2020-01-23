<?php
include_once("Personagem.class.php");
class Jogo{
	private $nome,$personagem;

	function __construct(){
		$this->nome = "Super Mário";
		$this->personagem = new Mario();	
	}

	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome($nome)
	{
	    return $this->nome = $nome;
	}
}