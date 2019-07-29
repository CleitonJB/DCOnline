<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<head>
		<title>DCOnline - Menu</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body style="background: url('cadastro.jpg'); background-position: top center; background-size: 100%; background-repeat: no-repeat;">
		<header>
			<center>
				<h1>Dicionário Online</h1>

				<p>Site inteiramente focado em armazenar e demonstrar algumas das palavras mais desconhecidas do portugûes-pt.</p>

				<a href="Menu.php"> 
					<input type="button" value="Início"> 
				</a>

				<a href="palavras.php"> 
					<input type="button" value="Palavras">
				</a>
			</center>
		</header>

		<div class="Bloco">
			<center>
				<h1>Cadastro de palavra:</h1> 

				<form action="cadastro.php" method="POST">
					<p>Palavra:</p> 
					<input type="text" name="palavra" autocomplete="off">

					<p>Classe:</p> 
					<input type="text" name="classe" autocomplete="off">

					<p>Descrição:</p> 
					<textarea rows="5" cols="40" name="descricao" autocomplete="off"></textarea>

					<br> <br> <br> <br>
					<input type="submit" name="" value="Enviar">
				</form>
			</center>
		</div>
	</body>
</html>