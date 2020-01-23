<?php

class SMS{
	private $mensagem, $datahora;

	public function getMensagem()
	{
	    return $this->mensagem;
	}
	
	public function setMensagem($mensagem)
	{
	    return $this->mensagem = $mensagem;
	}

	public function getDatahora()
	{
	    return $this->datahora;
	}
	
	public function setDatahora($datahora)
	{
	    return $this->datahora = $datahora;
	}

	public function getRemetente()
	{
	    return $this->remetente;
	}
	
	public function setRemetente($remetente)
	{
	    return $this->remetente = $remetente;
	}

	public function getDestinatario()
	{
	    return $this->destinatario;
	}
	
	public function setDestinatario($destinatario)
	{
	    return $this->destinatario = $destinatario;
	}
}