<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Problema_1</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css.css">

	<?php

		$comp = [];
		$fname = [];

		session_start();

		$_SESSION['nome2'] = $_POST['nome2'];
		$_SESSION['idade2'] = $_POST['idade2'];
		$_SESSION['peso2'] = $_POST['peso2'];
		$_SESSION['altura2'] = $_POST['altura2'];
		$_SESSION['nome1'];
		$_SESSION['idade1'];
		$_SESSION['peso1'];
		$_SESSION['altura1'];

		if ($_SESSION['altura1'] > $_SESSION['altura2']) {
			
			$comp = [1 => $_SESSION['altura1']];
			$fname = [1 => $_SESSION['nome1']];

		}else{

			$comp = [1 => $_SESSION['altura2']];
			$fname = [1 => $_SESSION['nome2']];

		}

		if ($_SESSION['idade1'] > $_SESSION['idade2']) {
			
			$comp = [2 => $_SESSION['idade1']];
			$fname = [2 => $_SESSION['nome1']];

		}else{

			$comp = [2 => $_SESSION['idade2']];
			$fname = [2 => $_SESSION['nome2']];

		}

		if ($_SESSION['peso1'] > $_SESSION['peso2']) {
			
			$comp = [3 => $_SESSION['peso1']];
			$fname = [3 => $_SESSION['nome1']];

		}else{

			$comp = [3 => $_SESSION['peso2']];
			$fname = [3 => $_SESSION['nome2']];

		}

	 ?>

</head>
<body>

	<?php 

		echo $comp[1];

	 ?>

	<h2>Comparação</h2>

	<div>
		
		<h6>Maior altura:</h6>
		<h4><?php echo $fname[1]; ?></h4> com <b><?php echo $comp[1]; ?></b> metros de altura.

	</div>



	<div>
		
		<h4><?php echo $_SESSION['nome1']; ?></h4>

		<div><b>Altura: </b><?php $_SESSION['idade1'] ?></div>
		<div><b>Altura: </b><?php $_SESSION['altura1'] ?></div>
		<div><b>Altura: </b><?php $_SESSION['peso1'] ?></div>		

	</div>

	<div>
		
		<h4><?php echo $_SESSION['nome2']; ?></h4>

		<div><b>Altura: </b><?php $_SESSION['idade2'] ?></div>
		<div><b>Altura: </b><?php $_SESSION['altura2'] ?></div>
		<div><b>Altura: </b><?php $_SESSION['peso2'] ?></div>		

	</div>



	</form>

</body>
</html>