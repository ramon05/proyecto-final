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

	    //$query="INSERT INTO usuarios ('usuario', 'password', 'nombre', 
    	//'apellido', 'pregunta', 'respuesta') VALUES (:user, :contra, :nomb, :apell, :preg, :resp)";		
        $query=$conexion->prepare("INSERT INTO usuarios(usuario, password, nombre, apellido, pregunta, respuesta ) VALUES (:user, :contra, :nomb, :apell, :preg, :resp)");
    	//$nuevoUsuario=$conexion->prepare($query);

         //$nuevoUsuario->bindParam(':apell',$apellido, PDO::PARAM_STR);
         //$nuevoUsuario->bindParam(':nomb',$nombre, PDO::PARAM_STR);
         //$nuevoUsuario->bindParam(':contra',$contraseña, PDO::PARAM_STR);
         //$nuevoUsuario->bindParam(':pregtSect',$pregunta_sect, PDO::PARAM_STR);
         //$nuevoUsuario->bindParam(':resptSect',$respuesta_sect, PDO::PARAM_STR);
         //$nuevoUsuario->bindParam(':user',$usuario, PDO::PARAM_STR);

         //$ejecutar=$nuevoUsuario->execute();

    	$nuevoUsuario=$query->execute(array(":user"=>$usuario, ":contra"=>$contraseña, ":nomb"=>
    		$nombre, ":apell"=>$apellido, ":preg"=>$pregunta_sect, ":resp"=>$respuesta_sect));

    		$mensaje='<div clas="mensj">
    	<p>Se ha Registrado exitosamente</p>
    	</div>';
        echo "se han guardado correctamente";
        $resultado->closeCursor();

    	} catch (PDOExeption $e) {

    		die('Error: al Registrarse ' . $e->getMessage() );
    		
    	}
    }    
    	
?>