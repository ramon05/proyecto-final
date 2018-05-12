<?php 
     
      session_start();

      $usuario= $_SESSION['usuario'];

      echo $usuario;

	  if (!isset($usuario) && $usuario="" && $usuario=null) {

	   	   	header("Location:Pagina1.php");

	  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenida al Usuario</title>
</head>
<body>

	<h1>Bienvenidos Usuarios</h1>

	<p>Esta pagina te da la bienvenida</p>

</body>
</html>