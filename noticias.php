<?php
	require_once 'admin/includes/init.php';
	include_once LIB_CONTROLLER.DS.'NoticiasController.class.php';
	
	$controller = new NoticiasController();
?>
<!DOCTYPE html>
<html>
<head>

	<title>..:: EEWBS ::..</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Site institucional da Escola Estadual Waldemir Barros da Silva" />
    <meta name="author" content="Marcelo Figueiredo Terenciani" />

    <link rel="shortcut icon" href="admin/imagens/menu/favicon.png" type="image/png">

	<!-- Bootstrap core CSS -->
    <link href="admin/components/bootstrap-4.0.1/css/bootstrap.min.css" rel="stylesheet">
	
	<!--FontAwesome-->
	<link rel="stylesheet" href="admin/components/font-awesome-4.7.0/css/font-awesome.min.css" />

	<!-- CSS padrao -->
	<link rel="stylesheet" href="css/estilo.css" />
	<link rel="stylesheet" href="css/queries.css" />
	<style type="text/css">
		.body{
			background-color:rgba(211,211,211, 0,5); }
	</style>
</head>
<body>
	<?php
		include_once 'includes/menu.php';
	?>
	<nav class="navbar navbar-expand-lg navbar-light py-lg-4 menu-escola">
		<div class="container">
			<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.html">EEWBS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="index.php">HOME</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="institucional.php">INSTITUCIONAL</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="profissional.php">EDUCAÇÃO PROFISSIONAL</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="equipe.php">EQUIPE WBS</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded active" href="noticias.php">NOTÍCIAS</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="contato.php">CONTATO</a>
					</li>
				</ul>
			</div>
		</div>
	</nav> <!--MenuEscola-->
	<div id="conteudo" class="background-white">
		<div class="container">
			<h6 class="navegacao">Você está em: Notícias</h6>
			<div class="pag-noticias border-gray">
				<h1 class="div-label div-label-margin">Notícias</h1>
				<?php
					if(isset($_GET['id'])):
						$noticia = $controller->getNoticiaPorId($_GET['id']);
				?>	
							
							<div class="row ">

								<div class="col-md-4">
									<h1 class="titulo-noticias-pag"><?=$noticia->getTitulo()?></h1>	
								</div>
								<div class="col-md-12">
									<h3 class="chamada-noticias-pag"><?=$noticia->getChamada()?></h3>
								</div>
								<hr class="hr-noticia-individual">
								
								<div class="col-md-12">
									<span class="data-noticia-individual"> <i class="fa fa-calendar icon-relogio" aria-hidden="true"></i> <?=$noticia->getData()?></span>
								</div>
								<figure class="figure-noticia">
									<img src="admin/imagens/noticias/<?=$noticia->getImagem()?>" alt="Imagem da Notícia" title="<?=$noticia->getTitulo()?>" class="img-fluid ">
									<figcaption>
										Fonte: <?=$noticia->getFonte()?>
									</figcaption>
								</figure>
								<div class="col-md-12 texto-institucional historico">	
									<?=$noticia->getTexto()?>
								</div>
								<div class="col-md-12">
									<a class="link-mais-noticias" href="noticias.php"> + Noticias </a>
								</div>
								
								
							</div>
						
				
				<?php
						
					else:
						$noticias = $controller->getNoticias();
						//var_dump($bannersMural);
						foreach ($noticias as $noticia):
				?>
							<div class="row card-pag-noticias">
								<div class="col-md-4 col-sm-5 col-xs-6">
									<a href="noticias.php?id=<?=$noticia->getId_noticia()?>" class="img-noticias">
										<img src="admin/imagens/noticias/<?=$noticia->getImagem()?>" alt="Imagem Notícia" title="Clique para visualizar" class="img-fluid">
									</a>
								</div>
								<div class="col-sm-7 col-md-8 col-xs-6">
									<a href="noticias.php?id=<?=$noticia->getId_noticia()?>" class="link-noticias-pag">
										<h1 class="titulo-noticias-pag"><?=$noticia->getTitulo()?></h1>
									</a>
									<h3 class="chamada-noticias-pag"><?=$noticia->getChamada()?></h3>
									<span class="data-noticia"> <i class="fa fa-calendar icon-relogio" aria-hidden="true"></i> <?=$noticia->getData()?></span>
								</div>	
							</div>
							<hr class="hr-noticias-pag">
				<?php
						endforeach;
					endif;

				?>
			</div>			
		</div>
	</div>
	<footer class="rodape rodape-button">
		<div class="container">
			<h6 class="texto-rodape">www.eewbs.com.br © 2017 - Todos os direitos reservados</h6>
		</div>
	</footer><!--rodape-->


	<!-- Bootstrap core JavaScript -->
    <script src="admin/components/jquery/jquery-3.2.1.min.js"></script>
    <script src="admin/components/popper/popper.min.js"></script>
    <script src="admin/components/bootstrap-4.0.1/js/bootstrap.min.js"></script>    
</body>
</html>