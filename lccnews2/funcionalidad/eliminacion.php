<?php
	include("conexion.php");

	$num = $_GET["id"];
	$noticias = $conexion->query("DELETE FROM noticias WHERE id='$num'");

	echo "<SCRIPT>alert('Noticia eliminada extitosamente');window.location.href = '../Portal-LCC/Eliminar.php';</SCRIPT>";

	//header("location:  ..\Portal-LCC\Eliminar.php"); 
?>