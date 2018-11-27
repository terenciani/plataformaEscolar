<?php	
	include_once LIB_INCLUDES.DS.'Conexao.class.php';
	include_once LIB_MODEL.DS.'Instituicao.class.php';
	
	class DaoInstituicao {

		public static $instancia;

		public static function getInstancia() {
			if (!isset(self::$instancia))
				self::$instancia = new DaoInstituicao();

				return self::$instancia;
			}

		public function getInstituicao() {
			try {
				$sql = "SELECT * FROM tb_instituicao  ORDER BY data_alteracao DESC LIMIT 1";
				$result = Conexao::getInstancia()->query($sql);
				//$instituicao = $result->fetchObject('Instituicao');
				$row = $result->fetchAll(PDO::FETCH_ASSOC);
				return $this->populaInstituicao($row[0]);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}

		public function alterarDadosDaInstituicaoNoBanco($dadosDoFormulario, $imagens){
			$logoPrincipal = $this->uploadImagem($imagens['logo-principal']);
			$logoSecundaria = $this->uploadImagem($imagens['logo-secundaria']);
			$favicon = $this->uploadImagem($imagens['favicon']);
			try{
				
				$sql = "INSERT INTO `tb_instituicao`(
							`data_alteracao`, 
							`sigla`, 
							`nome_escola`, 
							`logo_principal`, 
							`logo_secundaria`, 
							`slogan`, 
							`missao`, 
							`visao`, 
							`valores`, 
							`historico`, 
							`endereco`, 
							`telefone`, 
							`telefone_alternativo`, 
							`destinatario_contato`, 
							`email`, 
							`facebook`, 
							`youtube`, 
							`favicon`,
							`mapa`,
							`tem_profissional`)

						VALUES (
							:data,
							:sigla,
							:nome,
							:logoPrincipal,
							:logoSecundaria,
							:slogan,
							:missao,
							:visao,
							:valores,
							:historico,
							:endereco,
							:telefone,
							:telefoneAlternativo,
							:destinatarioContato,
							:email,
							:facebook,
							:youtube,
							:favicon,
							:mapa,
							:temProfissional
							)";

				$p_sql = Conexao::getInstancia()->prepare($sql);
				$p_sql->bindValue(":data", date('Y-m-d h:i:s'));
				$p_sql->bindValue(":nome", $dadosDoFormulario['nome']);
				$p_sql->bindValue(":sigla", $dadosDoFormulario['sigla']);
				$p_sql->bindValue(":logoPrincipal", $logoPrincipal);
				$p_sql->bindValue(":logoSecundaria", $logoSecundaria);
				$p_sql->bindValue(":slogan", $dadosDoFormulario['slogan']);
				$p_sql->bindValue(":missao", $dadosDoFormulario['missao']);
				$p_sql->bindValue(":visao", $dadosDoFormulario['visao']);
				$p_sql->bindValue(":valores", $dadosDoFormulario['valores']);
				$p_sql->bindValue(":historico", $dadosDoFormulario['historico']);
				$p_sql->bindValue(":endereco", $dadosDoFormulario['endereco']);
				$p_sql->bindValue(":telefone", $dadosDoFormulario['telefone']);
				$p_sql->bindValue(":telefoneAlternativo", $dadosDoFormulario['telefone-alternativo']);
				$p_sql->bindValue(":destinatarioContato", $dadosDoFormulario['desinatarios-de-contato']);
				$p_sql->bindValue(":email", $dadosDoFormulario['email']);
				$p_sql->bindValue(":facebook", $dadosDoFormulario['facebook']);
				$p_sql->bindValue(":youtube", $dadosDoFormulario['youtube']);
				$p_sql->bindValue(":favicon", $favicon);
				$p_sql->bindValue(":mapa", $dadosDoFormulario['mapa']);
				$p_sql->bindValue(":temProfissional", $dadosDoFormulario['tem-profissional']);

	          	$p_sql->execute();
				
	          	return $p_sql->rowCount();	
			}catch (Exception $e) {
				echo "<br>".$e->getMessage();
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
			
		}
		
		private function populaInstituicao($row) {
			$instituicao = new Instituicao();

			$instituicao->setData($row['data_alteracao']);
			$instituicao->setNome($row['nome_escola']);
			$instituicao->setSigla($row['sigla']);
			$instituicao->setSlogan($row['slogan']);
			$instituicao->setLogoPrincipal($row['logo_principal']);
			$instituicao->setLogoSecundaria($row['logo_secundaria']);
			$instituicao->setFavicon($row['favicon']);
			$instituicao->setMissao($row['missao']);
			$instituicao->setVisao($row['visao']);
			$instituicao->setValores($row['valores']);
			$instituicao->setHistorico($row['historico']);
			$instituicao->setEndereco($row['endereco']);
			$instituicao->setTelefone($row['telefone']);
			$instituicao->setTelefoneAlternativo($row['telefone_alternativo']);
			$instituicao->setDestinatariosDeContato($row['destinatario_contato']);
			$instituicao->setEmail($row['email']);
			$instituicao->setFacebook($row['facebook']);
			$instituicao->setYoutube($row['youtube']);
			$instituicao->setMapa($row['mapa']);
			$instituicao->setTemProfissional($row['tem_profissional']);
			return $instituicao;
		}

		private function uploadImagem($imagem){
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
	        $nomeImagem = md5(uniqid(time())) . "." . $ext[1];
	   
	        // Caminho de onde ficar? a imagem
	        $caminho_imagem = LIB_IMG.DS.$nomeImagem;
	   
	        // Faz o upload da imagem para seu respectivo caminho
	        move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
	        
	        return $nomeImagem;
	     }
	}
?>

