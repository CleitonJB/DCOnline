<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<head>
		<title> Entrar </title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>

		<header>
			<center>
				<h1>Dicionário Online</h1>

				<p>Site inteiramente focado em armazenar e demonstrar algumas das palavras mais desconhecidas do portugûes-pt.</p>

				<a href="index.php"> 
					<input type="button" value="Início"> 
				</a>

				<a href="palavras.php"> 
					<input type="button" value="Palavras">
				</a>
			</center>
		</header>

		<div class="Bloco">
			<form action="Login.php" method="post">
				<center>
					<h1> Entre na sua conta </h1>

					<p>Usuário:</p> 
					<input type="text" name="user" autocomplete="off">

					<p>Senha:</p> 
					<input type="password" name="pass" autocomplete="off">

					<br> <br> <br> <br>
					<input type="submit" value="Enviar">

				</center>
			</form>
		</div>
	</body>
</html>