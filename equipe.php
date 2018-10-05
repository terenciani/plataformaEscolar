<?php
	require_once 'admin/includes/init.php';
	include_once LIB_CONTROLLER.DS.'EquipeController.class.php';
	
	$controller = new EquipeController();
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
			<h6 class="navegacao">Você está em: Equipe</h6>
			<div class="row border-gray">
				<h1 class="div-label div-label-margin">Nossa Equipe</h1>
				<div class="col-md-12">
					<?php
						$banner = $controller->getBannerEquipe();
	 				?>
					<img class="img-fluid img-equipe" src="admin/imagens/banners/<?=$banner->getImagem()?>" alt="<?=$banner->getAlt()?>" title="<?=$banner->getTitulo()?>" />
				</div>
				
				<div class="col-md-6">
					<div class="card cartao-equipe">
						<div class="card-body">
						    <a href="#pedagogica" id="link-pedagogico">
						    	Equipe Pedagógica <i class="fa fa-plus-circle fa-4 pull-right" aria-hidden="true"></i>
						    </a>
					  	</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card cartao-equipe">
						<div class="card-body">
					  		<a href="#adminstrativa" class="equipe-ativa" id="link-administrativo">
					    		Equipe Adminstrativa <i class="fa fa-plus-circle fa-4 pull-right" aria-hidden="true"></i>
					    	</a>
					  	</div>
					</div>
				</div>
			</div>
			<div class="row border-gray div-noventa" id="pedagogica">
				<?php
					$equipePedagogica = $controller->getEquipePedagogica();
					//var_dump($bannersMural);
					foreach ($equipePedagogica as $professor):
				?>
				<div class="col-md-2 col-sm-3 col-6 parte-equipe">
					<div class="equipe-item">
						<img class="img-fluid img-circle" src="admin/imagens/equipe/<?=$professor->getImagem()?>" title="Foto Pessoal" alt="Foto Pessoal" />
						<h6 class="nome-equipe"><?=$professor->getNomeSobrenome()?></h6>
						<p class="funcao-equipe"><?=$professor->getFuncao().' - '.$professor->getAtuacao()?></p>
					</div>
				</div>
				<?php
					endforeach;
				?>	
			</div>
			<div class="row border-gray div-noventa" id="administrativa">
				<?php
					$equipeAdministrativa = $controller->getEquipeAdministrativa();
					//var_dump($bannersMural);
					foreach ($equipeAdministrativa as $adminstrativo):
				?>
				<div class="col-md-2 col-sm-3 col-6 parte-equipe">
					<div class="equipe-item">
						<img class="img-fluid img-circle" src="admin/imagens/equipe/<?=$adminstrativo->getImagem()?>" title="Foto Pessoal" alt="Foto Pessoal" />
						<h6 class="nome-equipe"><?=$adminstrativo->getNome()?></h6>
						<p class="funcao-equipe"><?=$adminstrativo->getFuncao().' - '.$adminstrativo->getAtuacao()?></p>
					</div>
				</div>
				<?php
					endforeach;
				?>	
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
    <script src="js/equipe.js"></script>
    
</body>
</html>