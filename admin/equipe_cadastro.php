<?php
	// Inclui o arquivo com o sistema de segurança
	include("includes/seguranca.php");
	// Chama a função que protege a página
	protegePagina();
	date_default_timezone_set('America/Campo_Grande');	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<?php
		include("includes/head.php");
	?>
	<body>
		<div class="container-fluid">
		
			<?php
				include("includes/menu.php");
			?>
			
			<section class="container">
				<h1 id="admin">Cadastro da Equipe</h1>
				<div class="thumbnail" id="conteudo">
					<form action="equipe_salvar.php" method="POST" character_set="UTF-8" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" id="nome" name="nome" required />
						</div>
						<div class="form-group">
							<label for="sobrenome">Sobrenome</label>
							<input type="text" class="form-control" id="sobrenome" name="sobrenome" required />
						</div>
						<div class="form-group">
							<label class="radio-inline"><input type="radio" name="tipo" value="1">Equipe Pedagógica</label>
							<label class="radio-inline"><input type="radio" name="tipo" value="0">Equipe Administrativa</label>
						</div>
						<div class="form-group">
							<label for="funcao">Função</label>
							<select class="form-control" id="funcao" name="funcao" required>
								<option value=""> Selecione uma função</option>
								<option value="Diretora">Diretora</option>
								<option value="Diretora Adjunta">Diretora Adjunta</option>
								<option value="Professor">Professor</option>
								<option value="Coordenador Pedagógico">Coordenador Pedagócio</option>
								<option value="Coordenador Técnico">Coordenador Técnico</option>
								<option value="Progetec">Progetec</option>
								<option value="Progelab">Progelab</option>
								<option value="Secretário">Secretário</option>
								<option value="Inspetor">Inspetor</option>
								<option value="Administrativo">Administrativo</option>
							</select>
						</div>
						<div class="form-group">
							<label for="atuacao">Atuação</label>
							<input type="text" class="form-control" id="atuacao" name="atuacao"  placeholder="Por exemplo: Língua Portuguesa." />
						</div>
						<div class="form-group">
							<label for="turno">Turno</label>
							<select class="form-control" id="turno" name="turno" required>
								<option value=""> Selecione uma turno</option>
								<option value="Integral">Integral</option>
								<option value="Matutino">Matutino</option>
								<option value="Vespertino">Vespertino</option>
								<option value="Noturno">Noturno</option>
							</select>
						</div>
						
						
						<br />
						<div class="form-group">
							<div class="col-md-3">
								<label class="btn btn-default btn-file" for="btn-upload">Procurar Imagem
								<input type="file" style="display: none;" name="imagem" id="btn-upload"/>
								</label>
							</div>
							<div class="col-md-9">
								<input id="upload-file" class="form-control" placeholder="Nenhum arquivo selecionado. (96px - 96px)" disabled="disabled" />
							</div>
						</div>
						<div class="botao-grupo">
							<input type="submit" class="btn btn-lg btn-success botao-form" value="Salvar" />
							<input type="reset" class="btn btn-lg btn-danger botao-form btn-cancelar" value="Cancelar" />
						</div>
					</form>
				</div>
			</section>
			<footer class="row footer">
				Escola Estadual Waldemir Barros da Silva <br />
				Endereço: R. Palmácia - Moreninha II, Campo Grande - MS, 79065-140 </br>
				Telefone:(67) 3314-9014
			</footer>	
			<!-- END: footer -->
		</div>
		<?php
			include("includes/javascript.php");
		?>	
	</body>
</html>