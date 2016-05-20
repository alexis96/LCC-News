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
		<title>Modificar LCC-NEWS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
	<!--	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
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
						<h2>Modificar <strong>noticias</strong></h2>
						<p></p>
					</header>

					<!-- one -->
					<div class="wrapper style4 special container 75%">
						<h2>LISTA DE NOTICIAS</h2>
						<div class="list-group">
              <?php 

								$noticia = $conexion->query("SELECT id,titulo,cuerpo FROM noticias ORDER BY id DESC");

								while($result = mysqli_fetch_assoc($noticia)){
									$idNum = $result['id'];
									$titulo = $result['titulo'];
									$cuerpo = $result['cuerpo'];
							?>
  							<a href="Modificar2.php?id=<?php echo $idNum; ?>" class="list-group-item">
  								<h4 class="list-group-item-heading"> <?php echo $titulo; ?> </h4>
  							</a>
              <?php } ?>

						</div>
					</div>

				</article>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
</html>
