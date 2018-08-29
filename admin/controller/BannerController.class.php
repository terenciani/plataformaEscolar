<?php
	include_once LIB_DAO.DS.'DaoBanner.class.php';
		
	
  	class BannerController {
		public function buscarTodasNoticias() {
			try {
				$daoBanner = new DaoBanner();
				return $daoBanner->listarNoticias();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		
		public function getBannerPorId($id) {
			try {
				$daoBanner = new DaoBanner();
				return $daoBanner->getBannerPorId($id);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}

		public function salvarBanner($dadosDoFormulario, $dadosDaImagem){
			var_dump($dadosDaImagem);
			try {
				$daoBanner = new DaoBanner();
				return $daoBanner->salvarBanner($dadosDoFormulario, $dadosDaImagem);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}

		public function excluirBanner($id) {
			try {
				$daoBanner = new DaoNoticia();
				return $daoBanner->excluirBanner($id);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		
	}
?>