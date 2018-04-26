<?php
	include_once 'admin/includes/Conexao.class.php';
  	include_once 'admin/model/Banner.class.php';
	class DaoBanner {

		public static $instancia;

		public static function getInstancia() {
			if (!isset(self::$instancia))
				self::$instancia = new DaoBanner();

				return self::$instancia;
			}

		public function getNextID() {
			try {
				$sql = "SELECT Auto_increment FROM information_schema.tables WHERE table_name='tb_banner'";
				$result = Conexao::getInstancia()->query($sql);
				$final_result = $result->fetch(PDO::FETCH_ASSOC);
				return $final_result['Auto_increment'];
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}



		public function getBannerCarousel() {
			try {
				$sql = "SELECT * FROM tb_banner WHERE ativo=1 AND posicao = 'ROTATIVO' ORDER BY data DESC";
				$result = Conexao::getInstancia()->query($sql);
				$lista = $result->fetchAll(PDO::FETCH_ASSOC);
				$f_lista = array();

				foreach ($lista as $l)
					$f_lista[] = $this->populaBanner($l);

				return $f_lista;
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}

		public function getBannerPromocional() {
			try {
				$sql = "SELECT * FROM tb_banner WHERE ativo=1 AND posicao = 'PROMOCAO' ORDER BY data DESC LIMIT 1";
				$result = Conexao::getInstancia()->query($sql);
				$banner = $result->fetchObject('Banner');
				
				return $banner;
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function getBannerEquipe() {
			try {
				$sql = "SELECT * FROM tb_banner WHERE ativo=1 AND posicao = 'EQUIPE' ORDER BY data DESC LIMIT 1";
				$result = Conexao::getInstancia()->query($sql);
				$banner = $result->fetchObject('Banner');
				
				return $banner;
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function getBannersMural() {
			try {
				$sql = "SELECT * FROM tb_banner WHERE ativo=1 AND posicao = 'MURAL' ORDER BY data DESC LIMIT 4";
				$result = Conexao::getInstancia()->query($sql);
				$lista = $result->fetchAll(PDO::FETCH_ASSOC);
				$f_lista = array();

				foreach ($lista as $l)
					$f_lista[] = $this->populaBanner($l);

				return $f_lista;
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		private function populaBanner($row) {
			$banner = new Banner();
			$banner->setId_banner($row['id_banner']);
			$banner->setTitulo($row['titulo']);
			$banner->setLink($row['link']);
			$banner->setAlt($row['alt']);
			$banner->setImagem($row['imagem']);
			$banner->setPosicao($row['posicao']);
			$banner->setData($row['data']);
			$banner->setAtivo($row['ativo']);
			return $banner;
		}
	}
?>