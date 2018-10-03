<?php  
session_start();
	include_once LIB_DAO.DS.'DaoProfissionalizante.class.php';
	
  	class Controller {

  		public function logarr($post){
  			
			$hitorico  	= addslashes($post["historico"]);
			$funcionamento	= addslashes($post["funcionamento"]);

			$dao = new DaoUsuario();

			$usuario = $dao->buscarUsuarioPorLogin($login);
			
			if(is_null($funcionamento->getId_funcionamento())){
				return array("erro"=>true, "msg"=>"funcionamento");   
			}else{
				if($enviar == $funcionamento ->getSenha()){
					$_SESSION["id_usuario"] 	= $usuario->getId_usuario();
					$_SESSION["nome_usuario"] 	= $usuario->getNome();
            		$_SESSION["logado"] 		= true;
					header("Location: dirname(__FILE__)/../inicio.php");
				}else{
					return array("erro"=>true, "msg"=>"Senha Incorreta!");	
				}
			}
		}
		function getIdUsuario(){
			return $_SESSION["id_usuario"];
		}

		function deslogar(){
			session_destroy();
			header("Location: dirname(__FILE__)/../index.php");
		}

		function verificarLogado(){
			if(!isset($_SESSION["logado"])){
				unset($_SESSION['logado'], $_SESSION['id_usuario'], $_SESSION['nome_usuario']);
				header("Location: dirname(__FILE__)/../index.php");
			}
   		}
	}
?>
