<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <?php 
	   try {

	   	   $base= new PDO('mysql:host=localhost; dbname=login','root','mnjjar05');

	   	   $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	   	   $sql="SELECT * FROM usuarios WHERE usuario= :login AND PASSWORD= :password";

	   	   $resultado=$base->prepare($sql);

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

           	  header("Location:Pagina1.php");
           }

	   } catch (Exception $e) {

	   		die('Error: ' . $e->getMessage() );

	   }

	?> 
</body>
</html>