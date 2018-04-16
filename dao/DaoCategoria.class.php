<?php
	require_once("includes/Conexao.class.php");
	include_once("model/Categoria.class.php");
	class DaoCategoria {

		public static $instancia;

		public static function getInstancia() {
			if (!isset(self::$instancia))
				self::$instancia = new DaoCategoria();

				return self::$instancia;
			}

		public function getNextID() {
			try {
				$sql = "SELECT Auto_increment FROM information_schema.tables WHERE table_name='tb_categoria'";
				$result = Conexao::getInstancia()->query($sql);
				$final_result = $result->fetch(PDO::FETCH_ASSOC);
				return $final_result['Auto_increment'];
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}



		public function getCategoriasMedias() {
			try {
				$sql = "SELECT * FROM tb_categoria WHERE ativa=1 AND tipo = 'FOTO' ORDER BY data";
				$result = Conexao::getInstancia()->query($sql);
				$lista = $result->fetchAll(PDO::FETCH_ASSOC);
				$f_lista = array();

				foreach ($lista as $l)
					$f_lista[] = $this->populaCategoria($l);

				return $f_lista;
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		
		public function getCategoriasVideos() {
			try {
				$sql = "SELECT * FROM tb_categoria WHERE ativa=1 AND tipo = 'VIDEO' ORDER BY data";
				$result = Conexao::getInstancia()->query($sql);
				$lista = $result->fetchAll(PDO::FETCH_ASSOC);
				$f_lista = array();

				foreach ($lista as $l)
					$f_lista[] = $this->populaCategoria($l);

				return $f_lista;
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}

		private function populaCategoria($row) {
			$categoria = new Categoria();
			$categoria->setId_categoria($row['id_categoria']);
			$categoria->setTitulo($row['titulo']);
			$categoria->setData($row['data']);
			$categoria->setTipo($row['tipo']);
			$categoria->setAtiva($row['ativa']);
			return $categoria;
		}
	}
?>