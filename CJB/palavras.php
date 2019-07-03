<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<head>
		<title>DCOnline - Banco de dados</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>
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
		<center>

			<h1>Palavras cadastradas:</h1>

		</center>

		<?php  
			$server = "localhost";
			$usuario = "root";
			$senha = "root";
			$banco = "DC";
			// Create connection
			$conn = new mysqli($server, $usuario, $senha, $banco);
			// Check connection
			if ($conn->connect_error) {
				die("Falha na conexão: " . $conn->connect_error);
			}
		?>
		<?php
			$sql = "SELECT palavra, descricao FROM palavras ORDER BY palavra ASC";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
					  // output data of each row
						echo "<br>";
						echo "<div id=\"Topo\" align=\"center\">";
					  	  	echo "<div class=\"Organizador\">";
					  	  		echo "<div id=\"Palavra\">";
					  	  			echo "<p> Palavras </p>";
					  	  		echo "</div>";

					  	  		echo "<div id=\"Descricao\">";
					  	  			echo "<p> Descrições </p>";
					  	  		echo "</div>";
					  	  	echo "</div>";
					    echo "</div>";
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

			#Topo{
				margin-bottom: 5px;
			}

			p{
				color: white;
			}

			#Palavra{
				padding-top: 3px;
				height: 25px;
				border-top: 1px solid white;
				border-bottom: 1px solid white;
				font-size: 18px;
				margin: 1px 0px;
				width: 20%;
				background: black;
				font-family: arial, sans-serif;
			}

			#Descricao{
				padding-top: 3px;
				height: 25px;
				border-top: 1px solid white;
				border-bottom: 1px solid white;
				font-size: 18px;
				margin: 1px 0px;
				width: 80%;
				margin-left: 10px;
				background: black;
				font-family: arial, sans-serif;
			}

			.Palavra, .Descricao{
				padding-top: 3px;
				height: 25px;
				color: black;
				border-top: 1px solid black;
				border-bottom: 1px solid black;
				font-size: 18px;
				margin: 1px 0px;
				overflow-x: hidden;
				overflow-y: scroll;
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