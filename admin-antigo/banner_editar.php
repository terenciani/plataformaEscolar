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
				<h1 id="admin">Editar de Banner</h1>
				
				<?php
					//recupera a variavel id via GET								
					if(isset($_GET['id'])){
						if(is_numeric($_GET['id'])){
							$id = addslashes(htmlentities($_GET['id']));
							
							mysql_query("SET NAMES 'utf8'");
							mysql_query('SET character_set_connection=utf8');
							mysql_query('SET character_set_client=utf8');
							mysql_query('SET character_set_results=utf8');
							
							$sql = mysql_query("SELECT * FROM tb_banner WHERE id_banner='$id'");
							while($resultado = mysql_fetch_array($sql)){
								$id_banner  = $resultado['id_banner'];
								$titulo_banner  = $resultado['titulo'];
								$link_banner  = $resultado['link'];
								$alt_banner  = $resultado['alt'];
								$posicao_banner  = $resultado['posicao'];
								$imagem_banner = $resultado['imagem'];			
					
				?>
					
				<div class="thumbnail" id="conteudo">
					<form action="banner_atualizar.php" method="POST" character_set="UTF-8" enctype="multipart/form-data">
						
						<h3 class="edicao-banner"> Banner <?= $id_banner  ?> </h3>
						
						<div class="form-group">
							<label for="posicao">Posição do banner</label>
							<select class="form-control" id="posicao" name="posicao">
								<option value=""  <?=($posicao_banner == '')?'selected':''?>> Selecione a posição do banner</option>
								<option value="ROTATIVO" <?=($posicao_banner == 'ROTATIVO')?'selected':''?>>Banner Rotativo (900px / 250px) - Página Inicial</option>
								<option value="PROMOCAO" <?=($posicao_banner == 'PROMOCAO')?'selected':''?>>Banner Promocial (1260px / 240px) - Página Inicial</option>
								<option value="EQUIPE" <?=($posicao_banner == 'EQUIPE')?'selected':''?>>Banner Equipe (1240px de largura) - Página Equipe</option>
								<option value="MURAL" <?=($posicao_banner == 'MURAL')?'selected':''?>>Banner Mural (195px - 80px)- Página Inicial</option>
							</select>
						</div>
						<div class="form-group" style="display: none;" >
							<label for="titulo">Código</label>
							<input type="text" class="form-control" id="codigo" name="codigo" required value="<?= $id_banner  ?>" />
						</div>
						<div class="form-group">
							<label for="titulo">Título</label>
							<input type="text" class="form-control" id="titulo" name="titulo" required value="<?= $titulo_banner ?>" />
						</div>
						<div class="form-group">
							<label for="link">Link</label>
							<input type="text" class="form-control" id="link" name="link" required value="<?= $link_banner ?>"/></td>
						</div>
						<div class="form-group">
							<label for="alt">Texto a ser exibido em caso de erro</label>
							<input type="text" class="form-control" id="alt" name="alt" required value="<?= $alt_banner ?>" />
						</div>
						<br />
						<div class="form-group">
							<div class="col-md-3">
								<img src="../imagens/banners/<?= $imagem_banner ?>" width="200" height="100" align="absmiddle">
								<label class="btn btn-default btn-file" for="btn-upload">Procurar Imagem
								<input type="file" style="display: none;" name="imagem" id="btn-upload"/>
								</label>
							</div>
							<div class="col-md-9">
								<input id="upload-file" class="form-control" placeholder="Nenhum arquivo selecionado." disabled="disabled" value="<?= $imagem_banner ?>"/>
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