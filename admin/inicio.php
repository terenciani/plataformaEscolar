<?php
	require_once 'includes/init.php';
	include_once LIB_CONTROLLER.DS.'LoginController.class.php';

	$controller = new LoginController();



	$controller->verificarLogado();

	if(isset($_GET['sair']))
		$controller->deslogar();		
?>
<!DOCTYPE html>
<html lang="pt-br">
  <?php
    include_once("includes/head.php");
  ?>
  

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php
    include_once("includes/menu.php");
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Início</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="pagina-exemplo-base.php">Exemplo</a>
        </li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Página Incial</h1>
          Bem Vindo
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    <?php
      include_once("includes/modal-sair.php");
      include_once("includes/footer.php");
    ?>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="components/jquery/jquery-3.2.1.min.js"></script>
  <script src="components/bootstrap-4.0.1/js/bootstrap.min.js"></script>
</body>

</html>
