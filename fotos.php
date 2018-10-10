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
			<h6 class="navegacao">Você está em: Galeria de Medias</h6>
			<div class="border-gray">
				<h1 class="div-label div-label-margin">Galeria de Medias</h1>

				<div class="col-md-12 box-padrao">
					<form method="GET" action="" class="row">

						<div class="form-group col-md-8 col-xs-8">
							<select class="form-control no-radius" name="categoria" id=categoria>
								<option value="">Selecione uma Galeria de Medias</option>
								<?php  
									$categorias = $controller->getCategoriasMedias();
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
						<div class="form-group col-md-4 col-xs-4">
							<input type="submit" value="Buscar Imagens" class="btn btn-primary  btn-block no-radius btn-galeria">
						</div>	
					</form>
					<div class="row">
						<?php
							if(isset($_GET['categoria'])):

								$medias = $controller->getMedias($_GET['categoria']);
								foreach ($medias as $media):
						?>
						<div class="col-lg-2 col-md-3 col-sm-4 col-6">
							<a href="admin/imagens/galerias/<?=$media->getUrl()?>" data-fancybox="group" data-type="image" data-caption="<?=$media->getTitulo()?>" class="thumbnail">
						     	<img src="admin/imagens/galerias/<?=$media->getUrl()?>" class="thumbnail img-fluid img-galeria" alt="<?=$media->getAlt()?>" />
						  	</a>							
						</div>
						<?php
								endforeach;
							endif;
						?>
					</div>
					<div class="row">
										
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