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
				<h1>Cadastro de Usuários</h1>
				<hr><br><br>

				<form method="post" action="processa.php">
					Nome<br>
					<input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>

					E-mail<br>
					<input type="email" name="email" class="campo" maxlength="50" required><br>

					Profissão<br>
					<input type="text" name="profissao" class="campo" maxlength="40" required><br><br>

					<input type="submit" value="salvar" class="btn">
					<input type="reset" value="limpar" class="btn">
					<br><br>

				</form>
			</section>
		</div>
	</body>
</html>