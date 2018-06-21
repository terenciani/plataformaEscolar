<?php 
	include_once ("dao/DaoEscola.class.php");

	class EscolaController{
	
		public function buscaDados(){
			try {
				$dao = new DaoEscola(); 
				return $dao->pegarDados();
				
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}

		}
	}

?>