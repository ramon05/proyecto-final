<?php

    include("conexion.php");

    $conexion=conectar();

   $sql="SELECT * FROM usuarios WHERE usuario= :usurio";

   $resultado=$conexion->prepare($sql);

   $usurio=htmlentities(addslashes($_POST["usurio"]));

   $resultado->bindValue(":usurio",$usurio);

   $resultado->execute();

	$numero_registro=$resultado->rowCount();

	if ($numero_registro !=0) {

	session_start();
	$_SESSION["login"]=$_POST["usurio"];

		 header("Location:PreguntaSeguridad.php");
	}
	else{

		  echo '<script> alert("<h3>contraseña incorrecta</h3>");</script>';
		  
	}

?>