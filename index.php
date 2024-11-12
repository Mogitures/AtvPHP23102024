<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Problema 1</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">

	<?php

		session_start();

		session_destroy();

	 ?>

</head>
<body>

	<h2>Pessoa 1</h2>

	<form name="pessoa1" method="post" action="pessoa2.php">
		
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" class="form-control" name="nome1" id="nome" autocomplete="off" required autofocus maxlength="30" style="max-width: 45rem;">
		</div>

		<div class="form-group">
			<label for="idade">Idade:</label>
			<input class="form-control" type="number" name="idade1" id="idade" min="1" max="120" required autocomplete="off" style="max-width: 45rem;">
		</div>

		<div class="form-group">
			<label for="peso">Peso:</label>
			<input class="form-control" type="text" name="peso1" value="" placeholder="Utilize '.' invés de ',' (Medida em Kg)" required autocomplete="off" min="0" max="600" style="max-width: 45rem;">
		</div>
		<div>
			<label for="altura">Altura:</label>
			<input class="form-control" type="text" name="altura1" id="altura" required autocomplete="off" placeholder="Utilize '.' invés de ',' (Medida em metros)" style="max-width: 45rem;">
		</div class="form-group">
		<br><br>
		<div>
			<input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
			<input class="btn btn-outline-primary" type="reset" name="limpar" value="Limpar">
		</div>

	</form>

</body>
</html>