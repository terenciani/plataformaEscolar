<?php
	include_once LIB_DAO.DS.'DaoNoticia.class.php';
	include_once LIB_DAO.DS.'DaoInstituicao.class.php';		
	
  	class NoticiaController {
		public function buscarTodasNoticias() {
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

		public function salvarNoticia($dadosDoFormulario, $dadosDaImagem){
			var_dump($dadosDaImagem);
			try {
				$daoNoticia = new DaoNoticia();
				return $daoNoticia->salvarNoticia($dadosDoFormulario, $dadosDaImagem);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}

		public function excluirNoticia($id) {
			try {
				$daoNoticia = new DaoNoticia();
				return $daoNoticia->excluirNoticia($id);
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