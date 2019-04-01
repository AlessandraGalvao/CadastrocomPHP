<?php

include_once("conexao.php");

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro simples</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<div class="container">
			<nav>
				<ul class="menu">
					<a href="index.php"><li>Cadastro</li></a>
					<a href="consultas.php"><li>Consultas</li></a>
				</ul>
			</nav>
			<section>
				<h1>Consultas</h1>
				<hr><br><br>
			</section>
		</div>
	</body>
</html>