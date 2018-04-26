<?php
	session_start();
	include_once("dao/UsuarioDao.class.php");
	
  	class LoginController {

  		public function logar($post){
  			
  			// Recebendo os dados passados pela página "form_contato.php"
			$login  	= addslashes($post["usuario"]);
			$senha 		= addslashes($post["senha"]);

			$dao = new UsuarioDao();

			$usuario = $dao->buscarUsuarioPorLogin($login);
			
			if(is_null($usuario->getId_usuario())){
				return array("erro"=>true, "msg"=>"Usuário não Encontrado!");   
			}else{
				if($senha == $usuario->getSenha()){
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