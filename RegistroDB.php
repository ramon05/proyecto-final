<?php 
    
    include("conexion.php");
    $conexion=conectar();

    $nombre=$_POST['nomb'];
    $apellido=$_POST['apell'];
    $usuario=$_POST['user'];
    $contraseña=$_POST['contra'];
    $pregunta_sect=$_POST['preg'];
    $respuesta_sect=$_POST['resp']; 
    
    $sql="SELECT * FROM usuarios WHERE usuario= :usuario ";

   $resultado=$conexion->prepare($sql);

   $veriUsuario=htmlentities(addslashes($_POST["user"]));


   $resultado->bindValue(":usuario",$veriUsuario);

   $resultado->execute();

	$numero_registro=$resultado->rowCount();

	echo $numero_registro;

	if ($numero_registro !=0) {

	   echo "nombre de usuario ya existe";
	}
	else{

		try {
	
        $query=$conexion->prepare("INSERT INTO usuarios(usuario, password, nombre, apellido, pregunta, respuesta ) VALUES (:user, :contra, :nomb, :apell, :preg, :resp)");

    	$nuevoUsuario=$query->execute(array(":user"=>$usuario, ":contra"=>$contraseña, ":nomb"=>
    		$nombre, ":apell"=>$apellido, ":preg"=>$pregunta_sect, ":resp"=>$respuesta_sect));


    	$mensaje='<div clas="mensj">
    	<p>Se ha Registrado exitosamente</p>
    	</div>';

        header("Location:Pagina1.php");
        $resultado->closeCursor();

    	} catch (PDOExeption $e) {

    		die('Error: al Registrarse ' . $e->getMessage() );
    		
    	}
    }    
    	
?>