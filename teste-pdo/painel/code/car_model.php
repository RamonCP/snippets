<?php

class CarroModel{

	private $conexao;
	// private $car;

	public function __construct(Conexao $conexao){
		$this->conexao = $conexao->conectar();
		// $this->carro = $carro;
	}

	public function add($dados){
		$query = 'insert into carro (nome, marca, modelo, image_car, image_current) values (:nome, :marca, :modelo, :image, :image_current)';
		// $query = 'select * from carro';
		$stmt = $this->conexao->prepare($query);
		// $stmt->bindValue(':nome', $this->carro->__get('nome'));
		// $stmt->bindValue(':marca', $this->carro->__get('marca'));
		// $stmt->bindValue(':modelo', $this->carro->__get('modelo'));
		// $stmt->bindValue(':image', $this->carro->__get('image_car'));

		$stmt->bindValue(':nome', $dados['nome']);
		$stmt->bindValue(':marca',  $dados['marca']);
		$stmt->bindValue(':modelo',  $dados['modelo']);
		$stmt->bindValue(':image',  $dados['image']);
		$stmt->bindValue(':image_current',  $dados['image']);

		// $stmt->execute(array(
		// 	':nome' => $this->carro->__get('nome'),
		// 	':marca' => $this->carro->__get('marca'),
		// 	':modelo' => $this->carro->__get('modelo'),
		// 	':image' => $this->carro->__get('image_car')
		// ));

		if($stmt->execute()):
			$last_id = $this->conexao->lastInsertId();

			$diretorio = '../images_car/'.$last_id.' - '.$_FILES['image_car']['name'];
			//Cria pasta de acordo com diretorio
			// mkdir($diretorio);
			move_uploaded_file($_FILES['image_car']['tmp_name'], $diretorio);
		endif;	

	}

	public function get(){
		$query =  'select * from carro';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function get_assoc(){
		$query = 'select * from carro';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		for($cont = 0; $cont < $stmt->rowCount(); $cont++):
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		endfor;	
	}

	public function get_single($id){
		$query =  'select id_carro,image_car from carro where id_carro = :id LIMIT 1';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $id);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update($dados){
		$query = 'update carro set 
				 nome = :nome,
				 marca = :marca,
				 modelo = :modelo,
				 image_car = :image_car,
				 image_current = :image_current
				 where id_carro = :id_carro LIMIT 1';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id_carro', $dados['id_carro']);		 
		$stmt->bindValue(':nome', $dados['nome']);		 
		$stmt->bindValue(':marca', $dados['marca']);		 
		$stmt->bindValue(':modelo', $dados['modelo']);		 

		if($dados['image_current'] != $dados['image_car']):
			$dir ='../images_car/'.$dados['id_carro'].' - '.$dados['image_current'];
			if(file_exists($dir)):
				unlink($dir);
			else:
				echo "não existe";
			endif;				

			$dir_current = '../images_car/'.$dados['id_carro']. ' - '.$_FILES['image_car']['name'];
			move_uploaded_file($_FILES['image_car']['tmp_name'], $dir_current);
			$stmt->bindValue(':image_car', $dados['image_car']);
			$stmt->bindValue(':image_current', $dados['image_car']);
		else:
			$stmt->bindValue(':image_car', $dados['image_current']);
			$stmt->bindValue(':image_current', $dados['image_current']);	
		endif;	

		$stmt->execute();
		if($stmt->rowCount() == 1):	
			return true;
		else:
			return false;
		endif;		 
	}

	public function delete($dados){
		$query = 'delete from carro where id_carro = :id and image_car = :image_car';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $dados['id_carro']);
		$stmt->bindValue(':image_car', $dados['image_car']);
		if($stmt->execute()):
			// $diretorio = '../images_car/'.$dados['id_carro'].' - '.$dados['image_car'];
			// $nome = $dados["id_carro"].' - '.$dados["image_car"];
			// unlink("../images_car/".$nome);

			$dir = 'images_car/'.$dados['id_carro'].' - '.$dados['image_car'];
			if(file_exists($dir)):
				unlink($dir);
			else:
				echo "Arquivo não existe";	
			endif;	
		endif;

	}


	public function search($name, $name_small){
		$query = 'select * from carro where nome = :nome or left(nome,3) = :nome_tiny';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $name);
		$stmt->bindValue(':nome_tiny', $name_small);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_OBJ);
		if($stmt->rowCount() > 0):
			return $result;
		else:
			return false;	
		endif;	
	}


}


?>