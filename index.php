


<!DOCTYPE html>
<html>
<head>
	<title>Bienvenida al Usuario</title>
</head>
<body>
    <?php 
     
	      session_start();

		  if (!isset($_SESSION["usuario"])) {

		   	   	header("Location:Pagina1.php");
		  }
	?>
	<h1>Bienvenidos Usuarios</h1>

	<p>Esta pagina te da la bienvenida</p>

	<a href="CerrarSeccion.php">Cerrar Sección</a>

</body>
</html>