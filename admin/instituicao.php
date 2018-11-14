<!DOCTYPE html>
<html lang="pt-br">
  <?php
    require_once 'includes/init.php';
    include_once("includes/head.php");
    include_once ("controller/InstituicaoController.class.php");
    $controle = new InstituicaoController();
    

    if(isset($_POST['btn-enviar'])){
      var_dump($_POST);
      $controle->alterarDadosDaInstituicao($_POST);
    }
      
    //break;
      
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
      <div class="container">
        <div class="row">
          <form method="POST" class="row" character_set="UTF-8" enctype="multipart/form-data">
            <div class="col-6">
              <div class="form-group">
                <input type="file" name="logo1" class="form-control btn-arquivo" >
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <input type="file" name="logo2" class="form-control btn-arquivo" >
              </div>
            </div>

            <div class="col-3">
              <div class="form-group">
                <label for="nome">Nome da Escola</label>
                <input type="text" id="nome" name="nome" class="form-control editavel" disabled="disabled" value="<?=$escola->getNome()?>">
              </div>
            </div>

            <div class="col-3"> 
              <div class="form-group">
                <label for="sigla">Sigla da Escola</label>
                <input type="text" id="sigla" name="sigla" class="form-control editavel" disabled="disabled" value="<?=$escola->getSigla()?>">
              </div>
            </div>
            <div class="col-3"> 
              <div class="form-group">
                <label for="data">Data</label>
                 <input type="date" id="data" name="data" class="form-control editavel" disabled="disabled" value="<?=$escola->getData()?>">
              </div>
            </div>

            <div class="col-3">
              <div class="form-group">
                <label for="telefone">Número de Telefone</label>
                <input type="telefone" id="telefone" name="telefone" class="form-control editavel" disabled="disabled" value="<?=$escola->getTelefone()?>">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="endereco" id="endereco" name="endereco" class="form-control editavel" disabled="disabled" value="<?=$escola->getEndereco()?>">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="desinatarios-de-contato">Desinatarios de Contatos </label>
                <input type="desinatarios-de-contato" id="desinatarios-de-contato" name="desinatarios-de-contato" class="form-control editavel" disabled="disabled" value="<?=$escola->getDestinatariosDeContato()?>">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="mapa">Mapa da Escola</label>
                 <input type="mapa" id="mapa" name="mapa" class="form-control editavel" disabled="disabled" value="<?=$escola->getMapa()?>">
               </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="favicon">Favicon</label>
                <input type="favicon" id="favicon" name="favicon" class="form-control editavel" disabled="disabled" value="<?=$escola->getFavicon()?>">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="youtube">Youtube</label>
                <input type="youtube" id="youtube" name="youtube" class="form-control editavel" disabled="disabled" value="<?=$escola->getYoutube()?>">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="facebook">Facebook da Escola</label>
                <input type="facebook" id="facebook" name="facebook" class="form-control editavel" disabled="disabled" value="<?=$escola->getFacebook()?>">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control editavel" disabled="disabled" value="<?=$escola->getEmail()?>">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="visao">Visão</label>
                 <input type="visao" id="visao" name="visao" class="form-control editavel" disabled="disabled" value="<?=$escola->getVisao()?>">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="telefone-alternativo">Telefone Alternativo</label>
                <input type="telefone-alternativo" id="telefone-alternativo" name="telefone-alternativo" class="form-control editavel" disabled="disabled" value="<?=$escola->getTelefoneAlternativo()?>">
              </div>   
            </div> 
            <div class="col-6">
              <div class="form-group">
                <label for="temprofissional">Tem Profissional</label>
                <input type="checkbox" id="temprofissional" name="temprofissional" class="form-control editavel" disabled="disabled" value="<?=$escola->getTemProfissional()?>">
              </div>
            </div>    
            <div class="col-12"> 
              <div class="form-group">
                <label for="missao">Missão da Escola</label>
                <textarea class="form-control" id="missao" name="missao" class="editavel" rows="4" disabled="disabled"><?=$escola->getMissao()?></textarea>
              </div>
            </div>

            <div class="col-12">
             <div class="form-group">
              <label for="valores">Nossos Valores</label>
              <textarea class="form-control" id="valores"
              disabled="disabled" name="valores"><?=$escola->getValores()?></textarea>
             </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="historico">Histórico da Escola</label>
                <textarea class="form-control" id="historico" name="historico" class="editavel" rows="4" disabled="disabled"><?=$escola->getHistorico()?></textarea>
              </div>
            </div>
            <button type="submit" name="btn-enviar" value="atualizar">Salvar Informações</button> 
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
