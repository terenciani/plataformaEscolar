<?php
	include_once LIB_INCLUDES.DS.'Conexao.class.php';
	include_once LIB_MODEL.DS.'Servidor.class.php';
	
	class DaoEquipe {

		public static $instancia;

		public static function getInstancia() {
			if (!isset(self::$instancia))
				self::$instancia = new DaoEquipe();

				return self::$instancia;
			}

		public function getNextID() {
			try {
				$sql = "SELECT Auto_increment FROM information_schema.tables WHERE table_name='tb_servidor'";
				$result = Conexao::getInstancia()->query($sql);
				$final_result = $result->fetch(PDO::FETCH_ASSOC);
				return $final_result['Auto_increment'];
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}



		public function getEquipeAdministrativa() {
			try {
				$sql = "SELECT * FROM tb_servidor WHERE ativo=1 AND pedagogico = 0 ORDER BY nome";
				$result = Conexao::getInstancia()->query($sql);
				$lista = $result->fetchAll(PDO::FETCH_ASSOC);
				$f_lista = array();

				foreach ($lista as $l)
					$f_lista[] = $this->populaServidor($l);

				return $f_lista;
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function getEquipePedagogica() {
			try {
				$sql = "SELECT * FROM tb_servidor WHERE ativo=1 AND pedagogico = 1 ORDER BY nome";
				$result = Conexao::getInstancia()->query($sql);
				$lista = $result->fetchAll(PDO::FETCH_ASSOC);
				$f_lista = array();

				foreach ($lista as $l)
					$f_lista[] = $this->populaServidor($l);

				return $f_lista;
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function buscarTodosDaEquipe() {
			try {
				$sql = "SELECT * FROM tb_servidor ORDER BY nome";
				$result = Conexao::getInstancia()->query($sql);
				$lista = $result->fetchAll(PDO::FETCH_ASSOC);
				$f_lista = array();

				foreach ($lista as $l)
					$f_lista[] = $this->populaServidor($l);

				return $f_lista;
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		private function populaServidor($row) {
			$servidor = new Servidor();
			$servidor->setId_servidor($row['id_servidor']);
			$servidor->setNome($row['nome']);
			$servidor->setSobrenome($row['sobrenome']);
			$servidor->setImagem($row['imagem']);
			$servidor->setFuncao($row['funcao']);
			$servidor->setTurno($row['turno']);
			$servidor->setAtuacao($row['atuacao']);
			$servidor->setPedagogico($row['pedagogico']);
			$servidor->setAtivo($row['ativo']);
			return $servidor;
		}
	}
?>