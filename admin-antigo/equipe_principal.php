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
					<h1 id="admin">Gerenciar Equipe</h1>
				</div>
				
				<div class="thumbnail" id="conteudo">
					<div class="col-sm-12">
						<a href="equipe_cadastro.php" class="btn btn-lg btn-success pull-right">Cadastrar Membro da Equipe</a>
					</div>
					<table class="table-striped lista-table">
						<thead>
							<tr>
								<th>Nome	</th>
								<th>Sobrenome</th>
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
								$sql = mysql_query("SELECT * FROM tb_servidor ORDER BY nome");
								while($resultado = mysql_fetch_array($sql)){
								$id_equipe 		= $resultado['id_servidor'];
								$nome 			= $resultado['nome'];
								$sobrenome		= $resultado['nome'];
								$imagem_equipe 	= $resultado['imagem'];
							
									echo "<tr>
											<td>".$nome."</td>
											<td>".$sobrenome."</td>
											<td><img src='../imagens/equipe/".$imagem_equipe."' width='150' ></td>

											<td>
												<a href='equipe_editar.php?id=".$id_equipe."' title='Editar' class='glyphicon glyphicon-edit options-edit'></a>
												<a href='equipe_deletar.php?id=".$id_equipe."' id='link-delete' title='Deletar' class='glyphicon glyphicon-minus-sign options-delet' data-title='Exclusão'></a>
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