<?php 
  session_start();
  if(!isset($_SESSION['logado']) && $_SESSION['logado'] != true):
      header("Location: http://localhost/snippets/teste-pdo/painel/login.php");
  endif;

  include "templates/head.php";
  include "templates/nav.php"; 
?>

    <div id="wrapper">

    <?php include 'templates/sidebar.php'; ?>

      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Add carros</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <h2>Cadastro de veículos</h2><br>

          <form class="form-group" method="post" action="code/car_controller.php?action=add" enctype="multipart/form-data">
            <input type="text" name="nome" class="form-control" placeholder="Digite o nome do carro" required><br>
            <input type="text" name="marca" class="form-control"  placeholder="Digite a marca do carro" required><br>
            <input type="text" name="modelo" class="form-control"  placeholder="Digite o modelo do carro" required><br>
            <input type="file" name="image_car" class="form-control"  placeholder="Digite a imagem do carro" required><br>

            <button class="bg-success py-2 px-3 text-white font-weight-bold">Cadastrar</button>
          </form>

          

          

        </div>
        <!-- /.container-fluid -->

        



<?php include 'templates/footer.php'; ?>
