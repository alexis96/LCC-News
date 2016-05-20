<?php
	session_start();
	include("../funcionalidad/conexion.php");

	$usuario = $_POST["usuario"];
	$password = $_POST["password"];
/* WHERE username='$usuario' AND password='$password'

*/
	$validacion = $conexion->query("SELECT * FROM users WHERE username='$usuario' and password='$password'");

	if($validacion->num_rows>0){
		$_SESSION['s_usuario'] = $usuario;
		header("location: ..\Portal-LCC\Inicio.php");
	}else{
		
		session_destroy();
		echo "<SCRIPT>alert('Usuario y/o Password incorrectos');window.location.href = '../Login-LCC/Login.php';</SCRIPT>";
	//	header("location: ..\Login-LCC\Login.php");
	}
?>