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
				<h1 id="admin">Cadastro de Notícias</h1>
				<div class="thumbnail" id="conteudo">
					<form action="noticia_salvar.php" method="POST" character_set="UTF-8" enctype="multipart/form-data">
						<div class="form-group">
							<label for="titulo-noticia">Título</label>
							<input type="text" class="form-control" id="titulo_noticia" name="titulo_noticia" required />
						</div>
						<div class="form-group">
							<label for="chamada-noticia">Chamada</label>
							<input type="text" class="form-control" id="chamada_noticia" name="chamada_noticia" required />
						</div>
						<div class="form-group">
							<label for="texto-noticia">Texto</label>
							<textarea class="form-control" rows="7" id="texto-noticia" name="texto_noticia" required ></textarea>
						</div>
						<br />
						<div class="form-group">
							<div class="col-md-3">
								<label class="btn btn-default btn-file" for="btn-upload">Procurar Imagem
								<input type="file" style="display: none;" name="imagem" id="btn-upload" required/>
								</label>
							</div>
							<div class="col-md-9">
								<input id="upload-file" class="form-control" placeholder="Nenhum arquivo selecionado. (460px - 430px)" disabled="disabled" />
							</div>
						</div>
						<br /><br />
						<div class="form-group">
							<label for="data-noticia">Data da Notícia</label>
							<input type="text" class="form-control data" id="data-noticia" name="data-noticia" required />
						</div>
						<div class="form-group">
							<label for="fonte-noticia">Fonte da Notícia</label>
							<input type="text" class="form-control" id="fonte-noticia" name="fonte-noticia" required />
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