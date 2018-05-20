<?php

    include("conexion.php");

    $conexion=conectar();

   $sql="SELECT * FROM usuarios WHERE usuario= :login AND PASSWORD= :password";

   $resultado=$conexion->prepare($sql);

   $login=htmlentities(addslashes($_POST["login"]));

   $password=htmlentities(addslashes($_POST["password"]));

   $resultado->bindValue(":login",$login);

   $resultado->bindValue(":password",$password);

   $resultado->execute();

	$numero_registro=$resultado->rowCount();

	if ($numero_registro !=0) {

	session_start();
	$_SESSION["usuario"]=$_POST["login"];

		 header("Location:index.php");
	}
	else{
        
       // echo "<script>alert('Usuario o Contraseña incorrectos o no existen en la Base De Datos');</script>";
       // echo "<meta http-equiv='refresh' content='0;url=pagina1.php' />";
	}

?>