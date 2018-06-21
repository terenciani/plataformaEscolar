<!DOCTYPE html>
<html lang="pt-br">
  <?php
    include_once("includes/head.php");
    include_once ("controller/EscolaController.class.php");
    $controle = new EscolaController();
    
    if(isset($_POST["alterar"])){  
        $dados = $controle->buscaDados();
       // echo $dados;
    }
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
           Gerência da Escola
        </li>
      </ol>

      <div class="row">
        <div class="col-12">

            <form method="POST">
                  <button name="alterar" type="submit" class="btn btn-lg btn-success pull-right">
                      Alterar Dados
                  </button>
                  
                  <h3>Nome da Escola </h3>

            </form>
           







          
        </div>
      </div>
    </div>
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
