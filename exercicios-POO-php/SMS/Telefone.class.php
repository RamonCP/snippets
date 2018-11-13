<?php

class Telefone{
	private $numero;

	public function getNumero()
	{
	    return $this->numero;
	}
	
	public function setNumero($numero)
	{
	    return $this->numero = $numero;
	}

	public function getProprietario()
	{
	    return $this->proprietario;
	}
	
	public function setProprietario($proprietario)
	{
	    return $this->proprietario = $proprietario;
	}

	public function getOperadora()
	{
	    return $this->operadora;
	}
	
	public function setOperadora($operadora)
	{
	    return $this->operadora = $operadora;
	}
}