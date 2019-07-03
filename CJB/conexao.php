<?php  

	$conectar = mysqli_connect('localhost','root', 'root');
	$banco = mysqli_select_db($conectar, "DC");
	
	if(!$conectar)
	{
		echo '<script>alert("erro")</script>';
	}
	
	if(!mysqli_select_db($conectar, 'DC'))
	{
		echo '<script>alert("Banco de dados não foi encontrado")</script>';
	}
?>
