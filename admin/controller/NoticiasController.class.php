<?php
	include_once 'admin/dao/DaoNoticia.class.php';
	
  	class NoticiasController {
		public function getNoticias() {
			try {
				$daoNoticia = new DaoNoticia();
				return $daoNoticia->listarNoticias();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		
		public function getNoticiaPorId($id) {
			try {
				$daoNoticia = new DaoNoticia();
				return $daoNoticia->getNoticiaPorId($id);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		
	}
?>