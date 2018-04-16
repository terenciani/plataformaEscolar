<?php
	require_once("includes/Conexao.class.php");
	include_once("model/Instituicao.class.php");
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
