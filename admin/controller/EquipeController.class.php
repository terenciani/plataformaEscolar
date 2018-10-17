<?php
	include_once LIB_DAO.DS.'DaoEquipe.class.php';
	include_once LIB_DAO.DS.'DaoBanner.class.php';
	include_once LIB_DAO.DS.'DaoInstituicao.class.php';
	
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
		public function getInstituicao(){
			try {
				$daoInstituicao = new DaoInstituicao();
				return $daoInstituicao->getInstituicao();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}
		public function buscarTodosDaEquipe(){
			try {
				$daoEquipe = new DaoEquipe();
				return $daoEquipe->buscarTodosDaEquipe();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}
	}
?>