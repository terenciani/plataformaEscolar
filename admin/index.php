<?php
	require_once 'includes/init.php';
	include_once LIB_CONTROLLER.DS.'LoginController.class.php';

	$controller = new LoginController();

	if(isset($_POST['login'])){
		$resposta = $controller->logar($_POST);
	}
	else{
		$resposta ['msg']="";
	}
	
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>..:: Admin WBS ::..</title>
		
		<!--  Nucleo do jquery -->
		<link href="components/bootstrap-4.0.1/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/adm-estilo.css" type="text/css" />
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	</head>
	<body id="login-bg"> 
		<div class="container super-centro">
			<img id="img-logo" src="imagens/shared/logo.png" alt="" class="img-logo-branco" />
			<form name="form1" method="post" class="form-signin">
				<div class="form-group">
					<label for="inputUsuario" class="sr-only">Usuário</label>
					<input type="text" id="inputUsuario" name="usuario" class="form-control" placeholder="Usuário" required autofocus />
			</div>

				<div class="form-group">
					<label for="inputPassword" class="sr-only">Senha</label>
					<input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required />
				</div>
			
				<h5 class="resposta-erro">
					<?=$resposta['msg']?>
				</h5>
				<input class="btn btn-lg btn-default btn-block botao-logar" type="submit" value="Entrar" name="login" />
			</form>
		</div>

		<!--<div class="container super-centro">
			<img id="img-logo" src="imagens/shared/logo.png" alt="" />			
			<form name="form1" method="post" class="form-signin">
				<div class="form-group">
					<label for="inputUsuario" class="sr-only">Usuário</label>
					<input type="text" id="inputUsuario" name="usuario" class="form-control" placeholder="Usuário" required autofocus>
			</div>

				<div class="form-group">
					<label for="inputPassword" class="sr-only">Senha</label>
					<input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
				</div>
			
				<h5>
					<?=$resposta['msg']?>
				</h5>
				<input class="btn btn-lg btn-default btn-block botao-logar" type="submit" value="Entrar" name="login" />
			</form>
		</div>-->
 		
		<script src="components/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="components/bootstrap-4.0.1/js/bootstrap.min.js"></script>
		<script src="components/jquery-confirm/jquery-confirm.js" type="text/javascript"></script>
		<script src="components/bootstrap-datepicker-1.6.1-dist/js/bootstrap-datepicker.min.js"></script>
		<script src="components/bootstrap-datepicker-1.6.1-dist/locales/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
		<script src="js/script.js"></script>
	</body>
</html>