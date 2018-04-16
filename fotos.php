<?php
	include_once("controller/MediaController.class.php");
	$controller = new MediaController();
?>
<!DOCTYPE html>
<html>
<head>
	<title>..:: EEWBS ::..</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Site institucional da Escola Estadual Waldemir Barros da Silva" />
    <meta name="author" content="Marcelo Figueiredo Terenciani" />

    <link rel="shortcut icon" href="imagens/menu/favicon.png" type="image/png">

	<!-- Bootstrap core CSS -->
    <link href="components/bootstrap-4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
	
	<!--FontAwesome-->
	<link rel="stylesheet" href="components/font-awesome-4.7.0/css/font-awesome.min.css" />

	<link rel="stylesheet" href="components/fancybox-master/jquery.fancybox.min.css" media="screen" />

	<!-- CSS padrao -->
	<link rel="stylesheet" href="css/estilo.css" />
	<link rel="stylesheet" href="css/queries.css" />
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
						<a class="nav-link text-uppercase text-expanded" href="noticias.php">NOTÍCIAS</a>
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
			<h6 class="navegacao">Você está em: Galeria de Medias</h6>
			<div class="border-gray">
				<h1 class="div-label div-label-margin">Galeria de Medias</h1>

				<div class="col-md-12 box-padrao">
					<form method="GET" action="" class="row">

						<div class="form-group col-md-8 col-xs-8">
							<select class="form-control no-radius" name="categoria" id=categoria>
								<option value="">Selecione uma Galeria de Medias</option>
								<?php  
									$categorias = $controller->getCategoriasMedias();
									foreach ($categorias as $categoria):
								?>
									<option value="<?=$categoria->getId_categoria()?>">
										<?=$categoria->getTitulo()?> - <?=$categoria->getData()?>
									</option>
								<?php
									endforeach;
								?>
							</select>	
						</div>
						<div class="form-group col-md-4 col-xs-4">
							<input type="submit" value="Buscar Imagens" class="btn btn-primary  btn-block no-radius btn-galeria">
						</div>	
					</form>
					<div class="row">
						<?php
							if(isset($_GET['categoria'])):

								$medias = $controller->getMedias($_GET['categoria']);
								foreach ($medias as $media):
						?>
						<div class="col-lg-2 col-md-3 col-sm-4 col-6">
							<a href="imagens/galerias/<?=$media->getUrl()?>" data-fancybox="group" data-type="image" data-caption="<?=$media->getTitulo()?>" class="thumbnail">
						     	<img src="imagens/galerias/<?=$media->getUrl()?>" class="thumbnail img-fluid img-galeria" alt="<?=$media->getAlt()?>" />
						  	</a>							
						</div>
						<?php
								endforeach;
							endif;
						?>
					</div>
					<div class="row">
										
					</div>
				</div>
				
			</div>			
		</div>
	</div>
	<footer class="rodape rodape-button">
		<div class="container">
			<h6 class="texto-rodape">www.eewbs.com.br © 2017 - Todos os direitos reservados</h6>
		</div>
	</footer><!--rodape-->


	<!-- Bootstrap core JavaScript -->
    <script src="components/jquery/jquery-3.2.1.min.js"></script>
    <script src="components/popper/popper.min.js"></script>
    <script src="components/bootstrap-4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="components/fancybox-master/jquery.fancybox.min.js"></script>
    <script src="js/galeria.js"></script>
    
</body>
</html>