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
				<h1 id="admin">Deletar Banner</h1>
				<?php					
					$id = $_GET['id'];
						
					//Deletar imagem da pasta
					$sql = mysql_query("SELECT imagem FROM tb_banner where id_banner=$id");
					while($resultado = mysql_fetch_array($sql)){
						unlink("../imagens/banners/".$resultado['imagem']);
					}
					
					// Deletar os dados no banco
					$sql = mysql_query("DELETE FROM tb_banner WHERE id_banner='".$id."';"); 
					
					// Se os dados forem inseridos com sucesso
					if ($sql){
						$msg = "<div class='alert alert-success' role='alert'>
									Exclusão realizada com sucesso!!!
									<a href='banner_lateral_listar.php' class='alert-link'>Listar todos!</a>
								</div>
								<meta http-equiv='refresh' content='2;URL=banner_principal.php'>";
			
						echo $msg;
					}else{
			
						$msg = "<div class='alert alert-danger' role='alert'>
									Erro ao realizar a exclusão!!!
									<a href='banner_lateral_listar.php' class='alert-link'>Tentar Novamente!</a>
								</div>
								<meta http-equiv='refresh' content='2;URL=banner_principal.php'>";
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