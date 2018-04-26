<?php
	require_once '/admin/includes/init.php';
	include_once LIB_CONTROLLER.DS.'EsporteController.class.php';
	include_once LIB_MODEL.DS.'Aluno.class.php';

	$controller = new EsporteController();
?>
<!DOCTYPE html>
<html>
<head>
	<title>..:: EEWBS ::..</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Site institucional da Escola Estadual Waldemir Barros da Silva" />
    <meta name="author" content="Marcelo Figueiredo Terenciani" />
    <meta name="robots" content="noindex">
    
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
						<a class="nav-link text-uppercase text-expanded" href="profissional.php">EDUCAÇÃO PROFISSIONAL</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="equipe.php">EQUIPE WBS</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="noticias.php">NOTÍCIAS</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded active" href="contato.php">CONTATO</a>
					</li>
				</ul>
			</div>
		</div>
	</nav> <!--MenuEscola-->
	<div id="conteudo" class="background-white">
		<div class="container">
			<h6 class="navegacao">Você está em: Adminstração Prática</h6>
			<div class="row border-gray">
				<h1 class="div-label div-label-margin">Mudança dos Útimos</h1>
				
				<div class="col-md-12">
					<?php
						if(isset($_POST['volei'])){
							$mensagem = $controller->atualizarUltimo($_POST['codigovolei'], "VOLEI");
						}
						if(isset($_POST['futebol'])){
							$mensagem = $controller->atualizarUltimo($_POST['codigofutebol'], "FUTEBOL");
						}
    				?>
				</div>
				<div class="col-md-6">
					<h4 class="label-contato">Mudar Último Vôlei</h4>
					<form id="form-volei" name="form-volei" method="POST">
						<div class="form-group">
							<input placeholder="Código" name="codigovolei" type="text" id="codigovolei" class="form-control no-radius" required>
						</div>
						
						<input type="submit" name="volei" value="Definir Último no Vôlei" class="btn btn-primary no-radius btn-contato">
					</form>
					<?php
						if (isset($mensagem)):
					?>
							<script type="text/javascript">
								alert('Definição Realizada com Sucesso!');
							</script>
					<?php
						unset($mensagem);
						endif;
					?>
				</div>
				<div class="col-md-6">
					<h4 class="label-contato">Mudar Último Futebol</h4>
					<form id="form-futebol" name="form-futebol" method="POST">
						<div class="form-group">
							<input placeholder="Código" name="codigofutebol" type="text" id="codigofutebol" class="form-control no-radius" required>
						</div>
						
						<input type="submit" name="futebol" value="Definir Último no Futebol" class="btn btn-primary no-radius btn-contato">
					</form>
					<?php
						if (isset($mensagem)):
					?>
							<script type="text/javascript">
								alert('Definição Realizada com Sucesso!');
							</script>
					<?php
						unset($mensagem);
						endif;
					?>
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
    <script src="js/contato.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>    
</body>
</html>