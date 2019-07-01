<!-- http://blog.ultimatephp.com.br/sistema-de-login-php/ -->

<?php 
	$login = $_POST['login'];
  $senha = md5($_POST['senha']);

	$entrar = $_POST['entrar'];

	$connect = mysqli_connect('localhost','root','root');
	$db = mysqli_select_db('bdpalavras');

  	if (isset($entrar)) {
    	$verifica = mysqli_query("SELECT login, senha FROM usuarios WHERE login ='$login' AND senha ='$senha'") or die("Usuario não encontrado");
      if (mysqli_num_rows($verifica) <= 0){
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:Menu.php");
      }
  	}
?>