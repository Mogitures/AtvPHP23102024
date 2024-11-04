<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Problema_1</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="style.css">

		<?php

			session_start();

			$_SESSION['nome2'] = $_POST['nome2'];
			$_SESSION['idade2'] = $_POST['idade2'];
			$_SESSION['peso2'] = $_POST['peso2'];
			$_SESSION['altura2'] = $_POST['altura2'];
			$_SESSION['nome1'];
			$_SESSION['idade1'];
			$_SESSION['peso1'];
			$_SESSION['altura1'];


			function comp($n1,$n2){

				if($n1 > $n2) {
					
					echo "<b>";
					echo $_SESSION['nome1'];
					echo "</b> com $n1";

				}else{

					echo "<b>";
					echo $_SESSION['nome2'];
					echo "</b> com $n2";

				}

			}

		 ?>

	</head>

	<body>

		<h2>Comparação</h2>

		<div class="card w-75">
			<div class="card-body">
				
				<h6 class="card-title">Maior altura:</h6>
				<p class="card-text"><?php comp($_SESSION['altura1'], $_SESSION['altura2']);?> metros de altura.</p>
				<a href="#" class="btn btn-primary">❤</a>

			</div>
		</div>

				<h6>Maior idade:</h6>
				<?php comp($_SESSION['idade1'], $_SESSION['idade2']);?> anos de idade.
				<p>
				<h6>Maior peso:</h6>
				<?php comp($_SESSION['peso1'], $_SESSION['peso2']);?> quilos.

			</div>
		</div>

		<div>
			
			<h4><?php echo $_SESSION['nome1']; ?></h4>

			<div><b>Idade: </b><?php echo $_SESSION['idade1'] ?></div>
			<div><b>Altura: </b><?php echo $_SESSION['altura1'] ?></div>
			<div><b>Peso: </b><?php echo $_SESSION['peso1'] ?></div>		

		</div>

		<div>
			
			<h4><?php echo $_SESSION['nome2']; ?></h4>

			<div><b>Idade: </b><?php echo $_SESSION['idade2'] ?></div>
			<div><b>Altura: </b><?php echo $_SESSION['altura2'] ?></div>
			<div><b>Peso: </b><?php echo $_SESSION['peso2'] ?></div>		

		</div>

	</body>

</html>