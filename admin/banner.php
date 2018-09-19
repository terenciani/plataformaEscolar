<!DOCTYPE html>
<html lang="pt-br">
  <?php
    require_once 'includes/init.php';
    include_once LIB_CONTROLLER.DS.'BannerController.class.php';
    include_once("includes/head.php");
    $controle  = new BannerController("BannerController.class.php");
    if(isset($_GET['metodo'])){
      if ($_GET['metodo'] == "DELETE") {
        $controle->excluirBanner($_GET['id']);
      }
    }

    if(isset($_POST['metodo'])){
      $msg = $controle->salvarBanner($_POST, $_FILES);
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
          Banners
        </li>
      </ol>
     
        
      <div class="row"> 

        <?php
          if (isset($msg)):
        ?>
            <div class="col-12">
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?=$msg?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
        <?php
          endif;
        ?>
        <div class="col-12 div-botoes">
          <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target=".bd-example-modal-lg">
              Cadastrar Banner
          </button>
        </div>
        <div class="col-12">
          
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Titulo do Banner</th>
                <th scope="col">Data</th>
                <th scope="col">Imagem</th>
                <th scope="col">Opções</th>
              </tr>
            </thead>

            <tbody>
              <?php
                $banners  = $controle->buscarTodosBanners();
                foreach ($banners as $banner):
              ?>
                  <tr>
                    <td><?=$banner->getTitulo()?></td>
                    <td><?=$banner->getData()?></td>
                    <td><img src="imagens/banners/<?=$banner->getImagem()?>" width="100"></td>
                    <td>
                      <a href="banner_editar.php?id=<?=$banner->getId_banner()?>" title='Editar'>
                        <i class="fas fa-pencil-alt"></i>
                      </a>
                      <a href="banner.php?metodo=DELETE&id=<?=$banner->getId_banner()?>" id='link-delete' title='Deletar'>
                        <i class="far fa-trash-alt"></i>
                      </a></td>
                  </tr>
              <?php
                endforeach;
              ?>
            </tbody>

          </table>

          
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    <!-- Logout Modal-->
<div class="modal fade" id="modalSair" tabindex="-1" role="dialog" aria-labelledby="modalSairLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSairLabel">Pronto Para Sair?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Clique em "Sair" se você realmente deseja sair</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="login.html">Sair</a>
      </div>
    </div>
  </div>
</div><footer class="sticky-footer">
  <div class="container">
    <div class="text-center">
      <small>Copyright © EEWBS 2018</small>
    </div>
  </div>
</footer>
  </div>
  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cadastro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>
        </div>
        <div class="modal-body">
          <form method="POST" character_set="UTF-8" enctype="multipart/form-data">
            <div class="form-group">
             <label for="titulo-banner">Título</label>
              <input type="text" class="form-control" id="titulo_banner" name="titulo_banner" required />
            </div>
            <div class="form-group">
              <label for="alt-banner">Título secundário</label>
              <input type="text" class="form-control" id="alt_banner" name="alt_banner" required />
            </div>
            <div class="form-group">
              <label for="posicao">Posição do banner</label>
              <select class="form-control" id="posicao" name="posicao_banner" required>
                <option value=""> Selecione a posição do banner</option>
                <option value="ROTATIVO">Banner Rotativo (900px / 250px) - Página Inicial</option>
                <option value="PROMOCAO">Banner Promocial (1260px / 240px) - Página Inicial</option>
                <option value="EQUIPE">Banner Equipe (1240px de largura) - Página Equipe</option>
                <option value="MURAL">Banner Mural (195px - 80px)- Página Inicial</option>
              </select>
            </div>
            <div class="form-group">
              <label for="link-banner">Link</label>
              <input type="text" class="form-control" id="link_banner" name="link_banner" required />
            </div>            
            <div class="form-group">
              <label for="btn-uptload">Imagem</label>
              <input type="file" class="form-control-file" id="btn-uptload" name="imagem_banner" required />
            </div>
            <div class="form-group">
              <label for="data-banner">Data do Banner</label>
              <input type="date" class="form-control data" id="data-banner" name="data_banner" required />
            </div>
            <div class="botao-grupo float-right">
              <button type="submit" class="btn btn-success botao-form" name="metodo" value="POST">Salvar</button> 
              <input type="reset" class="btn btn-danger botao-form btn-cancelar" name="Cancelar">
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="ativo_banner" value="1" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Ativar
              </label>
            </div>          
          </form>
        </div>
      
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="components/jquery/jquery-3.2.1.min.js"></script>
  <script src="components/bootstrap-4.0.1/js/bootstrap.min.js"></script>
  <script src="components/jquery-confirm/jquery-confirm.js" type="text/javascript"></script>
  <script src="js/script.js"></script>

</body>
</html>