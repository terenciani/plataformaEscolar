 <!DOCTYPE html>
<html lang="pt-br">
  <?php
    include_once("includes/head.php");
    if (isset($_POST['salvar'])){
    include_once("");
    $controle  = new NoticiaController("NoticiasController.class.php");
    $controle->NoticiaController($_POST);
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
          Notícias
        </li>
      </ol>
     
        
      <div class="row"> 
        <div class="col-12 div-botoes">
          <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">
              Cadastrar Notícia
          </button>
        </div>
        <div class="col-12">
          
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Titulo da Notícia</th>
                <th scope="col">Data</th>
                <th scope="col">Imagem</th>
                <th scope="col">Opções</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">ESCOLA DA AUTORIA, PRÊMIO GESTÃO ESCOLAR  </th>
                <td>01/03/2018  </td>
                <td><img src="../imagens/noticias/ce72100a6e5ab790f1297e364040f71f.png" width="150"></td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
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
    
    <?php
      include_once("includes/modal-sair.php");
      include_once("includes/footer.php");
    ?>
  </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...<form action="noticia_salvar.php" method="POST" character_set="UTF-8" enctype="multipart/form-data">
            <div class="form-group">
              <label for="titulo-noticia">Título</label>
              <input type="text" class="form-control" id="titulo_noticia" name="titulo_noticia" required />
            </div>
            <div class="form-group">
              <label for="chamada-noticia">Chamada</label>
              <input type="text" class="form-control" id="chamada_noticia" name="chamada_noticia" required />
            </div>
            <div class="form-group">
              <label for="texto-noticia">Texto</label>
              <textarea class="form-control" rows="7" id="texto-noticia" name="texto_noticia" required ></textarea>
            </div>
            <br />
            <div class="form-group">
              <div class="col-md-3">
                <label class="btn btn-default btn-file" for="btn-upload">Procurar Imagem
                <input type="file" style="display: none;" name="imagem" id="btn-upload" required/>
                </label>
              </div>
              <div class="col-md-9">
                <input id="upload-file" class="form-control" placeholder="Nenhum arquivo selecionado. (460px - 430px)" disabled="disabled" />
              </div>
            </div>
            <br /><br />
            <div class="form-group">
              <label for="data-noticia">Data da Notícia</label>
              <input type="date" class="form-control data" id="data-noticia" name="data-noticia" required />
            </div>
            <div class="form-group">
              <label for="fonte-noticia">Fonte da Notícia</label>
              <input type="text" class="form-control" id="fonte-noticia" name="fonte-noticia" required />
            </div>

              <div class="botao-grupo float-right">
                <input type="submit" class="btn btn-lg btn-success botao-form" name="Salvar" />
                <input type="reset" class="btn btn-lg btn-danger botao-form btn-cancelar" name="Cancelar" />
             </div>
            
          </form>
      </div>
    
    </div>
  </div>
</div>
  <!-- Bootstrap core JavaScript-->
  <script src="components/jquery/jquery-3.2.1.min.js"></script>
  <script src="components/bootstrap-4.0.1/js/bootstrap.min.js"></script>
</body>

</html>
