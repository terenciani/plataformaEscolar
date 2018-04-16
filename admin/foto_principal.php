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
				<div class="row">
					<h1 id="admin">Gerenciar Fotos</h1>
				</div>
				
				<div class="thumbnail" id="conteudo">
					<div class="col-sm-6">
						<a href="categoria_cadastro.php" class="btn btn-lg btn-success btn-block">Cadastrar Categorias</a>
					</div>
					<div class="col-sm-6">
						<a href="foto_cadastro.php" class="btn btn-lg btn-success btn-block">Cadastrar Fotos</a>
					</div>
					<table class="table-striped lista-table">
							<thead>
								<tr>
									<th>Cod. Foto</th>
									<th>Galeira</th>
									<th>Título</th>
									<th>Imagem</th>
									<th>Opções</th>
								</tr>
							</thead>
							<tbody>
								<?php
									// Corrige a codificação
									mysql_query("SET NAMES 'utf8'");
									mysql_query('SET character_set_connection=utf8');
									mysql_query('SET character_set_client=utf8');
									mysql_query('SET character_set_results=utf8');
									$sql = mysql_query("SELECT * FROM tb_media");
									while($resultado = mysql_fetch_array($sql)){
										$idfoto      = $resultado['id_media'];
										$categoria     = $resultado['fk_categoria'];
										$titulo      = $resultado['titulo'];
										$imagem      = $resultado['url'];
										
										echo "<tr>
												<td>".$idfoto."</td>
												<td>".$categoria."</td>
												<td>".$titulo."</td>
												<td><img class='img-fluid img-foto' src='../imagens/galerias/".$imagem."'></td>
												<td>
													<a href='foto_editar.php?id=".$idfoto."' title='Editar' class='glyphicon glyphicon-edit options-edit'></a>
													<a href='foto_deletar.php?id=".$idfoto."' id='link-delete' title='Deletar' class='glyphicon glyphicon-minus-sign options-delet' data-title='Exclusão'></a>
												</td>
											  </tr>";
									}
								?>
							</tbody>
						</table>
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