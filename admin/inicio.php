<?php
	require_once 'includes/init.php';
	include_once LIB_CONTROLLER.DS.'LoginController.class.php';

	$controller = new LoginController();



	$controller->verificarLogado();

	if(isset($_GET['sair']))
		$controller->deslogar();		
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>..:: Admin WBS ::..</title>
		
		<!--  Nucleo do jquery -->
		<link href="components/bootstrap-4.0.1/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/adm-estilo.css" type="text/css" />
		<link rel="stylesheet" href="css/jquery-confirm.css" type="text/css">
		<link rel="shortcut icon" type="image/png" href="imagens/favicon.png"/>
		<?php
    include_once("includes/head.php");
  ?>
	</head>
	<body class="fixed-nav sticky-footer bg-dark" id="page-top">
		<?php
    include_once("includes/menu.php");
  ?>
		<div class="container-fluid">
			<section class="container">
			<
				<div class="thumbnail" id="conteudo">
					<h3><?php echo "Bem Vindo, " . $_SESSION['nome_usuario'] . "!";?></h3>
					<div class="col-2 thumbnail item-menu">
						<a href="banner.php" title="Alterações de Banners e Mural" >Gerenciar <br /> Banners</a>
					</div>
					<div class="col-sm-2 thumbnail item-menu">
						<a href="noticia.php" title="Alterações nas Notícias" >Gerenciar <br /> Notícias </a>
					</div>

					<div class="col-sm-2 thumbnail item-menu">
						<a href="foto_principal.php" title="Alterações nas Fotos" >Gerenciar <br /> Fotos </a>
					</div>
					<div class="col-sm-2 thumbnail item-menu">
						<a href="artigo_principal.php" title="Alterações nos Artigos" >Gerenciar <br /> Artigos </a>
					</div>
					<div class="col-sm-2 thumbnail item-menu">
						<a href="escola.php" title="Alterar Dados da Escola" >Gerenciar <br /> Dados Da Escola </a>
					</div>

					<div class="col-sm-2 thumbnail item-menu">
						<a href="equipe.php" title="Alterar Dados da Equipe" >Gerenciar <br /> Equipe </a>
					</div>
				</div>
			</section>
			<a href="?sair=true">Sair</a>
				
			<footer class="row footer">
				Escola Estadual Waldemir Barros da Silva <br />
				Endereço: R. Palmácia - Moreninha II, Campo Grande - MS, 79065-140 </br>
				Telefone:(67) 3314-9014
			</footer>	
			<!-- END: footer -->
		</div>
		<script src="components/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="components/bootstrap-4.0.1/js/bootstrap.min.js"></script>
		<script src="components/jquery-confirm/jquery-confirm.js" type="text/javascript"></script>
		<script src="components/bootstrap-datepicker-1.6.1-dist/js/bootstrap-datepicker.min.js"></script>
		<script src="components/bootstrap-datepicker-1.6.1-dist/locales/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
		<script src="js/script.js"></script>
	</body>
</html>