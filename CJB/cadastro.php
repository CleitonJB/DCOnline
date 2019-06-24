<?php
	require("conexao.php");

	$palavra = $_POST['palavra'];
	$descricao = $_POST['descricao'];

	$tabela = mysql_query($conectar, "INSERT INTO palavras (palavra, descricao) VALUES ('$palavra','$descricao')");

	header("Location: index.php");
?>