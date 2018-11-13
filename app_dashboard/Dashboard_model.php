<?php
	
class Dashboard_model {

	private $conexao;
	private $dashboard;

	public function __construct(Conexao $conexao, Dashboard $dashboard){
		$this->conexao = $conexao->conectar();
		$this->dashboard = $dashboard;
	}

	public function getNumeroVendas(){
		$query = '
			select 
				count(*) as numero_vendas
			from
				tb_vendas
			where 
				data_venda between :data_inicio and :data_fim ';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':data_inicio', $this->dashboard->data_inicio);
		$stmt->bindValue(':data_fim', $this->dashboard->data_fim);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
	}

	public function getTotalVendas(){
		$query = '
			select 
				sum(total) as total_vendas
			from
				tb_vendas
			where 
				data_venda between :data_inicio and :data_fim ';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':data_inicio', $this->dashboard->data_inicio);		
		$stmt->bindValue(':data_fim', $this->dashboard->data_fim);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;		
	}

	public function getTotalDespesas(){
		$query = '
			select
				count(total) as total_despesas
			from
				tb_despesas	
			where 
				data_despesa between :data_inicio and :data_fim';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':data_inicio', $this->dashboard->data_inicio);		
		$stmt->bindValue(':data_fim', $this->dashboard->data_fim);	
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_OBJ)->total_despesas;	
	}

	public function getTotalContato(){
		$query = '

			select 
				sum(tipo_contato=1) as reclamacoes, 
				sum(tipo_contato=2) as elogios, 
				sum(tipo_contato=3) as sugestoes 
			from 
				tb_contatos';

		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);		
	}

}


?>