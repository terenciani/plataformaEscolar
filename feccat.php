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
			<h6 class="navegacao">Você está em: Anais da FECCAT</h6>
			<div class="border-gray">
				<?php
					if(isset($_GET['edicao']))
						$edicao = $_GET['edicao'];
					else
						$edicao = "";
				?>
				<h1 class="div-label div-label-margin">Galeria de Artigos da FECCAT <?=$edicao?></h1>

				<div class="col-md-12 box-padrao">
					<form method="GET" action="" class="row">

						<div class="form-group col-md-8 col-xs-8">
							<select class="form-control no-radius" name="edicao" id=edicao>
								<option value="">Selecione a Edição da FECCAT</option>
								<option value="2016">I Feira Científica Cultural Artística e Tecnológica (2016)</option>
								<option value="2017">II Feira Científica Cultural Artística e Tecnológica (2017)</option>
							</select>	
						</div>
						<div class="form-group col-md-4 col-xs-4">
							<input type="submit" value="Buscar Artigos" class="btn btn-primary  btn-block no-radius btn-galeria">
						</div>	
					</form>
					<div class="card-deck">
					<?php
						if(isset($_GET['edicao'])):

							$artigos = $controller->getArtigos($_GET['edicao']);
							foreach ($artigos as $artigo):
					?>
					
					  	<div class="card col-lg-6 col-md-6 col-sm-12 col-12 border-gray">
					    	<div class="card-block">
					      		<h4 class="card-title titulo-artigo"><?=$artigo->getTitulo()?></h4>
					      		<hr>
					      		<p class="card-text resumo-artigo"><?=$artigo->getResumo()?></p>
								<a href="admin/artigos/<?=$artigo->getArquivo()?>" class="btn btn-block btn-primary btn-artigo" target="_blanck">
									<span class="fa fa-download fa-6"></span>
									Download
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
    <script src="js/galeria.js"></script>
    
</body>
</html>