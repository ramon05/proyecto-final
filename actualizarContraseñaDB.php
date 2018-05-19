<?php 

     include("conexion.php");

      $conexion=conectar();

      $usuario=$_POST['usuario'];

     $contraseña=$_POST['contra'];

     $confContraseña=$_POST['confiContra'];

     try {

         if ($contraseña != $confContraseña) {
         echo "<script>alert('Las contraseñas deben coincidir, por favor intentelo de nuevo. Gracias');</script>";  
         echo "<meta http-equiv='refresh' content='0;url=actualizarContraseña.php' />";
       }
       else{

         //$sql="UPDATE usuarios SET password= :PASSWORD  WHERE USUARIO= :usuario";
          $sql = "UPDATE usuarios SET password='$contraseña' WHERE usuario='$usuario'";

         $result=$conexion->prepare($sql);

         $result->execute();

         echo "<script>alert('La contraseña ha sido cambiado exitosamente');</script>";
         echo "<meta http-equiv='refresh' content='0;url=pagina1.php' />";

       }
       
     } catch (Exception $e) {

       echo $sql . "<br>" . $e->getMessage();

     }

    $conexion = null; 

?>