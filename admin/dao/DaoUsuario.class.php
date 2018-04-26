<?php
	include_once LIB_INCLUDES.DS.'Conexao.class.php';
  	include_once LIB_MODEL.DS.'Usuario.class.php';
  	
	class DaoUsuario {

		public static $instancia;

		public static function getInstancia() {
			if (!isset(self::$instancia))
				self::$instancia = new DaoUsuario();

			return self::$instancia;
		}

		public function buscarUsuarioPorLogin($nome) {
			try {
				$sql = "SELECT * FROM tb_administrador WHERE usuario=:nome";
				
				$sql_preparada = Conexao::getInstancia()->prepare($sql);
				$sql_preparada->bindValue(":nome", $nome);
				
				$resultado = $sql_preparada->execute();
			
				return $this->populaUsuario($sql_preparada->fetch(PDO::FETCH_ASSOC));
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde." . $e->getMessage();
			}
		}
		private function populaUsuario($dadosDoBanco) {
          $usuario = new Usuario();
          $usuario->setId_usuario($dadosDoBanco['id_administrador']);
          $usuario->setNome($dadosDoBanco['nome']);
          $usuario->setLogin($dadosDoBanco['usuario']);
          $usuario->setSenha($dadosDoBanco['senha']);
          return $usuario;
      }
	}
?>

		

