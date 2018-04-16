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
				<h1 id="admin">Editar Notícias</h1>
				
				<?php
					//recupera a variavel id via GET								
					if(isset($_GET['id'])){
						if(is_numeric($_GET['id'])){
							$id = addslashes(htmlentities($_GET['id']));
							
							mysql_query("SET NAMES 'utf8'");
							mysql_query('SET character_set_connection=utf8');
							mysql_query('SET character_set_client=utf8');
							mysql_query('SET character_set_results=utf8');

														
							$sql = mysql_query("SELECT * FROM tb_noticia WHERE id_noticia='$id'");
							while($resultado = mysql_fetch_array($sql)){
								$id_noticia 		= $resultado['id_noticia'];
								$titulo_noticia 	= $resultado['titulo'];
								$chamada_noticia 	= $resultado['chamada'];
								$texto_noticia 		= $resultado['texto'];
								$imagem 			= $resultado['imagem'];
								$data_noticia 		= date("d/m/Y",strtotime($resultado['data']));
								$fonte_noticia 		= $resultado['fonte'];			
					
				?>
					
				<div class="thumbnail" id="conteudo">
					<form action="noticia_atualizar.php" method="POST" character_set="UTF-8" enctype="multipart/form-data">
						<div class="center">
							<h2>Notícia - <?= $id_noticia  ?> </h2>
							<img class="img-banco"src="../imagens/noticias/<?= $imagem ?>">
						</div>
						<br />
						<div class="form-group" style="display: none;" >
							<label for="titulo">Código</label>
							<input type="text" class="form-control" id="codigo" name="codigo" required value="<?= $id_noticia  ?>" />
						</div>
						
						<div class="form-group">
							<label for="titulo-noticia">Título da Notícia</label>
							<input type="text" class="form-control" id="titulo-noticia" name="titulo-noticia" required value="<?= $titulo_noticia ?>" />
						</div>
						<div class="form-group">
							<label for="chamada-noticia">Chamada da Notícia</label>
							<input type="text" class="form-control" id="chamada-noticia" name="chamada-noticia" required value="<?= $titulo_noticia ?>" />
						</div>
						<div class="form-group">
							<label for="texto-noticia">Texto da Notícia</label>
							<textarea class="form-control" rows="7" id="texto-noticia" name="texto-noticia" required ><?= $texto_noticia?></textarea>
						</div>
						<div class="form-group">
							<label for="data-noticia">Data da Notícia</label>
							<input type="text" class="form-control data" id="data-noticia" name="datanoticia" required value="<?= $data_noticia ?>"/></td>
						</div>
						<div class="form-group">
							<label for="fonte-noticia">Fonte da Notícia</label>
							<input type="text" class="form-control" id="fonte-noticia" name="fonte-noticia" required value="<?= $fonte_noticia ?>"/></td>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label class="btn btn-default btn-file" for="btn-upload">Editar Imagem
								<input type="file" style="display: none;" name="imagem" id="btn-upload"/>
								</label>
							</div>
							<div class="col-md-9">
								<input id="upload-file" class="form-control" placeholder="Nenhum arquivo selecionado." disabled="disabled" value="<?= $imagem ?>"/>
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
			
			<?php 
						}
					}
				} 
			?>
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