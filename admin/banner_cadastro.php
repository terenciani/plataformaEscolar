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
				<h1 id="admin">Cadastro de Banners</h1>
				<div class="thumbnail" id="conteudo">
					<form action="banner_salvar.php" method="POST" character_set="UTF-8" enctype="multipart/form-data">
						<div class="form-group">
							<label for="posicao">Posição do banner</label>
							<select class="form-control" id="posicao" name="posicao" required>
								<option value=""> Selecione a posição do banner</option>
								<option value="ROTATIVO">Banner Rotativo (900px / 250px) - Página Inicial</option>
								<option value="PROMOCAO">Banner Promocial (1260px / 240px) - Página Inicial</option>
								<option value="EQUIPE">Banner Equipe (1240px de largura) - Página Equipe</option>
								<option value="MURAL">Banner Mural (195px - 80px)- Página Inicial</option>
							</select>
						</div>
						
						<div class="form-group">
							<label for="titulo">Título</label>
							<input type="text" class="form-control" id="titulo" name="titulo" required />
						</div>
						<div class="form-group">
							<label for="link">Link</label>
							<input type="text" class="form-control" id="link" name="link" required />
						</div>
						<div class="form-group">
							<label for="alt">Texto a ser exibido em caso de erro</label>
							<input type="text" class="form-control" id="alt" name="alt" required />
						</div>
						<br />
						<div class="form-group">
							<div class="col-md-3">
								<label class="btn btn-default btn-file" for="btn-upload">Procurar Imagem
								<input type="file" style="display: none;" name="imagem" id="btn-upload" required/>
								</label>
							</div>
							<div class="col-md-9">
								<input id="upload-file" class="form-control" placeholder="Nenhum arquivo selecionado." disabled="disabled" />
							</div>
						</div>
						<br /> <br />
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