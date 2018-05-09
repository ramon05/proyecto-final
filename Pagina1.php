<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>Usuario</title>.
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
</head>
<body>
     <form>
         <center><img src="img/user.png" id="img"></center>
         <center><label id="iniciar">Iniciar Sesión</label></center>

         <div class="imgImpText">
         	<input type="text" name="usurio" id="usuario" placeholder="nombre usuario"></br></br>
	        <i class="icon-users"></i>
         </div>
	     
	     <div class="imgImpPass">
	     	<input type="password" name="contraseña" id="contraseña" placeholder="contraseña"></br></br>
	        <i class="icon-key"></i>
	     </div>
	     
	     <center><input type="button" id="iniciar-button" name="Iniciar" value="Iniciar Sesión"></center>

	     <label id="registro">Registrate si no tiene usuario <a href="pagina2.php">Registrar</a></label>
     </form>    
</body>
</html>