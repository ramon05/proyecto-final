<!DOCTYPE html>
<html lang="es">
<head>
	<title>Bienvenida al Usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/pagina_genearal.css">
</head>
<body background="img/denim.jpg">
    <?php 
     
	      session_start();

		  if (!isset($_SESSION["usuario"])) {

		   	   	header("Location:Pagina1.php");
		  }
	?>
	<div class="listma">
		<nav class="menu">
			<div class="logo">LOGO</div>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="AcercaDe.php">About</a></li>
					<li><a href="contactos.php">Contact</a></li>
					<li><a href="CerrarSeccion.php">Cerrar Sección</a></li>
				</ul>
			
		</nav>
	</div>

    <div id="BienvendidaUsuario">
    	<h1>Bienvenidos Usuarios</h1>

    	<img src="img/gif-animado-3d.gif" id="imgGif">
    <?php 
     
     echo "<h3>" . " Usuario : " . $_SESSION['usuario'] . "</h3>";

    ?>
	    <p>Esta pagina te da la bienvenida</p>
    </div>

</body>
</html>