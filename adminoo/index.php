<?php
	include_once("controller/LoginController.class.php");
	$controller = new LoginController();

	if(isset($_POST['login'])){
		$resposta = $controller->logar($_POST);
		if($resposta['erro']):
?>
			<div class="alert alert-warning alert-dismissible" role="alert">
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  		<strong>Erro! </strong> <?=$resposta['msg']?>;
			</div>
<?php
		endif;
	}
	
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>..:: Admin WBS ::..</title>
		
		<!--  Nucleo do jquery -->
		<link href="js/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/adm-estilo.css" type="text/css" />
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	</head>
	<body id="login-bg"> 
		<div class="container super-centro">
			<img id="img-logo" src="images/shared/logo.png" alt="" />			
			<form name="form1" method="post" class="form-signin">
				<div class="form-group">
					<label for="inputUsuario" class="sr-only">Usuário</label>
					<input type="text" id="inputUsuario" name="usuario" class="form-control" placeholder="Usuário" required autofocus>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="sr-only">Senha</label>
					<input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
				</div>
				<input class="btn btn-lg btn-default btn-block botao-logar" type="submit" value="Entrar" name="login" />
			</form>
		</div>
 		
		<?php
			include("includes/javascript.php");
		?>
	</body>
</html>