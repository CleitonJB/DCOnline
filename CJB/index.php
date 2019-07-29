<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<head>
		<title> DCOnline - Entrar </title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<?php  
			$con = mysqli_connect("localhost", "root", "", "dc");
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
	<body style="background: url('index.jpg'); background-position: top center; background-size: 100%;">
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
			<form action="index.php" method="POST">
				<center>
					<h1> Entrar </h1>

					<p>Usuário:</p> 
					<input type="text" name="user" autocomplete="off">

					<p>Senha:</p> 
					<input type="password" name="pass" autocomplete="off">

					<br> <br> <br> <br>
					<input type="submit" name="log" value="Enviar">

				</center>
			</form>
		</div>
	</body>
</html>