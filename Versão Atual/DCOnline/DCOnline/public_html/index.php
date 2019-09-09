<!DOCTYPE html>
<html>
	<head>
		<title> DCOnline - Entrar </title>

		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="css/index.css">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<?php  
			$con = mysqli_connect("localhost", "id10107606_root", "R3@lm@dr1d11", "id10107606_dc");
			if (isset($_POST['log'])) {
				$username = mysqli_real_escape_string($con,$_POST['user']);
				$passwd = mysqli_real_escape_string($con,$_POST['pass']);

				if ($username!="" && $passwd!="") {
					$sql = "SELECT id FROM users WHERE username='$username' and password='$passwd'";
					$result = mysqli_query($con, $sql);
					$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

					$count = mysqli_num_rows($result);
					if ($count==1) {

						header("location:Menu.php");
					}else{
						
						echo '<script>alert("Usuário e/ou senha incorreto(s)!")</script>';
					}
				}
			}
		?>
	</head>
	<body style="background: url('img/index.jpg'); background-position: top center; background-max-size: 100%; background-height: auto;">
		<header>
			<h1>Dicionário Online</h1>

			<p>Site inteiramente focado em armazenar e demonstrar algumas das palavras mais desconhecidas do portugûes-pt.</p>

			<a href="index.php"> 
				<input type="button" value="Início"> 
			</a>

			<a href="palavras.php"> 
				<input type="button" value="Palavras"> 
			</a>
		</header>

		<div class="Bloco">
			<form action="index.php" method="POST">
				<h1> Entrar </h1>

				<p>Usuário:</p> 
				<input type="text" name="user" autocomplete="off">

				<p>Senha:</p> 
				<input type="password" name="pass" autocomplete="off">

				<input type="submit" name="log" value="Enviar">
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>