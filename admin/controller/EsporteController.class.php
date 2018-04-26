<?php
	include_once 'admin/dao/DaoEsporte.class.php';
	
  	class EsporteController {

  		public function getListaPorEsporte($esporte){
  			try {
				$daoEsporte = new DaoEsporte();
				return $daoEsporte->getListaPorEsporte($esporte);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
  		}
  		
  		public function inscrever($post, $esporte){
			$daoEsporte = new DaoEsporte();
			$daoEsporte->salvarInscricao($post, $esporte);
			return "Inscrição realizada com sucesso!";
  		}
  		
  		public function atualizarUltimo($codigo, $esporte){
			$daoEsporte = new DaoEsporte();
			$daoEsporte->atualizarUltimo($codigo, $esporte);
			return "Atualização realizada com sucesso!";
  		}


	}
?>
