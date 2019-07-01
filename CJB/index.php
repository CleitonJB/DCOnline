<!-- https://www.youtube.com/watch?v=aIsu9SPcGbU -->

<?php  
	$host ="localhost";
	$user ="root";
	$password ="root";
	$db ="bdpalavras";

	$conectando = mysql_connect($host, $user, $password);
	$conexao = mysql_select_db($conectando, $db);

	if (isset($_POST['login'])) {
		$uname=$_POST['login'];
		$password=$_POST['senha'];

		$sql="select * from usuarios where login='".$uname."'AND senha='".$password."'limit 1";

		$result=mysqli_query($sql)

		if (mysqli_num_rows($result)==1) {
			echo "Você logou com sucesso";
			exit();
		}
		else{
			echo "Login inválido";
			exit();
		}
	}
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<head>
		<title> DCOnline - Login </title>
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
			<form method="POST" action="#">
				<center>
					<h1> Entre na sua conta </h1>

					<p>Usuário:</p> 
					<input type="text" name="login" autocomplete="off">

					<p>Senha:</p> 
					<input type="password" name="senha" autocomplete="off">

					<br> <br> <br> <br>
					<input type="submit" name="entrar" value="Enviar">

				</center>
			</form>
		</div>
	</body>
</html>