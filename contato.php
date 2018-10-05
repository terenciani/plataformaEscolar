<?php
	require_once 'admin/includes/init.php';
	include_once LIB_CONTROLLER.DS.'ContatoController.class.php';
	
	$controller = new ContatoController();
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
			<h6 class="navegacao">Você está em: Contato</h6>
			<div class="row border-gray">
				<h1 class="div-label div-label-margin">Canais de Atendimento</h1>
				<div class="col-md-12">
					<iframe id="mapa" src="<?=$instituicao->getMapa()?>" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-md-12">
					<?php
						if(isset($_POST['submit'])){
							echo $controller->enviarEmail($_POST);
						}
    				?>
				</div>
				<div class="col-md-5">
					<?php 
						$instituicao = $controller->getInstituicao();
					?>
					<label class="label-contato">Informações de Contato</label>
					<div class="row">
						<div class="col-md-2">
							<label class="label-info">Endereço</label>
						</div>

						<div class="col-md-10">
							<span class="span-contato"><?=$instituicao->getEndereco()?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<label class="label-info">E-mail</label>
						</div>

						<div class="col-md-10">
							<span class="span-contato"><?=$instituicao->getEmail()?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<label class="label-info">Telefone</label>
						</div>

						<div class="col-md-10">
							<span class="span-contato">(67) <?=$instituicao->getTelefone()?> / (67) <?=$instituicao->getTelefoneAlternativo()?></span>
						</div>
					</div>
					<hr class="linha-contato">
					<label class="label-contato">Redes Sociais</label>
					<div class="midias midias-contato">
						<ul>
							<li>
								<a href="<?=$instituicao->getFacebook()?>" target="_new" alt="Facebook" title="Facebook">
									<i class="fa fa-facebook icon-midia" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="<?=$instituicao->getYoutube()?>" target="_new" alt="YouTube" title="YouTube">
									<i class="fa fa-youtube-play icon-midia" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-md-7">
					<label class="label-contato">Entre em Contato Conosco</label>
					<form id="form-contato" name="form-contato" method="POST">
						<div class="form-group">
							<input placeholder="Nome" name="nome" type="text" id="nome" class="form-control no-radius" required>
						</div>
						<div class="form-group">
							<input placeholder="E-mail" name="email" type="email" id="email" class="form-control no-radius" required>
						</div>
						<div class="form-group">
							<textarea placeholder="Mensagem" name="mensagem" rows="7" id="mensagem" class="form-control no-radius" required></textarea>
						</div>
						<div class="g-recaptcha" id="captcha" data-sitekey="6LdfjzcUAAAAAI015lg3aXVnIESQMWOjADOjyOdM"></div>
						<input type="submit" name="submit" value="Enviar Mensagem" class="btn btn-primary no-radius btn-contato">
					</form>
					
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
    <script src="js/contato.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>    
</body>
</html>