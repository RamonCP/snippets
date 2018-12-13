<?php
	$action = 'list';
	require 'painel/code/car_controller.php';
	require 'painel/templates/head.php';
?>

<style type="text/css">
	ul{ list-style: none;margin: 0;padding: 0; position: absolute;background: #988a8a;width: 95.9%;}
</style>
<div class="container">
	<h1 class="col-md-3 mt-3 mb-4 d-inline-block">Carros</h1>
	<form class="d-inline-block col-md-8">
		<input type="text" name="busca" style="width: 100%;">
		<!-- <ul>
			<li>
				<div class="media">
				  <img class="mr-3 align-self-center" width="150px" src="<?= BASE_URL ?>painel/images_car/51%20-%205625_2.jpg" alt="Generic placeholder image">
				  <div class="media-body">
				    <h5 class="mt-0">Fusca</h5>
				   <b>Marca: </b>marca <br>
				   <b>modelo: </b>modelo<br>
				  </div>
				</div>
			</li>
		</ul> -->
	</form>
</div>
<section class="carros">
	<div class="container">
		<div class="car_list">
			<?php
				foreach($list as $lista):
			?>
			<div class="row mb-4 p-3" style="background: #c8e6cf;">
				
				<div class="media">
				  <img class="mr-3 align-self-center" width="150px" src="<?= BASE_URL ?>painel/images_car/<?= $lista->id_carro.' - '.$lista->image_car ?>" alt="Generic placeholder image">
				  <div class="media-body">
				    <h5 class="mt-0"><?= $lista->nome ?></h5>
				   <b>Marca: </b><?= $lista->marca ?><br>
				   <b>modelo: </b><?= $lista->modelo ?><br>
				  </div>
				</div>
			</div>
			<?php
				endforeach;
			?>	
		</div>
	</div>	
</section>	

<script type="text/javascript">
	$('input').keyup(function(){
		var valor  = $(this).val();
		$.ajax({
			url: 'http://localhost/snippets/teste-pdo/painel/code/car_controller.php?action=busca&val='+valor,
			method: "GET",
			success: function(response){
				var dados = JSON.parse(response);
				console.log(dados.nome);
			}
		})
		console.log("Valor do input: "+$(this).val());

	})
</script>