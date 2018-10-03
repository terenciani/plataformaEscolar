<?php
	include_once LIB_INCLUDES.DS.'Conexao.class.php';
  	
	class DaoProfissionalizante {

		
		public function getInstancia() {
			try {
				$sql = "SELECT * FROM tb_eletivas WHERE usuario=:nome";
				
				$sql_preparada = Conexao::getInstancia()->prepare($sql);
				$sql_preparada->bindValue(":nome", $nome);
				
				$resultado = $sql_preparada->execute();
			
				return $this->populaUsuario($sql_preparada->fetch(PDO::FETCH_ASSOC));
			} catch (Exception $e) {
				print "houve um erro ao executar o que foi solicitado no pedido." . $e->getMessage();
			}

			public function 

			try{

				$sql = "SELECT * FROM tb_eletivas WHERE usuario=:nome"
				$resultado = $sql_preparada->execute(); 



			}




		}
		
	}
?>

		

