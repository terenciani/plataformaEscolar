<?php
	require_once '/admin/includes/init.php';
	include_once LIB_CONTROLLER.DS.'MediaController.class.php';

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

    <link rel="shortcut icon" href="admin/imagens/menu/favicon.png" type="image/png">

	<!-- Bootstrap core CSS -->
    <link href="admin/components/bootstrap-4.0.1/css/bootstrap.min.css" rel="stylesheet">
	
	<!--FontAwesome-->
	<link rel="stylesheet" href="admin/components/font-awesome-4.7.0/css/font-awesome.min.css" />

	<link rel="stylesheet" href="admin/components/fancybox-master/jquery.fancybox.min.css" media="screen" />

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
			<h6 class="navegacao">Você está em: Anais da FECCAT</h6>
			<div class="border-gray">
				<?php
					if(isset($_GET['edicao']))
						$edicao = $_GET['edicao'];
					else
						$edicao = "";
				?>
				<h1 class="div-label div-label-margin">Galeria de Artigos da FECCAT <?=$edicao?></h1>

				<div class="col-md-12 box-padrao">
					<form method="GET" action="" class="row">

						<div class="form-group col-md-8 col-xs-8">
							<select class="form-control no-radius" name="edicao" id=edicao>
								<option value="">Selecione a Edição da FECCAT</option>
								<option value="2016">I Feira Científica Cultural Artística e Tecnológica (2016)</option>
								<option value="2017">II Feira Científica Cultural Artística e Tecnológica (2017)</option>
							</select>	
						</div>
						<div class="form-group col-md-4 col-xs-4">
							<input type="submit" value="Buscar Artigos" class="btn btn-primary  btn-block no-radius btn-galeria">
						</div>	
					</form>
					<div class="card-deck">
					<?php
						if(isset($_GET['edicao'])):

							$artigos = $controller->getArtigos($_GET['edicao']);
							foreach ($artigos as $artigo):
					?>
					
					  	<div class="card col-lg-6 col-md-6 col-sm-12 col-12 border-gray">
					    	<div class="card-block">
					      		<h4 class="card-title titulo-artigo"><?=$artigo->getTitulo()?></h4>
					      		<hr>
					      		<p class="card-text resumo-artigo"><?=$artigo->getResumo()?></p>
								<a href="admin/artigos/<?=$artigo->getArquivo()?>" class="btn btn-block btn-primary btn-artigo" target="_blanck">
									<span class="fa fa-download fa-6"></span>
									Download
								</a>
					    	</div>
					  	</div>
					<?php
							endforeach;
						endif;
					?>
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
    <script src="admin/components/jquery/jquery-3.2.1.min.js"></script>
    <script src="admin/components/popper/popper.min.js"></script>
    <script src="admin/components/bootstrap-4.0.1/js/bootstrap.min.js"></script>
    <script src="admin/components/fancybox-master/jquery.fancybox.min.js"></script>
    <script src="js/galeria.js"></script>
    
</body>
</html>