<?php
	include('../funcionalidad/conexion.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>LCC-NEWS</title>
		<meta name="description" content="Blueprint: Background Slideshow" />
		<meta name="keywords" content="blueprint, background image slideshow, fullscreen slideshow, jquery, fullscreen image, web development" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
	
		<div class="container">
			<header class="clearfix">
			
			</header>
			<div class="main">
				<ul id="cbp-bislideshow" class="cbp-bislideshow">
				<?php 
					$noticia = $conexion->query("SELECT id,titulo,cuerpo,imagen FROM noticias ORDER BY id desc");

					while($result = mysqli_fetch_assoc($noticia)){
						$idNum = $result['id'];
						$titulo = $result['titulo'];
				?>
					<li><img src="<?php echo $result['imagen']; ?>" alt="image<?php echo $result['imagen']; ?>"/>
					<titulo><?php echo $titulo; ?></titulo>
					<p><?php echo $result['cuerpo']; ?></p></li>
				<?php
				}
				?>

				</ul>
				<!-- Controles de de pantalla
				<div id="cbp-bicontrols" class="cbp-bicontrols">
					<span class="cbp-biprev"></span>
					<span class="cbp-bipause"></span>
					<span class="cbp-binext"></span>
				</div> -->
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<!-- imagesLoaded jQuery plugin by @desandro : https://github.com/desandro/imagesloaded -->
		<script src="js/jquery.imagesloaded.min.js"></script>
		<script src="js/cbpBGSlideshow.min.js"></script>
		<script>
			$(function() {
				cbpBGSlideshow.init();
			});
		</script>
	</body>
</html>