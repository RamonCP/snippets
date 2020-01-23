<!DOCTYPE html>
<html>
<head>
	<title>Sexo e Idade</title>
</head>
<body>

	<?php 
		if(isset($_POST["enviar"])){
		include_once ("Pessoa.class.php");
		$pessoa = new Pessoa();
		$pessoa ->setSexo($_POST["sexo"]);
		$sexo = $pessoa ->oQueEh();
		echo $sexo;
	}else{
	?>
	<form method="POST" action="sexoidade.php">
	<label>Informe seu sexo:</label>

	<div><input type="radio" name="sexo" value="Masculino">
	<label>Masculino</label>

	<input type="radio" name="sexo" value="Feminino">
	<label>Feminino</label></div>

	<div><label>Informe sua idade:</label>
	<input type="text" name="idade"></div>

	<input type="submit" name="enviar" value="Enviar">
	</form>
	<?php } ?>

</body>
</html>