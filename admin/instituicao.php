<!DOCTYPE html>
<html lang="pt-br">
  <?php
    require_once 'includes/init.php';
    include_once("includes/head.php");
    include_once ("controller/InstituicaoController.class.php");
    $controle = new InstituicaoController();

    $escola = $controle->getInstituicao();

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

      <div class="row" >
        <div class="col-12">
          <button disable name="alterar" type="submit" class="btn btn-lg btn-success pull-right" id="btn-habilitar">Editar Dados        </button>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <form method="POST">
                  
                  
                  
                 
  
<div class="form-group">
    <input type="file" name="file" class="form-control btn-arquivo" >
    </div>

<div class="form-group">
    <label for="missao">Missão da Escola</label>
    <textarea class="form-control" id="missao" name="missao" class="editavel" rows="4" disabled="disabled">
      <?=$escola->getMissao()?>
    </textarea>
  </div>

<div class="form-group">
    <label for="objetivo">Nosso Objetivo</label>
    <textarea class="form-control" id="objetivo" name="objetivo" class="editavel" rows="3" disabled="disabled">
      <?=$escola->getVisao()?>
    </textarea>
  </div>

<div class="form-group">
    <label for="historia">Conheça Nossa História</label>
    <textarea class="form-control" id="historia" rows="5"
    disabled="disabled">
       <?=$escola->getValores()?>
    </textarea>
  </div>

<div class="form-group">
    <label for="telefone">Número de Telefone</label>
    <textarea class="form-control" id="telefone" rows="1"
    disabled="disabled"> <?=$escola->getTelefone()?></textarea>
  </div>

  <div class="form-group">
    <label for="telefone">Email</label>
    <textarea class="form-control" id="Email" rows="1"
    disabled="disabled"> <?=$escola->getemail()?></textarea>
  </div>
  
</form>




         </div>
        </div>
      </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    <?php
      include_once("includes/modal-sair.php");
      //include_once("includes/footer.php");
    ?>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="components/jquery/jquery-3.2.1.min.js"></script>
  <script src="components/bootstrap-4.0.1/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
