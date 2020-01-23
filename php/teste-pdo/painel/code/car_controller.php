<?php

	require "car_model.php";
	require "carro.php";
	require "conexao.php";

	$action = isset($_GET['action']) ? $_GET['action'] : $action;

	// if($_GET['action'] == 'add'):
	// 	echo "Oi";
	// endif; 

	// $dados = serialize(array_values($_POST));	

	if($action == "add"):
		$dados['nome'] = $_POST['nome'];
		$dados['marca'] = $_POST['marca'];
		$dados['modelo'] = $_POST['modelo'];
		$dados['image'] = $_FILES['image_car']['name'];
		
		// $carro = new Carro();
		// $carro->__set('nome', $dados['nome']);
		// $carro->__set('marca',$dados['marca']);
		// $carro->__set('modelo',$dados['modelo']);
		// $carro->__set('image_car',$dados['image']);

		$conexao = new Conexao();

		$carro_model = new CarroModel($conexao);
		$carro_model->add($dados);

		header("Location: http://localhost/teste-pdo/painel/add-carro.php");
		// echo "<pre>";	
		// print_r($dados);
		// echo "</pre>";	

	elseif($action == "list"):
		
		$conexao = new Conexao();
		$carro_model = new CarroModel($conexao);
		$list = $carro_model->get();
		
	elseif($action == "delete"):

		$id = $_GET['id'];

		$conexao = new Conexao();
		$carro_model = new CarroModel($conexao);
		$single = $carro_model->get_single($id);

		if($single):
			$dados['id_carro'] = $single[0]->id_carro;
			$dados['image_car'] = $single[0]->image_car;
			$carro_model->delete($dados);
		endif;	
		// echo "<pre>";	
		// print_r($single);
		// echo "</pre>";

		echo "<meta http-equiv='refresh' content='0;URL=http://localhost/teste-pdo/painel/carros.php'>";

	elseif($action == 'busca'):

		$val = $_GET['val'];
		if($val != ""):
			$conexao = new Conexao();
			$car_model = new CarroModel($conexao);
			$val_small = substr($val, 0, 3);
			$result = $car_model->search($val,$val_small);
			if($result):
				$list_car = "";
				foreach($result as $value => $key):
					$list_car = $list_car." - ".$result[$value]->nome;
				endforeach;	
				$dados['nome'] = $result[0]->nome;
				echo json_encode($result);
			else:
				echo 'Nenhum resultado';
			endif;		
		else:
			echo 1;	
		endif;	
		// echo $val;

	elseif($action == 'exportar'):	

		$conexao = new Conexao();
		$carro_model = new CarroModel($conexao);
		$list_all = $carro_model->get();
		header('Content-Type: text/csv; charset=utf-8');  
	    header('Content-Disposition: attachment; filename=data.csv');  
	    $output = fopen('C:\xampp\htdocs\teste-pdo\painel\carros.csv', "w");  
	    fputcsv($output, array('ID', 'Name', 'Address', 'Gender', 'Designation', 'Age')); 
		if($list_all):
			// $delimiter = ",";
		 //    $filename = "carros_" . date('Y-m-d') . ".csv";
		    
		 //    //create a file pointer
		 //    $f = fopen('C:\xampp\htdocs\teste-pdo\painel\carros.csv', 'w');
		    
		 //    //set column headers
		 //    $fields = array('ID', 'Nome', 'Marca', 'Modelo', 'Created');

		 //    $csv = "";

		 //    // fputcsv($f, $fields, $delimiter);
		 //    $csv .= '<table>';
		 //    $csv .= '<thead>';
		 //    $csv .= '<tr>';
		 //    $csv .= '<td>ID</td>';
		 //    $csv .= '<td>Nome</td>';
		 //    $csv .= '<td>Marca</td>';
		 //    $csv .= '<td>Modelo</td>';
		 //    $csv .= '<td>Criado</td>';
		 //    $csv .= '</tr>';
		 //    $csv .= '</thead>';
		 //    $csv .= '<tbody>';
		 //    	//output each row of the data, format line as csv and write to file pointer
		 //   		foreach($list_all as $value => $key):
		 //   	$csv .= '<tr>';	
		 //        // $status = ($row['status'] == '1')?'Active':'Inactive';
		 //        // $lineData = array($list_all[$value]->id_carro, $list_all[$value]->nome, $list_all[$value]->marca, $list_all[$value]->modelo, $list_all[$value]->created_at);
		 //    $csv .= '<td>'.$list_all[$value]->id_carro.'</td>';    
		 //    $csv .= '<td>'.$list_all[$value]->nome.'</td>';    
		 //    $csv .= '<td>'.$list_all[$value]->marca.'</td>';    
		 //    $csv .= '<td>'.$list_all[$value]->modelo.'</td>';    
		 //    $csv .= '<td>'.$list_all[$value]->created_at.'</td>';    
		 //    $csv .= '</tr>';
		       
		 //    	endforeach;
		   
		 //    $csv .= '</tbody>';
		 //    $csv .= '</table>';


		 //    fputcsv($f, $csv);
		 //    //move back to beginning of file
		 //    fseek($f, 0);
		    
		 //    //set headers to download file rather than displayed
		 //    // header('Content-Type: text/csv');
		 //    // header('Content-Disposition: attachment; filename="' . $filename . '";');
		    
		 //    //output all remaining data on a file pointer
		 //    fpassthru($f);

	 	$query = 'select * from carro';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		for($cont = 0; $cont < $stmt->rowCount(); $cont++):
	        fputcsv($output, $stmt->fetch(PDO::FETCH_ASSOC));  
		endfor;
	
	    fclose($output);  	
		else:
			echo "Falha";
		endif;	
		exit;
		// $arquivo = fopen('C:\xampp\htdocs\teste-pdo\painel\arquivo.csv', 'w');
		// echo "<meta http-equiv='refresh' content='0;URL=http://localhost/teste-pdo/painel/carros.php'>";
	endif;	

?>	