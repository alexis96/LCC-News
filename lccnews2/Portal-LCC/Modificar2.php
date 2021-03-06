<?php
	include('../funcionalidad/conexion.php');
	session_start();
?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<link rel="shortcut icon" href="favicon.ico">
		<title>Subir LCC-NEWS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="left-sidebar">
		<?php
			if(!isset($_SESSION['s_usuario'])){
				header("location: ..\Login-LCC\Login.php");
			}
		?>
		<div id="page-wrapper">

			<!-- Header -->
      <header id="header" class="al">
        <h1 id="logo"><a href="Inicio.php">Inicio</span></a></h1>
        <nav id="nav">
          <ul>
            <li class="current"><a href="">administrador</a></li>
            <li class="submenu">
              <a href="#">Opciones</a>
              <ul>
                <li><a href="Subir.php">Subir noticia</a></li>
                <li><a href="Eliminar.php">Eliminar noticia</a></li>
                <li><a href="Modificar.php">Modificar noticia</a></li>
                <li><a href="../funcionalidad/cerrarSesion.php" class="button special">cerrar sesion</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-laptop"></span>
						<h2>Modifique la <strong>noticia</strong></h2>
						<p>Haga los cambios necesarios</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container 75%">

							<!-- Content -->
								<div class="content">
								<?php

									if(@$_GET["id"]){
										$num = @$_GET["id"];
										$noticia = $conexion->query("SELECT cuerpo,titulo FROM noticias WHERE id='$num'");
										$result = mysqli_fetch_assoc($noticia);
										$cuerpo = $result["cuerpo"];
										$titulo = $result["titulo"];
								?>

									<form action="../funcionalidad/modificarnot.php" name="modificar" method="post"  id="modificar" enctype="multipart/form-data">
										<input type="hidden" name="numero" id="numero" value="<?php echo $num; ?>">
										<div class="row 50%">
											<div class="12u">
												<input type="text" name="titulo" value="<?php echo $titulo; ?>" maxlength="60"/>
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea name="cuerpo"  rows="7" maxlength="200"><?php echo $cuerpo; ?></textarea>
											</div>
										</div>

										<div class="row">
											<div class="12u">
												<input type="file" id="file" name="image" multiple />
												<span>Imagen.jpg</span>
											</div>
										</div>

										<div class="row">
											<div class="12u">
												<ul class="buttons">
													<li><input type="submit" class="special" value="Modificar noticia" /></li>
												</ul>
											</div>
										</div>
									</form>
									<?php } ?>
								</div>

						</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
