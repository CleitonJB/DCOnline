<?php  

	$conectar = mysqli_connect('localhost','id10107606_root', 'Realmadrid11');
	$banco = mysqli_select_db($conectar, "id10107606_dc");
	
	if(!$conectar)
	{
		echo '<script>alert("erro")</script>';
	}
	
	if(!mysqli_select_db($conectar, 'id10107606_dc'))
	{
		echo '<script>alert("Banco de dados não foi encontrado")</script>';
	}
?>
