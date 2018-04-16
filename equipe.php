<?php
	include_once("controller/EquipeController.class.php");
	$controller = new EquipeController();
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
						<a class="nav-link text-uppercase text-expanded active" href="equipe.php">EQUIPE WBS</a>
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
			<h6 class="navegacao">Você está em: Equipe</h6>
			<div class="row border-gray">
				<h1 class="div-label div-label-margin">Nossa Equipe</h1>
				<div class="col-md-12">
					<?php
						$banner = $controller->getBannerEquipe();
	 				?>
					<img class="img-fluid img-equipe" src="imagens/banners/<?=$banner->getImagem()?>" alt="<?=$banner->getAlt()?>" title="<?=$banner->getTitulo()?>" />
				</div>
				
				<div class="col-md-6">
					<div class="card cartao-equipe">
						<div class="card-body">
						    <a href="#pedagogica" id="link-pedagogico">
						    	Equipe Pedagógica <i class="fa fa-plus-circle fa-4 pull-right" aria-hidden="true"></i>
						    </a>
					  	</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card cartao-equipe">
						<div class="card-body">
					  		<a href="#adminstrativa" class="equipe-ativa" id="link-administrativo">
					    		Equipe Adminstrativa <i class="fa fa-plus-circle fa-4 pull-right" aria-hidden="true"></i>
					    	</a>
					  	</div>
					</div>
				</div>
			</div>
			<div class="row border-gray div-noventa" id="pedagogica">
				<?php
					$equipePedagogica = $controller->getEquipePedagogica();
					//var_dump($bannersMural);
					foreach ($equipePedagogica as $professor):
				?>
				<div class="col-md-2 col-sm-3 col-6 parte-equipe">
					<div class="equipe-item">
						<img class="img-fluid img-circle" src="imagens/equipe/<?=$professor->getImagem()?>" title="Foto Pessoal" alt="Foto Pessoal" />
						<h6 class="nome-equipe"><?=$professor->getNomeSobrenome()?></h6>
						<p class="funcao-equipe"><?=$professor->getFuncao().' - '.$professor->getAtuacao()?></p>
					</div>
				</div>
				<?php
					endforeach;
				?>	
			</div>
			<div class="row border-gray div-noventa" id="administrativa">
				<?php
					$equipeAdministrativa = $controller->getEquipeAdministrativa();
					//var_dump($bannersMural);
					foreach ($equipeAdministrativa as $adminstrativo):
				?>
				<div class="col-md-2 col-sm-3 col-6 parte-equipe">
					<div class="equipe-item">
						<img class="img-fluid img-circle" src="imagens/equipe/<?=$adminstrativo->getImagem()?>" title="Foto Pessoal" alt="Foto Pessoal" />
						<h6 class="nome-equipe"><?=$adminstrativo->getNome()?></h6>
						<p class="funcao-equipe"><?=$adminstrativo->getFuncao().' - '.$adminstrativo->getAtuacao()?></p>
					</div>
				</div>
				<?php
					endforeach;
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
    <script src="components/jquery/jquery-3.2.1.min.js"></script>
    <script src="components/popper/popper.min.js"></script>
    <script src="components/bootstrap-4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="js/equipe.js"></script>
    
</body>
</html>