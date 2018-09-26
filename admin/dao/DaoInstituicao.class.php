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
				$sql = "SELECT * FROM tb_instituicao LIMIT 1";
				$result = Conexao::getInstancia()->query($sql);
				//$instituicao = $result->fetchObject('Instituicao');
				$row = $result->fetchAll(PDO::FETCH_ASSOC);
				return $this->populaInstituicao($row[0]);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}

		public function alterarDadosDaInstituicaoNoBanco($dadosDoFormulario){
			try{
				$sql = "INSERT INTO `tb_instituicao`(
							`data_alteracao`, 
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
							`youtube`) 
						VALUES (
							:data,
							:nome,
							:visao,
							:missao,
							:valores,
							:historico,
							:endereco,
							:telefone,
							:email,
							)";

				$p_sql = Conexao::getInstancia()->prepare($sql);
				$p_sql->bindValue(":data", date('Y-m-d'));
				$p_sql->bindValue(":visao", $dadosDoFormulario['visao']);
				$p_sql->bindValue(":missao", $dadosDoFormulario['missao']);
				$p_sql->bindValue(":valores", $dadosDoFormulario['valores']);
				$p_sql->bindValue(":historico", $dadosDoFormulario['historico']);
				$p_sql->bindValue(":endereco", $dadosDoFormulario['endereco']);
				$p_sql->bindValue(":telefone", $dadosDoFormulario['telefone']);
				$p_sql->bindValue(":email", $dadosDoFormulario['email']);

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
			$instituicao->setVisao($row['visao']);
			$instituicao->setMissao($row['missao']);
			$instituicao->setValores($row['valores']);
			$instituicao->setHistorico($row['historico']);
			$instituicao->setEndereco($row['endereco']);
			$instituicao->setTelefone($row['telefone']);
			$instituicao->setTelefoneAlternativo($row['telefone_alternativo']);
			$instituicao->setDestinatariosDeContato($row['destinatario_contato']);
			$instituicao->setEmail($row['email']);
			$instituicao->setFacebook($row['facebook']);
			$instituicao->setYoutube($row['youtube']);
			return $instituicao;
		}
	}
?>
