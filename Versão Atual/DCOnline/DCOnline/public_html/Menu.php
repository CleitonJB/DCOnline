<!DOCTYPE html>
<html>
	<head>
		<title>DCOnline - Menu</title>

		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="css/index.css">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body style="background: url('cadastro.jpg'); background-position: top center; background-max-size: 100%; background-height: auto;">
		<header>
			<h1>Dicionário Online</h1>

			<p>Site inteiramente focado em armazenar e demonstrar algumas das palavras mais desconhecidas do portugûes-pt.</p>

			<a href="Menu.php"> 
				<input type="button" value="Início"> 
			</a>

			<a href="palavras.php"> 
				<input type="button" value="Palavras">
			</a>
		</header>

		<div class="Bloco">
			<h1>Cadastro de palavra:</h1> 

			<form action="cadastro.php" method="POST">
				<p>Unidade lexical:</p> 
				<input type="text" name="palavra" autocomplete="off">

				<p>Classe:</p> 
				<input type="text" name="classe" autocomplete="off">

				<p>Conceituação:</p> 
				<textarea rows="5" cols="40" name="descricao" autocomplete="off"></textarea>

				<input type="submit" name="" value="Enviar">
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>