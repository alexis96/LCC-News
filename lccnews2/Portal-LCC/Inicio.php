<?php

	include('../funcionalidad/conexion.php');
	session_start();
?>
<!DOCTYPE HTML>



<html>
	<head>
		<link rel="shortcut icon" href="favicon.ico">
		<title>Portal LCC-NEWS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="index">
		
		<?php
		if(!isset($_SESSION['s_usuario'])){
			header("location: ..\Login-LCC\Login.php");
		}
		?>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="al">
					<h1 id="logo"><a href="">Inicio</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="Inicio.php">administrador</a></li>
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
						<h2>LCC NEWS!</h2>
						<p> Portal de noticias de ciencias de la computacion</p>
					</header>


					<!-- Three -->
						<section class="wrapper style3 container special">

							<header class="major">
								<h2>Ultimas <strong>noticias</strong></h2>
							</header>

							<div class="row">

								<?php 

									$noticia = $conexion->query("SELECT id,titulo,imagen FROM noticias ORDER BY id DESC");

									for($x = 0; $x < 4; $x++){

										$result = mysqli_fetch_assoc($noticia);
										$idNum = $result['id'];
										$titulo = $result['titulo'];


									 ?>
									<div class="6u 12u(narrower)">

										<section>
											<a href="Noticia.php?id=<?php echo $idNum ?>" class="image featured"><img src="<?php echo $result['imagen'];?>" alt="" /></a>
											<header>
												<h3><?php echo $titulo ?></h3>
											</header>
										</section>

									</div>

								<?php } ?>

							</div>

							<footer class="major">
								<ul class="buttons">
									<li><a href="ListaNoticias.php" class="button">Ver mas</a></li>
								</ul>
							</footer>

						</section>

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

	</body>

</html>
