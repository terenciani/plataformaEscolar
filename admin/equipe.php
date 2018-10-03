 <html lang="pt-br"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>..:: Plataforma Escolar WBS ::..</title>
    <!-- Bootstrap core CSS-->
    <link href="components/bootstrap-4.0.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="components/fontawesome-5.0.13/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    
    <link href="components/sbadmin/css/sb-admin.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/adm-estilo.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-confirm.css" type="text/css">
    <link rel="shortcut icon" type="image/png" href="imagens/favicon.png">
</head>  

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Plataforma Escolar WBS</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Início">
          <a class="nav-link" href="index.html">
            <i class="fas fa-home"></i>
            <span class="nav-link-text">Início</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Notícias">
          <a class="nav-link" href="noticia.php">
            <i class="far fa-newspaper"></i>
            <span class="nav-link-text">Notícias</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="banner.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Gerência de Banners</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link" href="escola.php">
            <i class="fas fa-address-book"></i>
            <span class="nav-link-text"> Gerência da Escola </span>
          </a>

           </li><li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link" href="equipe.php">
          <i class="fas fa-users-cog"></i>
            <span class="nav-link-text">Gerência de Equipe</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Educação Profissional">
          <a class="nav-link" href="profissional.php">
            <i class="fas fa-graduation-cap"></i>
            <span class="nav-link-text">Gerência de Educação Profissional</span>
          </a>
        </li>
        
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#modalSair">
            <i class="fa fa-fw fa-sign-out"></i>Sair</a>
        </li>
      </ul>
    </ul></div>
</nav>  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Início</a>
        </li>
        <li class="breadcrumb-item active">Noticia</li>
      </ol>
     
        
      <div class="row"> 
                <div class="col-12 div-botoes">
          <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar Formulário</button>
        </div>
        <div class="col-12">
          
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Formulário da Equipe</th>
                <th scope="col">Nome</th>
                <th scope="col">Função</th>
                <th scope="col">Config</th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                      <td><img src="imagens/equipe/avatar.png" width="100"></td>
                      <td>Coruja</td>
                      <td>CruCru</td>
                      
                      <td>
                        <a href="noticia_editar.php?id=14" title="Editar">
                          <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="noticia.php?metodo=DELETE&amp;id=14" id="link-delete" title="Deletar">
                          <i class="far fa-trash-alt"></i>
                        </a>
                      </td>
                  </tr>
                  <tr>
                    <td><img src="imagens/equipe/homem.jpg" width="100"></td>
                      <td>Aranha</td>
                      <td>Pxiu</td>
                      
                      <td>
                        <a href="noticia_editar.php?id=14" title="Editar">
                          <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="noticia.php?metodo=DELETE&amp;id=14" id="link-delete" title="Deletar">
                          <i class="far fa-trash-alt"></i>
                        </a>
                      </td>
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
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" character_set="UTF-8" enctype="multipart/form-data">
            <div class="form-group">
              <label for="titulo-noticia">Título</label>
              <input type="text" class="form-control" id="titulo_noticia" name="titulo_noticia" required="">
            </div>
            <div class="form-group">
              <label for="chamada-noticia">Chamada</label>
              <input type="text" class="form-control" id="chamada_noticia" name="chamada_noticia" required="">
            </div>
            
            <div class="form-group">
              <label for="btn-uptload">Imagem</label>
              <input type="file" class="form-control-file" id="btn-uptload" name="imagem">
            </div>
            
            <div class="form-group">
              <label for="data-noticia">Data da Notícia</label>
              <input type="date" class="form-control data" id="data-noticia" name="data-noticia" required="">
            </div>
            <div class="form-group">
              <label for="fonte-noticia">Fonte da Notícia</label>
              <input type="text" class="form-control" id="fonte-noticia" name="fonte-noticia" required="">
            </div>
            <div class="form-group">
              <label for="texto-noticia">Texto</label>
              <textarea class="form-control" rows="15" id="texto-noticia" name="texto_noticia" required=""></textarea>
            </div>
            <div class="botao-grupo float-right">
              <button type="submit" class="btn btn-success botao-form" name="metodo" value="POST">Salvar</button>
              <input type="reset" class="btn btn-danger botao-form btn-cancelar" name="Cancelar">
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



</body></html>  