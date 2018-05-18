<?php 

   include("conexion.php");

    $conexion=conectar();

   $sql="SELECT * FROM usuarios WHERE pregunta= :Pregunta AND respuesta= :Respuesta";

   $result=$conexion->prepare($sql);

   $preg=$_POST['preg'];

   $resp=$_POST['resp'];

   $result->bindValue(":Pregunta",$preg);

   $result->bindValue(":Respuesta",$resp);

   $result->execute();

	$cantRegistro=$result->rowCount();

	if ($cantRegistro>0) {

	//session_start();
	//$_SESSION["usuario"]=$_POST["login"];

		 //header("Location:index.php");
	    echo "ha atualizado";
	}
	else{

		  echo "pregunta y respuesta incorrecta";
	} 
?>