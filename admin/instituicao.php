<!DOCTYPE html>
<html lang="pt-br">
  <?php
    require_once 'includes/init.php';
    include_once("includes/head.php");
    include_once ("controller/InstituicaoController.class.php");
    $controle = new InstituicaoController();
    

    if(isset($_POST['btn-enviar'])){
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
          <form method="POST" class="row">
            <div class="col-6">
              <div class="form-group">
                <input type="file" name="file" class="form-control btn-arquivo" >
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
<<<<<<< HEAD
              <label for="nome">Nome da Escola</label>
              <textarea class="form-control" id="nome" name="nome" class="editavel" rows="4" disabled="disabled"><?=$escola->getNome()?></textarea>
=======
                <input type="file" name="file" class="form-control btn-arquivo" >
              </div>
            </div>
   
   
           <div class="col-6">
            <div class="form-group">
              <label for="missao">Nome da Escola</label>
              <textarea class="form-control" id="nome" name="nome" class="editavel" rows="2" disabled="disabled"><?=$escola->getNome()?></textarea>
              </div>
>>>>>>> 8c6f5e656107cdb58870bfeb50525784d9396c95
            </div>
            <div class="col-6"> 
              <div class="form-group">
<<<<<<< HEAD
              <label for="sigla">Sigla da Escola</label>
              <textarea class="form-control" id="sigla" name="sigla" class="editavel" rows="4" disabled="disabled"><?=$escola->getSigla()?></textarea>
=======
                <label for="missao">Sigla da Escola</label>
                <textarea class="form-control" id="sigla" name="sigla" class="editavel" rows="2" disabled="disabled"><?=$escola->getSigla()?></textarea>
              </div>
>>>>>>> 8c6f5e656107cdb58870bfeb50525784d9396c95
            </div>
            <div class="col-12"> 
              <div class="form-group">
<<<<<<< HEAD
              <label for="data">Data</label>
              <textarea class="form-control" id="data" name="data" class="editavel" rows="4" disabled="disabled"><?=$escola->getData()?></textarea>
=======
                <label for="missao">Data</label>
                <textarea class="form-control" id="data" name="data" class="editavel" rows="4" disabled="disabled"><?=$escola->getData()?></textarea>
              </div>
>>>>>>> 8c6f5e656107cdb58870bfeb50525784d9396c95
            </div>
            <div class="col-12"> 
              <div class="form-group">
                <label for="missao">Missão da Escola</label>
                <textarea class="form-control" id="missao" name="missao" class="editavel" rows="4" disabled="disabled"><?=$escola->getMissao()?></textarea>
              </div>
            </div>
<<<<<<< HEAD

            <div class="form-group">
              <label for="visao">Visão</label>
              <textarea class="form-control" id="visao" name="visao" class="editavel" disabled="disabled"><?=$escola->getVisao()?></textarea>
            </div>

            <div class="form-group">
              <label for="valores">Conheça Nossa História</label>
              <textarea class="form-control" id="valores"
              disabled="disabled" name="valores"><?=$escola->getValores()?></textarea>
            </div>
             <div class="form-group">
              <label for="endereco">Endereço</label>
              <textarea class="form-control" id="endereco"
              disabled="disabled" name="endereco"><?=$escola->getEndereco()?></textarea>
=======
            <div class="col-12"> 
              <div class="form-group">
                <label for="objetivo">Visão</label>
                <textarea class="form-control" id="visao" name="visao" class="editavel" disabled="disabled"><?=$escola->getVisao()?></textarea>
              </div>
            </div>
            <div class="col-12"> 
              <div class="form-group">
                <label for="historia">Conheça Nossa História</label>
                <textarea class="form-control" id="valores"
                disabled="disabled" name="valores"><?=$escola->getValores()?></textarea>
              </div>
            </div>
            <div class="col-12"> 
               <div class="form-group">
                <label for="historia">Histórico</label>
                <textarea class="form-control" id="historico"
                disabled="disabled" name="historico"><?=$escola->getHistorico()?></textarea>
              </div>
            </div>
            <div class="col-12"> 
               <div class="form-group">
                <label for="historia">Endereço</label>
                <textarea class="form-control" id="endereco"
                disabled="disabled" name="endereco"><?=$escola->getEnderecoE()?></textarea>
              </div>
>>>>>>> 8c6f5e656107cdb58870bfeb50525784d9396c95
            </div>

            <div class="form-group">
              <label for="telefone">Número de Telefone</label>
              <textarea class="form-control" id="telefone" rows="1"
              disabled="disabled" name="telefone"> <?=$escola->getTelefone()?></textarea>
            </div>

             <div class="form-group">
              <label for="telefone-alternativo">Telefone Alternativo</label>
              <textarea class="form-control" id="telefone-alternativo"
              disabled="disabled" name="telefone-alternativo"><?=$escola->getTelefoneAlternativo()?></textarea>
            </div>

             <div class="form-group">
              <label for="desinatarios-de-contato">Desinatarios de Contatos </label>
              <textarea class="form-control" id="desinatarios-de-contato"
              disabled="disabled" name="desinatarios-de-contato"><?=$escola->getDestinatariosDeContato()?></textarea>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" id="email" name="email" 
              disabled="disabled" value="<?=$escola->getEmail()?>">
            </div>
              <div class="form-group">
              <label for="historico">Histórico da Escola</label>
              <textarea class="form-control" id="historico" name="historico" class="editavel" rows="4" disabled="disabled"><?=$escola->getHistorico()?></textarea>
            </div>
              <div class="form-group">
              <label for="en">Endereço da Escola</label>
              <textarea class="form-control" id="endereco" name="endereco" class="editavel" rows="4" disabled="disabled"><?=$escola->getEndereco()?></textarea>
            </div>
              <div class="form-group">
              <label for="missao">Email da Escola</label>
              <textarea class="form-control" id="email" name="email" class="editavel" rows="4" disabled="disabled"><?=$escola->getEmail()?></textarea>
            </div>
              <div class="form-group">
              <label for="facebook">Facebook da Escola</label>
              <textarea class="form-control" id="facebook" name="facebook" class="editavel" rows="4" disabled="disabled"><?=$escola->getFacebook()?></textarea>
            </div>
              <div class="form-group">
              <label for="missao">Endereço da Escola</label>
              <textarea class="form-control" id="youtube" name="youtube" class="editavel" rows="4" disabled="disabled"><?=$escola->getYoutube()?></textarea>
            </div>
            <div class="form-group">
              <label for="missao">Endereço da Escola</label>
              <textarea class="form-control" id="favicon" name="favicon" class="editavel" rows="4" disabled="disabled"><?=$escola->getFavicon()?></textarea>
            </div>
            <div class="form-group">
              <label for="missao">Endereço da Escola</label>
              <textarea class="form-control" id="mapa" name="mapa" class="editavel" rows="4" disabled="disabled"><?=$escola->getMapa()?></textarea>
            </div>
            <div class="form-group">
              <label for="missao">Endereço da Escola</label>
              <textarea class="form-control" id="temprofissional" name="temprofissional" class="editavel" rows="4" disabled="disabled"><?=$escola->getTemProfissional()?></textarea>
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
