<?php
	include_once LIB_DAO.DS.'DaoNoticia.class.php';
	include_once LIB_DAO.DS.'DaoBanner.class.php';
	
  	class IndexController {
		public function getNoticiasPrincipais() {
			try {
				$daoNoticia = new DaoNoticia();
				return $daoNoticia->listarNoticiasPrincipais();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function getBannerCarousel() {
			try {

				$daoBanner = new DaoBanner();
				return $daoBanner->getBannerCarousel();
			}catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function getBannerPromocional() {
			try {
				$daoBanner = new DaoBanner();
				return $daoBanner->getBannerPromocional();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function getBannersMural() {
			try {
				$daoBanner = new DaoBanner();
				return $daoBanner->getBannersMural();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
	}
?>