<?php require 'Conexao.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Paginação</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<h1>Produtos</h1>
		<hr>

		<div class="row">

			<?php 
				foreach ( $num_produto as $key ) :
			?>

			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title"><?= $key->nome ?></h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <p>id : <?= $key->id ?></p>
			    <a href="#" class="btn btn-primary">Comprar</a>
			  </div>
			</div>

			<?php 
				endforeach;

				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;

			?>

		</div>

		<nav aria-label="Page navigation example">
		  <ul class="pagination justify-content-center mt-4">

		  		<li class="page-item">;
		  	<?php 		
		  		if ( $pagina_anterior != 0 ): 
		  	?>		
		  			<a class="index.php?pagina=<?php echo $pagina_anterior?>" href="#" aria-label="Previous">
			        	<span aria-hidden="true">&laquo;</span>
			       		<span class="sr-only">Previous</span>
			        </a>
			    </li>
			<?php		    
		    	else:
					echo '<span class="sr-only">Previous</span>
					 	</a>
						</li>';		
		    	endif;	
		    ?>

		    <?php 
		    	for ($i = 1; $i < $num_pagina + 1; $i++):
		    ?>
		    
		    	<li class="page-item"><a class="page-link" href="index.php?pagina=<?= $i ?>"><?= $i ?></a></li>

		    <?php
		    	endfor;
			?>

		   
		  	<li class="page-item">;
		  	<?php 		
		  		if ( $pagina_posterior <= $num_pagina ): 
		  	?>		
	  			<a class="index.php?pagina=<?php echo $pagina_posterior?>" href="#" aria-label="Next">
			        <span aria-hidden="true">&laquo;</span>
			        <span class="sr-only">Next</span>
			    </a>
			</li>
			<?php		    
		    	else:
					echo '<span class="sr-only">Next</span>
					 	</a>
						</li>';		
		    	endif;	
		    ?>
		  </ul>
		</nav>

	</div>
</body>
</html>