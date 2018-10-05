<?php
	require_once 'admin/includes/init.php';
	include_once LIB_CONTROLLER.DS.'InstituicaoController.class.php';

	$controller = new InstituicaoController();
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
	<div class="container">
		<?php 
			$instituicao = $controller->getInstituicao();

		?>
		<h6 class="navegacao">Você está em: Institucional</h6>
		<div class="institucional border-gray">
			<h1 class="div-label">Nossa Missão</h1>

			<div class="texto-institucional">
				<?=$instituicao->getMissao()?>
			</div>
		</div>
		<div class="institucional border-gray">
			<h1 class="div-label">Nossa Visão</h1>
			<div class="texto-institucional">
				<?=$instituicao->getVisao()?>
			</div>
		</div>	
		<div class="institucional border-gray">
			<h1 class="div-label">Nossos Valores</h1>
			<div class="texto-institucional">
				<?=$instituicao->getValores()?>
			</div>
		</div>
		
		<div class="institucional border-gray">
			<h1 class="div-label">Conheça Nossa História</h1>
			<div class="texto-institucional historico">	
				<?=$instituicao->getHistorico()?>
			</div>
			<p class="alteracao"> Texto alterado em: <?=$instituicao->getData()?> </p>
		</div>
	</div>
	<footer class="rodape rodape-institucional">
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