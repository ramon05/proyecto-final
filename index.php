<!DOCTYPE html>
<html lang="es">
<head>
	<title>Bienvenida al Usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/pagina_genearal.css">
</head>
<body>
    <?php 
     
	      session_start();

		  if (!isset($_SESSION["usuario"])) {

		   	   	header("Location:Pagina1.php");
		  }
	?>
	<div class="listma">
		<nav>
			<div class="logo">LOGO</div>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			
		</nav>
	</div>

    <div>
    	<h1>Bienvenidos Usuarios</h1>

	    <p>Esta pagina te da la bienvenida</p>
    </div>
	

	<a href="CerrarSeccion.php">Cerrar Sección</a>

</body>
</html>