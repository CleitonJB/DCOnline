<?php
	require("conexao.php");

	$palavra = $_POST['palavra'];
	$classe = $_POST['classe'];
	$descricao = $_POST['descricao'];

	$tabela = mysqli_query($conectar, "INSERT INTO palavras (palavra, classe, descricao) VALUES ('$palavra', '$classe', '$descricao')");

	header("Location: Menu.php");
?>