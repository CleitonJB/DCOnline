<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<head>
		<title> Entrar </title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>

		<?php  

			session_start();

			require("coxecao.php");

			// as variáveis login e senha recebem os dados digitados na página anterior
			$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];

			$result = mysql_query("SELECT * FROM `usuario` WHERE `nome` = '$usuario' AND `senha`= '$senha'");
		?>

		<header>
			<center>
				<h1>Dicionário Online</h1>

				<p>Site inteiramente focado em armazenar e demonstrar algumas das palavras mais desconhecidas do portugûes-pt.</p>

				<a href="index.php"> 
					<input type="button" value="Início"> 
				</a>

				<a href="Logar.php"> 
					<input type="button" value="Entrar">
				</a>

				<a href="palavras.php"> 
					<input type="button" value="Palavras">
				</a>
			</center>
		</header>

		<div class="Bloco">
			<form action="cadastro.php" method="post">
				<center>
					<h1> Entre na sua conta </h1>

					<p>Usuário:</p> 
					<input type="text" name="usuario" autocomplete="off">

					<p>Senha:</p> 
					<input type="password" name="senha" autocomplete="off">

					<br> <br> <br> <br>
					<input type="submit" name="" value="Enviar">

				</center>
			</form>
		</div>
	</body>
</html>