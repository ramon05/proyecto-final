<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cerrar</title>
</head>
<body>
	<?php  
	  session_start();

	  session_destroy();

	  header("Location:PaginaDespedida.php");
	?>	
</body>
</html>