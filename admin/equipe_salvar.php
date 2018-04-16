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
				<h1 id="admin">Administração</h1>
				<div class="thumbnail" id="conteudo">
					
					<?php
								
						// Armazena os dados vindo do formul?rio
						$nome    		= $_POST['nome'];
						$sobrenome    	= $_POST['sobrenome'];
						$tipo     		= $_POST['tipo'];
						$funcao    		= $_POST['funcao'];
						$atuacao   		= $_POST['atuacao'];
						$turno     		= $_POST['turno'];
						$imagem    		= $_FILES['imagem'];

						// Se a foto estiver sido selecionada
						if (!empty($imagem["name"])) {

							// Largura m?xima em pixels
							$largura = 1500;
							// Altura m?xima em pixels
							$altura = 1800;
							// Tamanho m?ximo do arquivo em bytes
							$tamanho = 10;
							 
							// Pega as dimens?es da imagem
							$dimensoes = getimagesize($imagem["tmp_name"]);
					 
							// Verifica se a largura da imagem ? maior que a largura permitida
							if($dimensoes[0] > $largura) {
								$error[2] = "A largura da imagem n?o deve ultrapassar ".$largura." pixels";
							}
					 
							// Verifica se a altura da imagem ? maior que a altura permitida
							if($dimensoes[1] > $altura) {
								$error[3] = "Altura da imagem n?o deve ultrapassar ".$altura." pixels";
							}
	 
							// Verifica se o tamanho da imagem ? maior que o tamanho permitido
							if($imagem["size"] > $tamanho) {
								$error[4] = "A imagem deve ter no m?ximo ".$tamanho." bytes";
							}
	 
							// Pega extens?o da imagem
							preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
				 
							// Gera um nome ?nico para a imagem
							$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
				 
							// Caminho de onde ficar? a imagem
							$caminho_imagem = "../imagens/equipe/". $nome_imagem;
				 
							// Faz o upload da imagem para seu respectivo caminho
							move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
	 						
	 						mysql_query("SET NAMES 'utf8'");
							mysql_query('SET character_set_connection=utf8');
							mysql_query('SET character_set_client=utf8');
							mysql_query('SET character_set_results=utf8');
							
							// Insere os dados no banco
							$sql = mysql_query("INSERT INTO tb_servidor VALUES ('', '$nome', '$sobrenome', '$nome_imagem','$turno','$funcao.','$atuacao', $tipo, 1)");
				 
							// Se os dados forem inseridos com sucesso
							if ($sql){
								$msg = "<div class='alert alert-success' role='alert'>
											Cadastro efetuado com sucesso!!!
											<a href='equipe_cadastro.php' class='alert-link'>Adicionar nova (+)</a>
										</div>
										<meta http-equiv='refresh' content='2;URL=equipe_principal.php'>";
					
								echo $msg;
							}else{
					
								$msg = "<div class='alert alert-danger' role='alert'>
											Erro ao efetuar Cadastro!!!
											<a href='equipe_cadastro.php' class='alert-link'>Tentar Novamente</a>
										</div>
										<meta http-equiv='refresh' content='5;URL=equipe_principal.php'>";
								echo $msg;
							}
						}
					?>
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