<?php
	include("conexion.php");

	$titulo = $_POST["titulo"];
	$cuerpo = $_POST["cuerpo"];

	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	move_uploaded_file($_FILES["image"]["tmp_name"],"../images/".$_FILES["image"]["name"]);
	$photo="../images/" . $_FILES["image"]["name"];

	$result= $conexion->query("INSERT INTO noticias (titulo,cuerpo,imagen) VALUES ( '$titulo','$cuerpo','$photo')");

	echo "<SCRIPT>alert('Noticia guardada extitosamente');window.location.href = '../Portal-LCC/inicio.php';</SCRIPT>";

	//header("location: ..\Portal-LCC\subir.php");

?>