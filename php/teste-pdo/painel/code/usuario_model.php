<?php

	class User_model{

		public function __construct(Conexao $conexao){
			$this->conexao = $conexao->conectar();
		}

		public function login($dados){
			$query = 'select * from user where email = :email and senha = :pass LIMIT 1';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':email', $dados['user']);
			$stmt->bindValue(':pass', $dados['pass']);
			$stmt->execute();
			if($stmt->rowCount() == 1):		
				return $stmt->fetchAll(PDO::FETCH_OBJ);
			else:	
				return false;
			endif;	
		}

		public function get_single($id){
			$query = 'select * from user where id = :id LIMIT 1';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':id', $id);
			$stmt->execute();
			if($stmt->rowCount() == 1):
				return $stmt->fetchAll(PDO::FETCH_OBJ);
			else:
				return false;	
			endif;
		}


		


	}