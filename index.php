<?php
	require_once 'admin/includes/init.php';
	include_once LIB_CONTROLLER.DS.'IndexController.class.php';
	
	$controller = new IndexController();
	$instituicao = $controller->getInstituicao();
?>
<!DOCTYPE html>
<html>
<?php
	include_once 'includes/head.php';
?>
<body>
	<?php
		include_once 'includes/menu.php';
	?>
	<div class="banner-rotativo">
		<div class="container">
			<h6 class="navegacao">Você está em: Home</h6>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<?php
						$classe="active";
						$banners = $controller->getBannerCarousel();
						$i=0;
	 					foreach ($banners as $banner):
	 						echo "<li data-target='#carouselExampleIndicators' data-slide-to='$i' class='$classe'></li>";
	 						$i++;
							$classe="";
						endforeach;
					?>
				</ol>
				<div class="carousel-inner">
					<?php
						$classe="active";
						$banners = $controller->getBannerCarousel();
	 					foreach ($banners as $banner):
			 				?>
							<div class="carousel-item <?=$classe?>">
								<a href="<?=$banner->getLink()?>">
									<img class="d-block w-100" src="admin/imagens/banners/<?=$banner->getImagem()?>" alt="<?=$banner->getAlt()?>" title="<?=$banner->getTitulo()?>" />
								</a>
							</div>
							<?php
							$classe="";
						endforeach;
					?>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div><!--Banner Rotativo-->

	<div class="noticias">
		<div class="container">
			<div class="row secao-noticias">
				<?php
					$segunda=1;
					$noticias = $controller->getNoticiasPrincipais();
 					foreach ($noticias as $noticia):
 						?>
	 					<div class="col-md-5 col-sm-6 col-xs-6 xs-noticia">
							<div class="noticia">
								<div class="cartao-noticia">
									<a href="noticias.php?id=<?= $noticia->getId_noticia() ?>" class="imagem-noticia img-fluid">
										<img src="admin/imagens/noticias/<?= $noticia->getImagem() ?>" alt="Notícia Principal" title="">
									</a>
									<div class="detalhes-noticia">
										<h3 class="titulo-noticia"><?= $noticia->getTitulo() ?></h3>
										<hr class="hr-noticia" />
										<h1 class="chamada-noticia"><?= $noticia->getChamada() ?></h1>
									</div>
								</div>
		
							</div>
						<?php
						if($segunda==2){
						?>
							<div class="mais-noticias">
								<a class="mais-noticias-link" href="noticias.php"> + Noticias </a>
							</div>
						<?php
						}else{
							$segunda=2;
						}
					echo "</div>";
 					endforeach;
				?>	
				<div class="col-md-2 col-sm-12 mural">
					<div class="border-gray"> 
						<h1 class="div-label">Mural</h1>
						<?php
							$bannersMural = $controller->getBannersMural();
							//var_dump($bannersMural);
	 						foreach ($bannersMural as $bannerMural):
	 							?>
						<div class="item-mural border-gray">
							<a href="<?=$bannerMural->getLink()?>">
								<h6 class="data-item-mural"><?=$bannerMural->getData()?></h6>
								<img class="img-fluid img-item-mural" src="admin/imagens/banners/<?=$bannerMural->getImagem()?>" title="<?=$bannerMural->getTitulo()?>" alt="<?=$bannerMural->getAlt()?>" />
							</a>
						</div>
						<?php
							endforeach;
						?>
					</div>
				</div>
			</div>
		</div>
	</div><!--noticias-->

	<div class="promocional">
		<div class="container">
			<div class="banner-promocional">
				<?php
					$banner = $controller->getBannerPromocional();
 				?>
					<a href="<?=$banner->getLink()?>">
						<img class="img-fluid" src="admin/imagens/banners/<?=$banner->getImagem()?>" alt="<?=$banner->getAlt()?>" title="<?=$banner->getTitulo()?>" />
					</a>

			</div>
		</div>
	</div><!--banner-promocional-->


	<div class="galeria">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="border-gray">
						<a href="fotos.php" title="Ir para a Galeria de Fotos">
							<h1 class="div-label">Galeria de Fotos</h1>
							<span class="fa fa-camera icone-galeria"></span>
						</a>	
					</div>
				</div>

				<div class="col-sm-4 galeria-top">
					<div class="border-gray">
						<a href="videos.php" title="Ir para Galeria de Vídeos">
							<h1 class="div-label">Galeria de Vídeos</h1>
							<span class="fa fa-video-camera icone-galeria"></span>
						</a>
					</div>
				</div>

				<div class="col-sm-4 galeria-top">
					<div class="border-gray">
						<a href="feccat.php" title="Ir para Anais da FECCAT">
							<h1 class="div-label">Anais da FECCAT</h1>
							<img src="admin/imagens/feccat.png" class="img-fluid icone-galeria"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div><!--galeria-->

	<footer class="rodape">
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
