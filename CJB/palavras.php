<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<head>
		<title>Palavras Cadastradas</title>
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
		<center>

			<h1>Palavras cadastradas:</h1>

		</center>

		<?php  
			$server = "localhost";
			$usuario = "root";
			$senha = "root";
			$banco = "bdpalavras";
			// Create connection
			$conn = new mysqli($server, $usuario, $senha, $banco);
			// Check connection
			if ($conn->connect_error) {
				die("Falha na conexão: " . $conn->connect_error);
			}
		?>
		<?php
			$sql = "SELECT palavra, descricao FROM palavras";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
					  // output data of each row
						echo "<br>";
					  while($row = $result->fetch_assoc()) {
					  	  echo "<div align=\"center\">";
					  	  	echo "<div class=\"Organizador\">";
					  	  		echo "<div class=\"Palavra\">";
					  	  			echo $row["palavra"];
					  	  		echo "</div>";

					  	  		echo "<div class=\"Descricao\">";
					  	  			echo $row["descricao"];
					  	  		echo "</div>";
					  	  	echo "</div>";
					      echo "</div>";
					  }
			} else {
				echo "<br> <br> <br> <br>";
					echo "<div align=\"center\">";
					  echo "Nenhuma palavra cadastrada no banco de dados!";
					echo "</div>";
			}
			$conn->close();
		?>

		<style type="text/css">
			h1{
				text-shadow: 1px 3px 7px black;
			}

			.Organizador{
				border-radius: 5px;
				width: 90%;
				display: flex;
				flex-direction: horizontal;
			}

			.Palavra, .Descricao{
				height: 25px;
				color: black;
				border-top: 1px solid black;
				border-bottom: 1px solid black;
				font-size: 18px;
				margin: 1px 0px;
			}

			.Palavra{
				width: 20%;
				background: white;
				font-family: arial, sans-serif;
			}

			.Descricao{
				width: 80%;
				margin-left: 10px;
				background: #BDBDBD;
				font-family: arial, sans-serif;
			}
		</style>
	</body>
</html>