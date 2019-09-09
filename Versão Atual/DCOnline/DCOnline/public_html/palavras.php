<!DOCTYPE html>
<html>
	<head>
		<title>DCOnline - Banco de dados</title>

		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/palavras.css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body style="background-image: url('img/palavras.jpg');">
		<header>
				<h1>Dicionário Online</h1>

				<p>Site inteiramente focado em armazenar e demonstrar algumas das palavras mais desconhecidas do portugûes-pt.</p>

				<a href="Menu.php"> 
					<input type="button" value="Cadastrar"> 
				</a>

				<a href="palavras.php"> 
					<input type="button" value="Palavras">
				</a>
		</header>

		<div class="Titulo"> 
			<h1>Banco de dados:</h1>
		</div>

		<?php  
			$server = "localhost";
			$usuario = "id10107606_root";
			$senha = "R3@lm@dr1d11";
			$banco = "id10107606_dc";
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
			/* TABELA */
			echo "<div class=\"Tabela\">";
				/* HEADER DA TABELA */
				echo "<div class=\"Header\">";
					echo "<h3 class=\"palavra\"> 	Unidade lexial 	</h3>";
					echo "<h3 class=\"classe\"> 	Classe 			</h3>";
					echo "<h3 class=\"descricao\"> 	Conceituação 	</h3>";
				echo "</div>";
				/* COLUNAS DA TABELA */
			echo "</div>";
			/* FIM DA TABELA */
			
			if ($result->num_rows > 0) {
				// MOSTRANDO AS PALAVRAS DO BANCO DE DADOS
				while($row = $result->fetch_assoc()) {
					/* TABELA */
					echo "<div class=\"Tabela\">";
						/* COLUNAS DA TABELA */
						echo "<div class=\"Colunas\">";
							echo "<h6 class=\"palavra\">" 								. $row["palavra"] 	. "</h6>";
							echo "<h6 class=\"classe\">" 								. $row["classe"] 	. "</h6>";
							echo "<h6 style=\"text-align: left\" class=\"descricao\">" 	. $row["descricao"] . "</h6>";
						echo "</div>";
					echo "</div>";
					/* FIM DA TABELA */	
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
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>