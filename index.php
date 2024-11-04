<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Problema_1</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<h2>Pessoa 1</h2>

	<form name="pessoa1" method="post" action="pessoa2.php">
		
		<div>
			<label for="nome">Nome:</label>
			<input type="text" name="nome1" id="nome" autocomplete="off" required autofocus maxlength="30">
		</div>

		<div>
			<label for="idade">Idade:</label>
			<input type="number" name="idade1" id="idade" min="1" max="120" required autocomplete="off">
		</div>

		<div>
			<label for="peso">Peso:</label>
			<input type="text" name="peso1" value="" placeholder="Utilize '.' invés de ','" required autocomplete="off" min="0" max="600"> Kg
		</div>
		<div>
			<label for="altura">Altura:</label>
			<input type="text" name="altura1" id="altura" required autocomplete="off" placeholder="Utilize '.' invés de ','"> Metros
		</div>
		<div>
			<input type="submit" name="enviar" value="Enviar">
			<input type="reset" name="limpar" value="Limpar">
		</div>

	</form>

</body>
</html>