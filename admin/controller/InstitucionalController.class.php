<?php
	include_once 'dao/DaoInstituicao.class.php';
	
  	class InstitucionalController {
  		
  		public function getInstituicao(){
  			try {
				$daoInstituicao = new DaoInstituicao();
				return $daoInstituicao->getInstituicao();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
  		}
	}
?>
