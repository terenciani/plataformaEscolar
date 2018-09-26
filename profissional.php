<?php
	require_once 'admin/includes/init.php';
	include_once LIB_CONTROLLER.DS.'ProfissionalizanteController.class.php';
	//$controller = new ProfissionalController();
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
						<a class="nav-link text-uppercase text-expanded active" href="profissional.php">EDUCAÇÃO PROFISSIONAL</a>
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
			<h6 class="navegacao">Você está em: Educação Profissional</h6>
			<div class="pag-noticias border-gray">
				<h1 class="div-label div-label-margin">Educação Profissional</h1>

	<div id="Page-Pro">
					
		<h2>O que é educação profissional</h2>
		<div class="c-t">
			<p>A Educação Profissional é uma Modalidade de Ensino encontrada na Educação Básica, sua oferta se dá através de Cursos Técnicos, de Formação Inicial e Continuada.</p>
		</div>

		<h2>Como funciona</h2>
		<div class="c-t">
			<p></p>
		</div>

		<h2>Histórico</h2>
		<div class="c-t">
			<p></p>
		</div>

		<div id="imagens">

			<img src="http://www.rivertec.com.br/imagem/1158-teste-codigo-01teste-01.jpg">
			<img src="http://www.rivertec.com.br/imagem/1158-teste-codigo-01teste-01.jpg">
			<img src="http://www.rivertec.com.br/imagem/1158-teste-codigo-01teste-01.jpg">
			<br/>
			<img src="http://www.rivertec.com.br/imagem/1158-teste-codigo-01teste-01.jpg">
			<img src="http://www.rivertec.com.br/imagem/1158-teste-codigo-01teste-01.jpg">
			<img src="http://www.rivertec.com.br/imagem/1158-teste-codigo-01teste-01.jpg">
			<br/>

		</div>

		<button>Ver foto</button>
		<button>Equipe</button>
		<button>Ver vídeos</button>

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
</body>
</html>