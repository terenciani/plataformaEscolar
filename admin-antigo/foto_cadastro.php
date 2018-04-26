<?php
	// Inclui o arquivo com o sistema de segurança
	include("includes/seguranca.php");
	// Chama a função que protege a página
	protegePagina();
	date_default_timezone_set('America/Campo_Grande');	
	
	if(isset($_POST['acao']) && $_POST['acao'] == 'Salvar'){
       
		
		// Armazena os dados vindo do formul?rio
		$categoria 		= $_POST['categoria'];
		$titulo 		= $_POST['titulo'];
		$descricao 		= $_POST['descricao'];
		$alt 			= $_POST['alt'];
		$imagem 		= $_FILES['imagem'];
		$nome 			= $imagem['name'];
		
		$ok = false;
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
			$caminho_imagem = '../imagens/galerias/' . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

			// Corrige a codificação
			mysql_query("SET NAMES 'utf8'");
			mysql_query('SET character_set_connection=utf8');
			mysql_query('SET character_set_client=utf8');
			mysql_query('SET character_set_results=utf8');
			
			// Insere os dados no banco
			$sql = "INSERT INTO tb_media (id_media, fk_categoria, titulo, descricao, url, alt) VALUES ('', '$categoria', '$titulo', '$descricao', '$nome_imagem', '$alt')";
			$query = mysql_query($sql) or die(mysql_error());
			if ($sql){
				$ok=true;
			}
       }
	}
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
				<h1 id="admin">Cadastro de Fotos</h1>
				<div class="thumbnail" id="conteudo">
					<form action="" method="POST" character_set="UTF-8" enctype="multipart/form-data">
						<div class="form-group">
							<label>Selecione a Imagem</label>
							<br />
							<div class="col-md-3">
								<label class="btn btn-default btn-file" for="btn-upload">Procurar Imagem
								<input type="file" style="display: none;" name="imagem" id="btn-upload" required/>
								</label>
							</div>
							<div class="col-md-9">
								<input id="upload-file" class="form-control" placeholder="Nenhum arquivo selecionado." disabled="disabled" required/>
							</div>
						</div>
						<br /> <br />
						
						
						<div class="form-group">
							<label for="categoria">Galeria</label>
							<select name="categoria" class="form-control" id="categoria"class="styledselect-sexo" required>
								<option value="">Selecione uma Categoria</option>
								<?php
									mysql_query("SET NAMES 'utf8'");
									mysql_query('SET character_set_connection=utf8');
									mysql_query('SET character_set_client=utf8');
									mysql_query('SET character_set_results=utf8');
									$sql = mysql_query("select * from tb_categoria WHERE tipo='FOTO'");
									while($resultado = mysql_fetch_array($sql)){
										echo "<option value='".$resultado['id_categoria']."'>".$resultado['titulo']."</option>";
									}
								?>
							</select>
						</div>
						
						<div class="form-group">
							<label for="titulo">Título da Foto</label>
							<input type="text" class="form-control" id="titulo" name="titulo" required />
						</div>
						<div class="form-group">
							<label for="descricao">Descrição</label>
							<textarea class="form-control" rows="7" id="descricao" name="descricao"></textarea>
						</div>
						<div class="form-group">
							<label for="alt">Texto alternativo</label>
							<input type="text" class="form-control" id="alt" name="alt" required placeholder="Texto que irá aparecer caso a imagem não carregue" />
						</div>
						<br />
						
     			
						<div class="botao-grupo">
							<input type="submit" name="acao" class="btn btn-lg btn-success botao-form" value="Salvar" />
							<input type="reset" class="btn btn-lg btn-danger botao-form btn-cancelar" value="Cancelar" />
						</div>
					</form>
					<?php
						if (isset($_POST['acao'])){
							if(isset($ok)){
								echo   "<div class='alert alert-success' role='alert'>
											Foto enviada com sucesso!!! <br />										
										</div>
										<div class='alert alert-info' role='alert'>
											<a href='index.php' class='alert-link'>Clique aqui para voltar para a página inicial!</a>
										</div>";
							}else{
								echo   "<div class='alert alert-danger' role='alert'>
											Foto não enviada!!! <br />										
										</div>
										<div class='alert alert-info' role='alert'>
											<a href='index.php' class='alert-link'>Clique aqui para voltar para a página inicial!</a>
										</div>";
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