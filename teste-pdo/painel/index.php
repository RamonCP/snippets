<?php 
session_start();
if(!isset($_SESSION['logado']) && $_SESSION['logado'] != true):
    header("Location: http://localhost/teste-pdo/painel/login.php");
endif;
include "templates/head.php" ;
include "templates/nav.php";
?>

    <div id="wrapper">

    <?php include 'templates/sidebar.php'; ?>

      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>



          

          

        </div>
        <!-- /.container-fluid -->

        



<?php include 'templates/footer.php'; ?>
