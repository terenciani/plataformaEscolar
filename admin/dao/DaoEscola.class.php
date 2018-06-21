<?php
	include_once ("includes/Conexao.class.php");
	include_once ("model/Instituicao.class.php");
	class DaoEscola{
		public function pegarDados(){
			try {
				$sql = "SELECT 'telefone' FROM tb_instituicao";
				$result = Conexao::getInstancia()->query($sql);
				$final_result = $result->fetchObject();
				$usuario = $this->transformaDadosEmObjeto($result->fetch(PDO::FETCH_ASSOC));
				
				return $usuario;
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}

		}

		public function transformaDadosEmObjeto($dadosDoBanco){
			$Instituicao = new Instituicao();
			$Instituicao->setTelefone($dadosDoBanco['telefone']);
			return $Instituicao;
		}

	}
?>
