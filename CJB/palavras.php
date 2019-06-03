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
			  while($row = $result->fetch_assoc()) {
			      echo $row["palavra"];
			      echo $row["descricao"];
			  }
	} else {
			  echo "Palavras: 0";
			  echo "Descrições: 0";
	}
	$conn->close();
?>