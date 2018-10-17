<?php
	include_once LIB_DAO.DS.'DaoNoticia.class.php';
	include_once LIB_DAO.DS.'DaoInstituicao.class.php';		
	
  	class ProfissionalizanteController {
		
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