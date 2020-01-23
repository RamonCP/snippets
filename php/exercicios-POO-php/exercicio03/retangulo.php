<!DOCTYPE html>
<html>
<head>
	<title>Retângulo</title>
	<style>
		form div+div{
			margin-top: 5px;
			margin-bottom: 5px; 
		}		
		label{
			display: inline-block;
			width: 50px;
		}
	</style>
</head>
<body>

	<?php 
		if(isset($_POST["calcular"])){
			include_once("Retangulo.class.php");
			$retangulo = new Retangulo();
			$retangulo ->setLadoMaior($_POST["largura"]);
			$retangulo ->setLadoMenor($_POST["altura"]);
			$area = $retangulo->calculaArea();
			echo "A área é: ".$area;
		}
		else{
	?>

	<h1>Retângulo</h1>
	<form method="POST" action="retangulo.php">
		<div>
		<label for="largID">Largura</label>
		<input type="text" name="largura" id="largID"></div>

		<div>
		<label for="altID">Altura</label>
		<input type="text" name="altura" id="altID"></div>

		<input type="submit" name="calcular" value="Calcula Área">
	</form>

	<?php 
		}
	?>
</body>
</html>