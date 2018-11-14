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
					
		<div class="c-t">
		<h2><b>Educação profissional</b></h2>
			<p>Educação Profissional é uma Modalidade de Ensino encontrada na Educação Básica, sua ofertase dá através de Cursos Técnicos, de Formação Inicial e Continuada.</p>
		</div>

		<div class="c-t">
		<h2><b>Como funciona</b></h2>
		<p>Os cursos Técnicos são cursos de longa duração, podendo ter carga horária mínima de 800 horas a 3333 horas, dependendo da forma ofertada. Ao seu término o aluno recebe um Diploma que lhe confere a Habilitação Técnica cursada juntamente com o Ensino Médio ou após a conclusão do mesmo.</p>
		</div>

		<div id="imagens">
			<img src="http://i65.tinypic.com/2z50k88.jpg">
			<img src="http://i63.tinypic.com/1037o7c.jpg">
			<img src="http://i68.tinypic.com/2rrm3xs.jpg">
			<br/>
			<img src="http://i63.tinypic.com/11w8pkm.jpg">
			<img src="http://i63.tinypic.com/2mpistt.jpg">
			<img src="http://i63.tinypic.com/6pakwz.jpg">
			<br/>

		</div>
<!--
		<button>Ver foto</button>
		<button>Equipe</button>
		<button>Ver vídeos</button>
-->

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