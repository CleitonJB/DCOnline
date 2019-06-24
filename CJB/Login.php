<?php
// to get values passe from form in login.php file
$username = $_POST['user'];
$password = $_POST['pass'];

// to prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($username);

//conexão
$conectar = mysqli_connect('localhost','root', 'root');
$banco = mysqli_select_db($conectar, "bdpalavras");

// Query the database for user
$result = mysqli_query("SELECT * FROM users WHERE username = '$username' AND password = '$password'")or die('Failed to query database'.mysqli_error());

//$query = "SELECT * FROM users WHERE username = '".$username."' AND password = ".$password;
//$result = mysqli_query($banco, $query) or die('Invalid query: ' . $conexao->error); 

$row = mysqli_fetch_array($result);
if ( $row['username'] == $username && $row['password'] == $password ) {
	echo "login success! Welcome".$row['username'];
} else {
	echo "Failed to login!";
}

?>