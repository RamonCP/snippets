<!DOCTYPE html>
<html>
<head>
	<title>Sequência</title>
	<style type="text/css">

	form div+div{
		margin-top: 10px;
	}
		
	label{
		display: inline-block;
		width:170px;
	}

	</style>
</head>
<body>

	<?php 

	if(isset($_POST["botao"])){
		include_once ("Sequencia.class.php");
		$sequencia = new Sequencia();
		$sequencia ->setInicio($_POST['inicio']);
		$sequencia ->setFim($_POST['fim']);

		if($_POST["opcao"]=="todos")
			$sequencia ->exibirTodosNumeros();

		elseif($_POST["opcao"]=="pares")
			$sequencia->exibirPares();

		elseif($_POST["opcao"]=="impares") 
			$sequencia->exibirImpares();
		}
		else{
	?>

	<form method="POST" action="sequencia.php">
		<div>
			<label>Selecione o valor inicial:</label>
			<select name="inicio">
				<option value="1" selected=>1</option>
				<?php 
					for($i = 1; $i <= 100; $i++){
						echo '<option value="'.$i.'">'.$i.'</option>';
					}
				?>
			</select>
		</div>

		<div>
			<label>Selecione o valor final:</label>
			<select name="fim">
				<?php
					for($i = 1; $i<=100; $i++){
						echo '<option value="'.$i.'">'.$i.'</option>';
					}
				?>
			</select>
		</div>

		Mostrar:<br>
		<div>
			<input type="radio" name="opcao" value="todos" checked>
			<label>Todos</label>
		</div>
		<div>
			<input type="radio" name="opcao" value="pares">
			<label>Apenas os pares</label>
		</div>
		<div>
			<input type="radio" name="opcao" value="impares">
			<label>Apenas os ímpares</label>
		</div>

		<input type="submit" name="botao">

	</form>
	<?php } ?>
</body>
</html>