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
		<div class="container">
			<div id="comparacao">

				<h2>Comparação</h2>
				<br>
				<div class="card w-75" style="max-width: 25rem;">
					<div class="card-body">
						
						<h6 class="card-title">Maior altura:</h6>
						<p class="card-text"><?php comp($_SESSION['altura1'], $_SESSION['altura2']);?> metros de altura.</p>
						<div align="right"><a href="#" class="btn btn-light aright">❤</a></div>

					</div>
				</div>
				<br>
				<div class="card w-75" style="max-width: 25rem;">
					<div class="card-body">

						<h6 class="card-title">Maior idade:</h6>
						<p class="card-text"><?php comp($_SESSION['idade1'], $_SESSION['idade2']);?> anos de idade.</p>
						<div align="right"><a href="#" class="btn btn-light aright">❤</a></div>
					
					</div>
				</div>
				<br>
				<div class="card w-75" style="max-width: 25rem;">
					<div class="card-body">

						<h6 class="card-title">Maior peso:</h6>
						<p class="card-title"><?php comp($_SESSION['peso1'], $_SESSION['peso2']);?> quilos.</p>
						<div align="right"><a href="#" class="btn btn-light aright">❤</a></div>

					</div>
				</div>
			</div>

				<div id="dados">
					<h2>Dados</h2>
					<br>
					<div class="card text-black bg-light mb-3" style="max-width: 18rem;">
						
						<div class="card-header"><?php echo $_SESSION['nome1']; ?></div>

						<div class="card-body">
							<div class="card-text">
								<div><b>Idade: </b><?php echo $_SESSION['idade1'] ?></div>
								<div><b>Altura: </b><?php echo $_SESSION['altura1'] ?></div>
								<div><b>Peso: </b><?php echo $_SESSION['peso1'] ?></div>
							</div>
						</div>		

					</div>

					<br>

					<div class="card text-black bg-light mb-3" style="max-width: 18rem;">
						
						<div class="card-header"><?php echo $_SESSION['nome2']; ?></div>

						<div class="card-body">
							<div class="card-text">
								<div><b>Idade: </b><?php echo $_SESSION['idade2'] ?></div>
								<div><b>Altura: </b><?php echo $_SESSION['altura2'] ?></div>
								<div><b>Peso: </b><?php echo $_SESSION['peso2'] ?></div>
							</div>
						</div>		
					</div>
				</div>
			</div>
		<br>
		<hr>
		<br>
		<a href="index.php" class="btn btn-outline-primary">Enviar novamente</a>

	</body>

</html>