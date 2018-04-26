<?php
	// Inclui o arquivo com o sistema de segurança
	include("includes/seguranca.php");
	// Chama a função que protege a página
	protegePagina();
	date_default_timezone_set('America/Campo_Grande');
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
			<?php
				include("includes/menu.php");
			?>
			<section class="container">
				<h3><?php echo "Bem Vindo, " . $_SESSION['usuarioNome'] . "!";?></h3>
				<div class="thumbnail" id="conteudo">
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
				</div>
			</section>
			
				
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