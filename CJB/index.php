<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<head>
		<title>CJB - Home</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>
		<header>
			<center>
				<h1>Dicionário Online</h1>

				<p>Site inteiramente focado em armazenar e demonstrar algumas das palavras mais desconhecidas do portugûes-pt.</p>

				<a href="index.php"> 
					<input type="button" value="Home"> 
				</a>

				<a href="palavras.php"> 
					<input type="button" value="Palavras">
				</a>
			</center>
		</header>

		<div class="Bloco">
			<center>
				<h1>Cadastre uma nova palavra!</h1>

				<form action="cadastro.php" method="post">
					<p>Palavra:</p> 
					<input type="text" name="palavra" autocomplete="off">

					<p>Descrição:</p> 
					<input type="text" name="descricao" autocomplete="off">

					<br> <br> <br> <br>
					<input type="submit" name="" value="Enviar">
				</form>
			</center>
		</div>
	</body>
</html>