
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
					<h1 id="admin">Gerenciar Banners</h1>
				</div>
				
				<div class="thumbnail" id="conteudo">
					<div class="col-sm-12">
						<a href="banner_cadastro.php" class="btn btn-lg btn-success pull-right">Cadastrar Banner</a>
					</div>
					<table class="table-striped lista-table">
						<thead>
							<tr>
								<th>Título Banner</th>
								<th>Link</th>
								<th>Posição</th>
								<th>Data</th>
								<th>Imagem</th>
								<th>Opções</th>
							</tr>
						</thead>
						<tbody>
							<?php
								mysql_query("SET NAMES 'utf8'");
								mysql_query('SET character_set_connection=utf8');
								mysql_query('SET character_set_client=utf8');
								mysql_query('SET character_set_results=utf8');
								$sql = mysql_query("SELECT * FROM tb_banner");
								
								while($resultado = mysql_fetch_array($sql)){
								$id_banner 			= $resultado['id_banner'];
								$titulo_banner 		= $resultado['titulo'];
								$alt_banner 		= $resultado['alt'];
								$link_banner 		= $resultado['link'];
								$data_banner 		= date('d/m/Y', strtotime($resultado['data']));
								$imagem_banner 		= $resultado['imagem'];
								$posicao_banner 	= $resultado['posicao'];
							
									echo "<tr>
											<td>".$titulo_banner."</td>
											<td>".$link_banner."</td>
											<td>".$posicao_banner."</td>
											<td>".$data_banner."</td>
											<td><img src='../imagens/banners/".$imagem_banner."' width='150' ></td>

											<td>
												<a href='banner_editar.php?id=".$id_banner."' title='Editar' class='glyphicon glyphicon-edit options-edit'></a>
												<a href='banner_deletar.php?id=".$id_banner."' id='link-delete' title='Deletar' class='glyphicon glyphicon-minus-sign options-delet' data-title='Exclusão'></a>
											</td>
										  </tr>";
								}
							?>
						</tbody>
					</table>
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