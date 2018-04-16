<?php
	// Inclui o arquivo com o sistema de segurança
	include("includes/seguranca.php");
	// Chama a função que protege a página
	protegePagina();
	date_default_timezone_set('America/Campo_Grande');	
	
	if(isset($_POST['acao']) && $_POST['acao'] == 'Salvar'){
       
		
		// Armazena os dados vindo do formul?rio
		$titulo 		= $_POST['titulo'];
		$resumo 		= $_POST['resumo'];
		$edicao			= $_POST['edicao'];
		$arquivo 		= $_FILES['arquivo'];
		
		$ok = false;
		if (!empty($arquivo['name'])) { 
			/*Checa se a pasta existe - caso negativo ele cria*/
			$pathToSave = '../artigos/';
			if (!file_exists($pathToSave)) {
			    mkdir($pathToSave);
			}

		    
		    $tmpName = $arquivo['tmp_name']; // Recebe o arquivo temporário.

	        $name = $arquivo['name']; // Recebe o nome do arquivo.
	        
	        // Pega extens?o da imagem
			preg_match("/\.(pdf){1}$/i", $name, $ext);

	        // Gera um nome ?nico para a imagem
			$nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

	        $dir = '../artigos/'.$nome_arquivo; // Diretório que vai receber o arquivo.
	        // move_uploaded_file( $arqTemporário, $nomeDoArquivo )
	        if (move_uploaded_file($tmpName, $dir)) { // move_uploaded_file irá realizar o envio do arquivo.        
	            // Corrige a codificação
				mysql_query("SET NAMES 'utf8'");
				mysql_query('SET character_set_connection=utf8');
				mysql_query('SET character_set_client=utf8');
				mysql_query('SET character_set_results=utf8');
				
				// Insere os dados no banco
				$sql = "INSERT INTO tb_artigo (id_artigo, titulo, resumo, edicao, arquivo) VALUES ('', '$titulo', '$resumo', $edicao, '$nome_arquivo')";
				$query = mysql_query($sql) or die(mysql_error());
				if ($sql){
					$ok=true;
				}
				header('Location: artigo_principal.php');
	        } else {
	            echo('Erro ao adicionar arquivo.');
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
				<h1 id="admin">Cadastro de Artigos</h1>
				<div class="thumbnail" id="conteudo">
					<form action="" method="POST" character_set="UTF-8" enctype="multipart/form-data">
						<div class="form-group">
							<label>Selecione a Arquivo</label>
							<br />
							<div class="col-md-3">
								<label class="btn btn-default btn-file" for="btn-upload">Procurar Arquivo
								<input type="file" style="display: none;" name="arquivo" id="btn-upload" required/>
								</label>
							</div>
							<div class="col-md-9">
								<input id="upload-file" class="form-control" placeholder="Nenhum arquivo selecionado." disabled="disabled" required/>
							</div>
						</div>
						<br /> <br />
						
						
						<div class="form-group">
							<label for="edicao">Edição</label>
							<select name="edicao" class="form-control" id="edicao"class="styledselect-sexo" required>
								<option value="">Selecione uma Edição</option>
								<option value='2016'>1ª Edição 2016</option>
								<option value='2017'>2ª Edição 2017</option>
							</select>
						</div>
						
						<div class="form-group">
							<label for="titulo">Título do Artigo</label>
							<input type="text" class="form-control" id="titulo" name="titulo" required />
						</div>
						<div class="form-group">
							<label for="resumo">Resumo</label>
							<textarea class="form-control" rows="7" id="resumo" name="resumo"></textarea>
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