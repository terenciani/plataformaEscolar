<?php
	include_once("controller/LoginController.class.php");
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
		<link href="js/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/adm-estilo.css" type="text/css" />
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	</head>
	<body>
		<div class="container-fluid">
			<section class="container">
				
				<div class="thumbnail" id="conteudo">
					<h3><?php echo "Bem Vindo, " . $_SESSION['nome_usuario'] . "!";?></h3>
					<div class="col-sm-2 thumbnail item-menu">
						<a href="banner_principal.php" title="Alterações de Banners e Mural" >Gerenciar <br /> Banners</a>
					</div>
					<div class="col-sm-2 thumbnail item-menu">
						<a href="noticia_principal.php" title="Alterações nas Notícias" >Gerenciar <br /> Notícias </a>
					</div>
					<div class="col-sm-2 thumbnail item-menu">
						<a href="equipe_principal.php" title="Alterações na Equipe" >Gerenciar <br /> Equipe </a>
					</div>
					<div class="col-sm-2 thumbnail item-menu">
						<a href="foto_principal.php" title="Alterações nas Fotos" >Gerenciar <br /> Fotos </a>
					</div>
					<div class="col-sm-2 thumbnail item-menu">
						<a href="artigo_principal.php" title="Alterações nos Artigos" >Gerenciar <br /> Artigos </a>
					</div>
					
					<div class="col-sm-2 thumbnail item-menu">
						<a href="AlterarDadosEscola.php"  title="Alterar Dados da Escola" >Gerenciar <br /> Dados Da Escola </a>
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
		<?php
			include("includes/javascript.php");
		?>	
	</body>
</html>