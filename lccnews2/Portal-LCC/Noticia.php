<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>No Sidebar - Twenty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
	<?php
		session_start();
		if(!isset($_SESSION['s_usuario'])){
			header("location: ..\Login-LCC\Login.php");
		}
		?>
		<div id="page-wrapper">

			<!-- Header -->
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

					<!-- One -->
						<section class="wrapper style4 container">

							<!-- Content -->
							<?php
								include('../funcionalidad/conexion.php');
								$idNum = $_GET['id'];

								$noticia = $conexion->query("SELECT id,titulo,imagen,cuerpo FROM noticias WHERE id='$idNum' ");

								$result = mysqli_fetch_assoc($noticia);
								
								$titulo = $result['titulo'];
							?>
								<div class="content">
									<section>
										<a class="image featured"><img src="<?php echo $result['imagen'] ?>" alt="" /></a>
										<header>
											<h3><?php echo $titulo ?></h3>
										</header>
										<?php echo $result['cuerpo']; ?>
									</section>
								</div>

						</section>

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

	</body>
</html>
