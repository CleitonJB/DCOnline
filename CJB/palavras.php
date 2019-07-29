<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<head>
		<title>DCOnline - Banco de dados</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body style="background: url('palavras.jpg'); background-position: center; background-repeat: no-repeat;">
		<header>
			<center>
				<h1>Dicionário Online</h1>

				<p>Site inteiramente focado em armazenar e demonstrar algumas das palavras mais desconhecidas do portugûes-pt.</p>

				<a href="Menu.php"> 
					<input type="button" value="Cadastrar"> 
				</a>

				<a href="palavras.php"> 
					<input type="button" value="Palavras">
				</a>
			</center>
		</header>
		<center>

			<h1 style="color: white;">Banco de dados:</h1>

		</center>

		<?php  
			$server = "localhost";
			$usuario = "root";
			$senha = "";
			$banco = "dc";
			// Create connection
			$conn = new mysqli($server, $usuario, $senha, $banco);
			// Check connection
			if ($conn->connect_error) {
				die("Falha na conexão: " . $conn->connect_error);
			}
		?>
		<?php
			$sql = "SELECT palavra, classe, descricao FROM palavras ORDER BY palavra ASC";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
					  	// TOPO DA TABELA
						echo "<br>";
						echo "<div id=\"Topo\" align=\"center\">";
					  	  	echo "<div class=\"Organizador\">";
					  	  		//PALAVRA
					  	  		echo "<div id=\"Palavra\">";
					  	  			echo "<p> Palavras </p>";
					  	  		echo "</div>";

					  	  		//CLASSE
					  	  		echo "<div id=\"Classe\">";
					  	  			echo "<p> Classe </p>";
					  	  		echo "</div>";

					  	  		//DESCRICÃO
					  	  		echo "<div id=\"Descricao\">";
					  	  			echo "<p> Descrições </p>";
					  	  		echo "</div>";
					  	  	echo "</div>";
					    echo "</div>";
					    // MOSTRANDO AS PALAVRAS DO BANCO DE DADOS
					  	while($row = $result->fetch_assoc()) {
					  	  	echo "<div align=\"center\">";
					  	  		echo "<div class=\"Organizador\">";
					  	  			//PALAVRA
					  	  			echo "<div class=\"Palavra\">";
					  	  				echo $row["palavra"];
					  	  			echo "</div>";

					  	  			//CLASSE
					  	  			echo "<div class=\"Classe\">";
					  	  				echo $row["classe"];
					  	  			echo "</div>";

					  	  			//DESCRICÃO
					  	  			echo "<div class=\"Descricao\">";
					  	  				echo $row["descricao"];
					  	  			echo "</div>";
					  	  		echo "</div>";
					      	echo "</div>";
					  	}
			} else {
				echo "<br> <br> <br> <br>";
					echo "<div align=\"center\">";
						echo "<h3>";
					  		echo "Não há palavras cadastradas no banco de dados!";
					  	echo "</h3>";
					echo "</div>";
			}
			$conn->close();
		?>

		<style type="text/css">
			h1{
				text-shadow: 1px 3px 7px black;
			}

			h3{
				color: #00ff80;
				font-size: 30px;
				text-shadow: 1px 2px 4px black;
			}

			.Organizador{
				border-radius: 5px;
				width: 98%;
				display: flex;
				flex-direction: horizontal;
			}

			#Topo{
				margin-bottom: 5px;
			}

			p{
				color: white;
			}

			#Palavra, #Descricao, #Classe{
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
				width: 80%;
				margin-left: 10px;

			}

			#Classe{
				width: 20%;
				margin-left: 10px;
			}

			.Palavra, .Descricao, .Classe{
				padding-top: 3px;
				height: 25px;
				color: black;
				border-top: 1px solid black;
				border-bottom: 1px solid black;
				font-size: 18px;
				margin: 1px 0px;
				overflow-x: hidden;
			}

			.Palavra{
				width: 20%;
				background: rgb(0, 255, 128);
				font-family: arial, sans-serif;
			}

			.Classe{
				width: 20%;
				margin-left: 10px;
				background: rgb(100, 255, 158);
				font-family: arial, sans-serif;
			}

			.Descricao{
				width: 80%;
				margin-left: 10px;
				background: rgb(255, 255, 255);
				font-family: arial, sans-serif;
				overflow-y: scroll;
			}
		</style>
	</body>
</html>