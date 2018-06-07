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
          Gerência de Banners
        </li>
      </ol>
     
        
      <section class="container">
        <div class="row">
          <h1 id="admin">Gerenciar Banners</h1>
        </div>
        
        <div class="thumbnail" id="conteudo">
          <div class="col-sm-12">
            <a href="" class="btn btn-lg btn-success pull-right">Cadastrar Banner</a>
          </div>
          <table class="table-striped lista-table">
            <thead>
              <tr>
                <th>Título Banner</th>
                <th>Link</th>
                <th>Posição</th>
                <th>Data</th>
                <th>Imagem</th>
                <th>Opções</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                      <td>Educação Profissional 2018</td>
                      <td>http://eewbs.com.br/eletivas</td>
                      <td>ROTATIVO</td>
                      <td>23/03/2018</td>
                      <td><img src="./_.__ Admin WBS __.._files/inscricoes.jpg" width="150"></td>

                      <td>
                        <a href="http://www.eewbs.com.br/site/admin/banner_editar.php?id=2" title="Editar" class="glyphicon glyphicon-edit options-edit"></a>
                        <a href="http://www.eewbs.com.br/site/admin/banner_deletar.php?id=2" id="link-delete" title="Deletar" class="glyphicon glyphicon-minus-sign options-delet" data-title="Exclusão"></a>
                      </td>
                      </tr><tr>
                      <td>Banner 2</td>
                      <td></td>
                      <td>PROMOCAO</td>
                      <td>30/11/-0001</td>
                      <td><img src="./_.__ Admin WBS __.._files/promocional.png" width="150"></td>

                      <td>
                        <a href="http://www.eewbs.com.br/site/admin/banner_editar.php?id=3" title="Editar" class="glyphicon glyphicon-edit options-edit"></a>
                        <a href="http://www.eewbs.com.br/site/admin/banner_deletar.php?id=3" id="link-delete" title="Deletar" class="glyphicon glyphicon-minus-sign options-delet" data-title="Exclusão"></a>
                      </td>
                      </tr><tr>
                      <td>Equipe WBS 2017</td>
                      <td></td>
                      <td>EQUIPE</td>
                      <td>12/12/2017</td>
                      <td><img src="./_.__ Admin WBS __.._files/equipe.jpeg" width="150"></td>

                      <td>
                        <a href="http://www.eewbs.com.br/site/admin/banner_editar.php?id=4" title="Editar" class="glyphicon glyphicon-edit options-edit"></a>
                        <a href="http://www.eewbs.com.br/site/admin/banner_deletar.php?id=4" id="link-delete" title="Deletar" class="glyphicon glyphicon-minus-sign options-delet" data-title="Exclusão"></a>
                      </td>
                      </tr><tr>
                      <td>Eletivas 2018</td>
                      <td></td>
                      <td>ROTATIVO</td>
                      <td>04/03/2018</td>
                      <td><img src="./_.__ Admin WBS __.._files/747ed4a593652d6ac02fbc701547dbba.png" width="150"></td>

                      <td>
                        <a href="http://www.eewbs.com.br/site/admin/banner_editar.php?id=8" title="Editar" class="glyphicon glyphicon-edit options-edit"></a>
                        <a href="http://www.eewbs.com.br/site/admin/banner_deletar.php?id=8" id="link-delete" title="Deletar" class="glyphicon glyphicon-minus-sign options-delet" data-title="Exclusão"></a>
                      </td>
                      </tr><tr>
                      <td>Inscrições da Tutoria</td>
                      <td></td>
                      <td>ROTATIVO</td>
                      <td>11/04/2018</td>
                      <td><img src="./_.__ Admin WBS __.._files/d954355447cdf494edb92975ddbd2263.png" width="150"></td>

                      <td>
                        <a href="http://www.eewbs.com.br/site/admin/banner_editar.php?id=11" title="Editar" class="glyphicon glyphicon-edit options-edit"></a>
                        <a href="http://www.eewbs.com.br/site/admin/banner_deletar.php?id=11" id="link-delete" title="Deletar" class="glyphicon glyphicon-minus-sign options-delet" data-title="Exclusão"></a>
                      </td>
                      </tr><tr>
                      <td>Futebol</td>
                      <td>http://eewbs.com.br/site/futebol.php</td>
                      <td>MURAL</td>
                      <td>26/04/2018</td>
                      <td><img src="./_.__ Admin WBS __.._files/df3dca53cf975570e9f08ae7a60240f3.png" width="150"></td>

                      <td>
                        <a href="http://www.eewbs.com.br/site/admin/banner_editar.php?id=12" title="Editar" class="glyphicon glyphicon-edit options-edit"></a>
                        <a href="http://www.eewbs.com.br/site/admin/banner_deletar.php?id=12" id="link-delete" title="Deletar" class="glyphicon glyphicon-minus-sign options-delet" data-title="Exclusão"></a>
                      </td>
                      </tr><tr>
                      <td>Vôlei</td>
                      <td>http://eewbs.com.br/site/volei.php</td>
                      <td>MURAL</td>
                      <td>26/04/2018</td>
                      <td><img src="./_.__ Admin WBS __.._files/dc154eaaaeafaa9f2d6376e92bf824c6.png" width="150"></td>

                      <td>
                        <a href="http://www.eewbs.com.br/site/admin/banner_editar.php?id=13" title="Editar" class="glyphicon glyphicon-edit options-edit"></a>
                        <a href="http://www.eewbs.com.br/site/admin/banner_deletar.php?id=13" id="link-delete" title="Deletar" class="glyphicon glyphicon-minus-sign options-delet" data-title="Exclusão"></a>
                      </td>
                      </tr>           </tbody>
          </table>
        </div>
      </section>
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
              <h5 class="modal-title" id="exampleModalLabel">Banner</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
              <label for="login">Descrição:</label>
              <input type="text" name="login" id="login" placeholder="Digite a Descrição" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="senha">Dia:</label>
              <input type="password" name="senha" id="senha" placeholder="Digite o dia" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="senha">Banner:</label>
              <input type="password" name="senha" id="senha" placeholder="Anexe a foto" class="form-control"/>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Salvar Banner</button>
            </div>
          </div>
        </div>
      </div>
  <!-- Bootstrap core JavaScript-->
  <script src="components/jquery/jquery-3.2.1.min.js"></script>
  <script src="components/bootstrap-4.0.1/js/bootstrap.min.js"></script>
</body>

</html>
