<?php  
	$conectar = mysqli_connect('localhost','root', 'root');
	$banco = mysqli_select_db($conectar, "bdpalavras");
	
	if(!$conectar)
	{
		echo '<script>alert("erro")</script>';
	}
	
	if(!mysqli_select_db($conectar, 'bdpalavras'))
	{
		echo '<script>alert("Banco de dados não foi encontrado")</script>';
	}
?>