<?php
$server   = "localhost";
$user     = "root";
$password = "root";
$db       = "prueba";

$con = mysqli_connect($server,$user,$password,$db);


if (!$con) {

	die("Se a producido un error al conectarse:".mysqli_connect_error());
}else{
	echo "<script>alert('Conexión exitosa')</script>";
}


?>