<?php
	require_once 'admin/includes/init.php';
	include_once LIB_CONTROLLER.DS.'MediaController.class.php';

	$controller = new MediaController();
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
	<div id="conteudo" class="background-white">
		<div class="container">
			<h6 class="navegacao">Você está em: Galeria de Vídeos</h6>
			<div class="border-gray">
				<h1 class="div-label div-label-margin">Galeria de Vídeos</h1>

				<div class="col-md-12 box-padrao">
					<form method="GET" action="" class="row">
						<div class="form-group col-lg-6 col-md-8 col-xs-6 form-videos">
							<select class="form-control no-radius" name="categoria" id=categoria>
								<option value="">Selecione uma Galeria de Vídeos</option>
								<?php  
									$categorias = $controller->getCategoriasVideos();
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
						<div class="form-group col-lg-2 col-md-4 col-xs-2 form-videos">
							<input type="submit" value="Buscar Vídeos" class="btn btn-primary  btn-block no-radius btn-galeria">
						</div>
						<div class="col-lg-4 col-md-12 col-xs-4 canal">
							<p class="inscricao"> Inscreva-se em nosso canal no Youtube</p>
							<div class="g-ytsubscribe" data-channel="eewbs1993" data-layout="full" data-count="default"></div>
						</div>
					</form>
					
					<div class="row">
						<?php
							if(isset($_GET['categoria'])):

								$medias = $controller->getMedias($_GET['categoria']);
								foreach ($medias as $media):
						?>
						<div class="col-lg-2 col-md-3 col-sm-4 col-8 video-galeria-xs">
							<div class="video-galeria">
								<a class="fancybox" data-type="iframe" href="<?=$media->getUrl()?>?autoplay=1" title="<?=$media->getTitulo()?>">
									<i class="fa fa-play-circle-o fa-6" aria-hidden="true"></i>
									<span class="label-video"><?=$media->getDescricao()?></span>
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
    <script src="https://apis.google.com/js/platform.js"></script>
    <script src="js/galeria.js"></script>
    
</body>
</html>