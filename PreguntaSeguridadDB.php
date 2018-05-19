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

	    header("Location:actualizarContraseña.php");
	}
	else{

		//echo "pregunta y respuesta incorrecta";
		echo "<script>alert('La pregunta o respuesta son incorrecta, por favor digite las correspondientes');</script>";
        echo "<meta http-equiv='refresh' content='0;url=PreguntaSeguridad.php' />";
	} 
?>