<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title></title>

	</head>
	<body>

		<form method="GET">
			<input type="text" name="primeiro-numero">
			<br>
			<input type="text" name="segundo-numero">
			<br>
			<input type="submit" name="operacao" value="adicao">
			<input type="submit" name="operacao" value="subtracao">
			<input type="submit" name="operacao" value="multiplicacao">
			<input type="submit" name="operacao" value="divisao">
			<input type="submit" name="operacao" value="fahrenheit">
			
		</form>
		<div id="resultado">
			<?php
				require_once("servidor.php");
			?>
		</div>

	</body>
</html>