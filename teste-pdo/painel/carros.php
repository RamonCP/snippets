<?php 
session_start();
if(!isset($_SESSION['logado']) && $_SESSION['logado'] != true):
    header("Location: http://localhost/teste-pdo/painel/login.php");
endif;
$action = "list";
// require "code/usuario_controller.php";
include "templates/head.php";
include "templates/nav.php";
require "code/car_controller.php"; 
?>
    <script type="text/javascript">
            
            function action(action, id){
              location.href = "http://localhost/teste-pdo/painel/carros.php?action="+action+"&id="+id;
            }

        </script>

    <div id="wrapper">

    <?php include 'templates/sidebar.php'; ?>

      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Carros</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <a href="add-carro.php" class="bg-info p-2 d-inline-block text-white text-center mb-3" style="width:200px;text-decoration: none;">Cadastrar novo carro</a>
          <a href="#" class="bg-dark p-2 d-inline-block text-white text-center mb-3" style="width:200px;text-decoration: none;" onclick="action('exportar', 1);">Exportar para CSV</a>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Criado</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

              <?php 

                  foreach($list as $carros):
              ?>      
                  <tr>
                    <th scope="row"><?= $carros->id_carro ?></th>
                    <td><?= $carros->nome ?></td>
                    <td><?= $carros->marca ?></td>
                    <td><?= $carros->created_at ?></td>
                    <td>
                      <i class="fas fa-trash-alt fa-lg text-danger" onclick="action('remover',<?= $carros->id_carro ?>);"></i>
                      <i class="fas fa-edit fa-lg text-info"  data-toggle="modal" data-target="#modal<?= $carros->id_carro ?>"></i>
                      <i class="fas fa-check-square fa-lg text-success"></i>
                    </td>
                  </tr>

                  <!-- Modal -->
                  <div class="modal fade" id="modal<?= $carros->id_carro ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Editar Carro</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="code/edit-carro.php" enctype="multipart/form-data"> 
                           <input type="text" name="nome" class="form-control" value="<?= $carros->nome ?>" placeholder="Digite o nome do carro" required><br>
                          <input type="text" name="marca" class="form-control"  value="<?= $carros->marca ?>" placeholder="Digite a marca do carro" required><br>
                          <input type="text" name="modelo" class="form-control"  value="<?= $carros->modelo  ?>" placeholder="Digite o modelo do carro" required><br>
                          <label class="font-weight-bold">Imagem Atual:</label>
                          <img src="images_car/<?= $carros->id_carro.' - '.$carros->image_car ?>" width="464px" class="mb-3">
                          <input type="file" name="image_car" class="form-control"  value="" placeholder="Digite a imagem do carro"><br>
                          <input type="hidden" name="id" value="<?= $carros->id_carro ?>">
                          <input type="hidden" name="image_current" value="<?= $carros->image_car ?>">
                          <button class="bg-success py-2 px-3 text-white font-weight-bold">Cadastrar</button>
                          </form>
                        </div>                       
                      </div>
                    </div>
                  </div>

              <?php
                  endforeach;  

              ?>

            </tbody>
          </table>

          <!-- Button trigger modal -->
         <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?= $carros->id_carro ?>">
            Launch demo modal
          </button> -->

         
          

          

        </div>
        <!-- /.container-fluid -->





<?php include 'templates/footer.php'; ?>
