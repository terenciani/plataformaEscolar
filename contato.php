<?php
	include_once '/admin/controller/ContatoController.class.php';
	$controller = new ContatoController();
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
			<h6 class="navegacao">Você está em: Contato</h6>
			<div class="row border-gray">
				<h1 class="div-label div-label-margin">Canais de Atendimento</h1>
				<div class="col-md-12">
					<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14943.947980691068!2d-54.5814073649684!3d-20.547712999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf42a2e93ffb9144b!2sEscola+Estadual+Waldemir+Barros+da+Silva!5e0!3m2!1spt-BR!2sus!4v1509966968771" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-md-12">
					<?php
						if(isset($_POST['submit'])){
							echo $controller->enviarEmail($_POST);
						}
    				?>
				</div>
				<div class="col-md-5">
					<?php 
						$instituicao = $controller->getInstituicao();
					?>
					<label class="label-contato">Informações de Contato</label>
					<div class="row">
						<div class="col-md-2">
							<label class="label-info">Endereço</label>
						</div>

						<div class="col-md-10">
							<span class="span-contato"><?=$instituicao->getEndereco()?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<label class="label-info">E-mail</label>
						</div>

						<div class="col-md-10">
							<span class="span-contato"><?=$instituicao->getEmail()?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<label class="label-info">Telefone</label>
						</div>

						<div class="col-md-10">
							<span class="span-contato">(67) <?=$instituicao->getTelefone()?> / (67) <?=$instituicao->getTelefoneAlternativo()?></span>
						</div>
					</div>
					<hr class="linha-contato">
					<label class="label-contato">Redes Sociais</label>
					<div class="midias midias-contato">
						<ul>
							<li>
								<a href="<?=$instituicao->getFacebook()?>" target="_new" alt="Facebook" title="Facebook">
									<i class="fa fa-facebook icon-midia" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="<?=$instituicao->getYoutube()?>" target="_new" alt="YouTube" title="YouTube">
									<i class="fa fa-youtube-play icon-midia" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-md-7">
					<label class="label-contato">Entre em Contato Conosco</label>
					<form id="form-contato" name="form-contato" method="POST">
						<div class="form-group">
							<input placeholder="Nome" name="nome" type="text" id="nome" class="form-control no-radius" required>
						</div>
						<div class="form-group">
							<input placeholder="E-mail" name="email" type="email" id="email" class="form-control no-radius" required>
						</div>
						<div class="form-group">
							<textarea placeholder="Mensagem" name="mensagem" rows="7" id="mensagem" class="form-control no-radius" required></textarea>
						</div>
						<div class="g-recaptcha" id="captcha" data-sitekey="6LdfjzcUAAAAAI015lg3aXVnIESQMWOjADOjyOdM"></div>
						<input type="submit" name="submit" value="Enviar Mensagem" class="btn btn-primary no-radius btn-contato">
					</form>
					
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