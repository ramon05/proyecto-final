<!DOCTYPE html>
<html lang="es">
<head>
	<title>Contactos</title>
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

    <div id="paginaContacto">
    	<h1>Contactos Usuarios</h1>
    	<div id="foto">
    		<img src="img/Ramon.jpg">
    	</div>
    	
        <div id="list">

        	 <ul>
        	 	<li>Datos Personales</li>
        	 	<li>Nombre : Ramon Agustin</li>
        	 	<li>Apellido : Castillo Veras</li>
        	 	<li>Cedula : 402-2264799-8</li>
        	 	<li>Nacionalidad : Dominicana</li>
        	 	<li>Ocupación : Estudiante</li>
        	 	<li>Teléfono : 809-983-4723</li>
        	 	<li>Matrícula : 100316394</li>
        	 	<li>Correo : ramoncastillo051991@gmail.com</li>
        	 	<li>Cuenta GitHob :<a href="https://github.com/ramon05">GitHub</a></li>

        	 </ul>
        </div>
    </div>

</body>
</html>