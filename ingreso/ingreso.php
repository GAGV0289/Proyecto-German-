<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$pass = md5($password);

$conexion = mysqli_connect("localhost", "root", "", "nwind");
$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$pass'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas>0) {
	header("location:../indexgio.php");
}
else
{
	echo "<script> alert('Ese usuario y/o password no existen');
			window.location = '../login/Login1.php'; </script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>