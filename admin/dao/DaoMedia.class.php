<?php
	include_once 'admin/includes/Conexao.class.php';
  	include_once 'admin/model/Media.class.php';
 	include_once 'admin/model/Artigo.class.php';
  	
	class DaoMedia {

		public static $instancia;

		public static function getInstancia() {
			if (!isset(self::$instancia))
				self::$instancia = new DaoMedia();

				return self::$instancia;
			}

		public function getNextID() {
			try {
				$sql = "SELECT Auto_increment FROM information_schema.tables WHERE table_name='tb_media'";
				$result = Conexao::getInstancia()->query($sql);
				$final_result = $result->fetch(PDO::FETCH_ASSOC);
				return $final_result['Auto_increment'];
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}



		public function getMedias($categoria) {
			try {
				$sql = "SELECT * FROM tb_media WHERE fk_categoria=:categoria";

				$p_sql = Conexao::getInstancia()->prepare($sql);
		        $p_sql->bindValue(":categoria", $categoria);
		        
		        $result = $p_sql->execute();
		        $lista = $p_sql->fetchAll(PDO::FETCH_ASSOC);
				$f_lista = array();

				foreach ($lista as $l)
					$f_lista[] = $this->populaMedia($l);

				return $f_lista;
			} catch (Exception $e) {
				echo $e;
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function getArtigos($edicao) {
			try {
				$sql = "SELECT * FROM tb_artigo WHERE edicao=:edicao";

				$p_sql = Conexao::getInstancia()->prepare($sql);
		        $p_sql->bindValue(":edicao", $edicao);
		        
		        $result = $p_sql->execute();
		        $lista = $p_sql->fetchAll(PDO::FETCH_ASSOC);
				$f_lista = array();

				foreach ($lista as $l)
					$f_lista[] = $this->populaArtigo($l);

				return $f_lista;
			} catch (Exception $e) {
				echo $e;
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		private function populaArtigo($row) {
			$artigo = new Artigo();
			$artigo->setId_artigo($row['id_artigo']);
			$artigo->setEdicao($row['edicao']);
			$artigo->setTitulo($row['titulo']);
			$artigo->setResumo($row['resumo']);
			$artigo->setArquivo($row['arquivo']);
			return $artigo;
		}
		private function populaMedia($row) {
			$media = new Media();
			$media->setId_media($row['id_media']);
			$media->setTitulo($row['titulo']);
			$media->setCategoria($row['fk_categoria']);
			$media->setAlt($row['alt']);
			$media->setDescricao($row['descricao']);
			$media->setUrl($row['url']);
			return $media;
		}
	}
?>