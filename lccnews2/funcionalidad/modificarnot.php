<?php
	include("conexion.php");

	$titulo = $_POST["titulo"];
	$cuerpo = $_POST["cuerpo"];
	$id = $_POST["numero"];




	if($_FILES["image"]["size"]){
		
		$file=$_FILES['image']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name= addslashes($_FILES['image']['name']);
		move_uploaded_file($_FILES["image"]["tmp_name"],"../images/" . $_FILES["image"]["name"]);
		$photo="../images/" . $_FILES["image"]["name"];

		$result= $conexion->query("UPDATE noticias SET  titulo='$titulo' , cuerpo='$cuerpo' , imagen='$photo' WHERE id='$id'");
	}else{
		$result= $conexion->query("UPDATE noticias SET titulo='$titulo' , cuerpo='$cuerpo'  WHERE id='$id'");

	}

	echo "<SCRIPT>alert('Noticia modificada extitosamente');window.location.href = '../Portal-LCC/modificar.php';</SCRIPT>";
//	header("location: ..\Portal-LCC\Modificar.php");

?>
