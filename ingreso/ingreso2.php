<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$conexion = mysqli_connect("localhost", "root", "", "nwind");
$consulta = "INSERT INTO usuarios (usuario, password) VALUES ('$usuario',MD5('$password'))";	
$resultado = mysqli_query($conexion, $consulta);
header("location:../indexgio.php");
mysqli_close($conexion);

?>