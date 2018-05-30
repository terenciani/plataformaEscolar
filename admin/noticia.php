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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <!-- Bootstrap core JavaScript-->
  <script src="components/jquery/jquery-3.2.1.min.js"></script>
  <script src="components/bootstrap-4.0.1/js/bootstrap.min.js"></script>
</body>

</html>
