<?php
	require_once 'admin/includes/init.php';
	include_once LIB_CONTROLLER.DS.'ProfissionalizanteController.class.php';
	$controller = new ProfissionalizanteController();
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
			<h6 class="navegacao">Você está em: Educação Profissional</h6>
			<div class="pag-noticias border-gray">
				<h1 class="div-label div-label-margin">Educação Profissional</h1>

	<div id="Page-Pro">
					
		<h2>O que é educação profissional</h2>
		<div class="c-t">
			<p>A Educação Profissional é uma Modalidade de Ensino encontrada na Educação Básica, sua oferta se dá através de Cursos Técnicos, de Formação Inicial e Continuada.</p>
		</div>

		<h2>Como funciona</h2>
		<div class="c-t">
			<p>Educação Profissional é uma Modalidade de Ensino encontrada na Educação Básica, sua ofertase dá através de Cursos Técnicos, de Formação Inicial e Continuada</p>
		</div>

		<h2>Histórico</h2>
		<div class="c-t">
			<p>
				
			</p>
		</div>

		<div id="imagens">

			<img src="http://www.rivertec.com.br/imagem/1158-teste-codigo-01teste-01.jpg">
			<img src="http://www.rivertec.com.br/imagem/1158-teste-codigo-01teste-01.jpg">
			<img src="http://www.rivertec.com.br/imagem/1158-teste-codigo-01teste-01.jpg">
			<br/>
			<img src="http://www.rivertec.com.br/imagem/1158-teste-codigo-01teste-01.jpg">
			<img src="http://www.rivertec.com.br/imagem/1158-teste-codigo-01teste-01.jpg">
			<img src="http://www.rivertec.com.br/imagem/1158-teste-codigo-01teste-01.jpg">
			<br/>

		</div>

		<button>Ver foto</button>
		<button>Equipe</button>
		<button>Ver vídeos</button>

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
</body>
</html>