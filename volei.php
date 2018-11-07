<?php
	require_once 'admin/includes/init.php';
	include_once LIB_CONTROLLER.DS.'EsporteController.class.php';
	include_once LIB_MODEL.DS.'Aluno.class.php';

	$controller = new EsporteController();
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
			<h6 class="navegacao">Você está em: Vôlei</h6>
			<div class="row border-gray">
				<h1 class="div-label div-label-margin">Vôlei</h1>
				
				<div class="col-md-12">
					<?php
						if(isset($_POST['submit'])){
							$mensagem = $controller->inscrever($_POST, "VOLEI");
						}
    				?>
				</div>
				<div class="col-md-6">
					<h4 class="label-contato">Inscreva-se</h4>
					<form id="form-volei" name="form-volei" method="POST">
						<div class="form-group">
							<input placeholder="Nome" name="nome" type="text" id="nome" class="form-control no-radius" required>
						</div>
						<div class="form-group">
							<select class="form-control no-radius" required name="turma">
								<option selected value="">Selecione sua turma</option>
								<option value="1º A">1º A</option>
								<option value="1º B">1º B</option>
								<option value="1º C">1º C</option>
								<option value="1º EMII A">1º A Integrado</option>
								<option value="1º EMII B">1º B Integrado</option>
								<option value="1º EMII C">1º C Integrado</option>
								<option value="2º A">2º A</option>
								<option value="2º B">2º B</option>
								<option value="2º C">2º C</option>
								<option value="2º D">2º D</option>
								<option value="2º EMII A">2º A Integrado</option>
								<option value="2º EMII B">2º B Integrado</option>
								<option value="3º A">3º A</option>
								<option value="3º EMII A">3º A Integrado</option>
								<option value="Professor">Professor</option>
							</select>
						</div>
						<input type="submit" name="submit" value="Entrar na Lista" class="btn btn-primary no-radius btn-contato">
					</form>
					<?php
						if (isset($mensagem)):
					?>
							<script type="text/javascript">
								alert('Inscrição Realizada com Sucesso!');
							</script>
					<?php
						endif;
					?>
				</div>
				<div class="col-md-6">
					<h4 class="label-contato">Ordem de Jogo</h4>
					<table class="table table-striped">
						<thead>
							<th>#</th>
							<th>Nome</th>
							<th>Turma</th>
							<th>#</th>
						</thead>
						<tbody>
							<?php
								$alunos = $controller->getListaPorEsporte("VOLEI");
								foreach ($alunos as $aluno):
									if($aluno->getUltimo()==1){
										$classe = "checked";
									}else{
										$classe = "";
									}
							?>
								<tr class="<?=$classe?>">
									<td>
										<?=$aluno->getId_aluno()?>
									</td>
									<td>
										<?=$aluno->getNome()?>
									</td>
									<td>
										<?=$aluno->getTurma()?>
									</td>
									<td>
										<input type="radio" name="ultimo">
									</td>
								</tr>
							<?php
								endforeach;
							?>
						</tbody>
					</table>
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