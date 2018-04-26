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
				<h1 id="admin">Deletar Notícia</h1>
				<?php					
					$id = $_GET['id'];
	
					//Deletar imagem da pasta
					$sql = mysql_query("SELECT imagem FROM tb_noticia where id_noticia=$id");
					while($resultado = mysql_fetch_array($sql)){
						unlink("../imagens/noticias/".$resultado['imagem']);
					}
	
					// Deletar os dados no banco
					$sql = mysql_query("DELETE FROM tb_noticia WHERE id_noticia='".$id."';"); 
					
					// Se os dados forem deletados com sucesso
					if ($sql){
						$msg = "<div class='alert alert-success' role='alert'>
									Exclusão realizada com sucesso!!!
									<a href='noticia_principal.php' class='alert-link'>Listar todos!</a>
								</div>
								<meta http-equiv='refresh' content='5;URL=noticia_principal.php'>";
			
						echo $msg;
					}else{
			
						$msg = "<div class='alert alert-danger' role='alert'>
									Erro ao realizar a exclusão!!!
									<a href='noticia_principal.php' class='alert-link'>Tentar Novamente!</a>
								</div>
								<meta http-equiv='refresh' content='5;URL=noticia_principal.php'>";
						echo $msg;
					}
				?>
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