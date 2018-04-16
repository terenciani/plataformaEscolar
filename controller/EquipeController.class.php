<?php
	
	include_once("dao/DaoEquipe.class.php");
	include_once("dao/DaoBanner.class.php");
	
  	class EquipeController {
		public function getBannerEquipe() {
			try {
				$daoBanner = new DaoBanner();
				return $daoBanner->getBannerEquipe();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function getEquipePedagogica() {
			try {
				$daoEquipe = new DaoEquipe();
				return $daoEquipe->getEquipePedagogica();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function getEquipeAdministrativa() {
			try {
				$daoEquipe = new DaoEquipe();
				return $daoEquipe->getEquipeAdministrativa();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		
	}
?>