<?php  

	$conectar = mysqli_connect('localhost','root', '');
	$banco = mysqli_select_db($conectar, "dc");
	
	if(!$conectar)
	{
		echo '<script>alert("erro")</script>';
	}
	
	if(!mysqli_select_db($conectar, 'dc'))
	{
		echo '<script>alert("Banco de dados não foi encontrado")</script>';
	}
?>
