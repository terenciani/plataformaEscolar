<?php
	include_once LIB_DAO.DS.'DaoCategoria.class.php';
	include_once LIB_DAO.DS.'DaoMedia.class.php';
	include_once LIB_DAO.DS.'DaoInstituicao.class.php';

  	class MediaController {
		public function getCategoriasMedias() {
			try {
				$daoCategoria = new DaoCategoria();
				return $daoCategoria->getCategoriasMedias();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function getCategoriasVideos() {
			try {
				$daoCategoria = new DaoCategoria();
				return $daoCategoria->getCategoriasVideos();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function getMedias($categoria) {
			try {
				$daoMedias = new DaoMedia();
				return $daoMedias->getMedias($categoria);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function getArtigos($edicao) {
			try {
				$daoMedias = new DaoMedia();
				return $daoMedias->getArtigos($edicao);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function getInstituicao(){
			try {
				$daoInstituicao = new daoInstituicao();
				return $daoInstituicao->getInstituicao();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}
	}

?>