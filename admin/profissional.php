<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<form method="POST">
		<label>Sua escola possui educação profissional?<br>
			<input type="radio" name="CRUD"  value="yes">Sim 
			<input type="radio" name="CRUD"  value="no">Não
		</label>
		<input type="submit" value="Enviar">
		<?php
			if (isset($_POST['CRUD'])) :
				$resp = $_POST['CRUD'];
				if ($resp == "yes"):
		?>
			<label>
				<input type="text" name="nome">				
			</label>	
			<label>
				<input type="text" name="sobrenome">				
			</label>
					<?php else: ?>

						<p> A pagina profissionalizante não esta dísponível para 
						esta instituição </p>
		<?php endif;
		 endif ?>			
	</form>
</body>
</html>