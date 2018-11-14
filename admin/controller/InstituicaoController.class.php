<?php
	include_once LIB_DAO.DS.'DaoInstituicao.class.php';
	
  	class InstituicaoController {
  		
  		public function getInstituicao(){
  			try {
				$daoInstituicao = new DaoInstituicao();
				return $daoInstituicao->getInstituicao();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
  		}

		public function alterarDadosDaInstituicao($dadosDoFormulario, $imagens){
			try {
				$dao = new DaoInstituicao(); 
				return $dao->alterarDadosDaInstituicaoNoBanco($dadosDoFormulario, $imagens);
				
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}

		}
	}
?>
