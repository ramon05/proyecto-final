<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>Usuario</title>.
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/validadadCampos.js"></script>
</head> 
<body>
     <form  action="LoginDB.php" method="post" onsubmit="return validarPagina1()">
         <center><img src="img/user.png" id="img"></center>
         <center><label id="iniciar">Iniciar Sesión</label></center>

         <div class="imgImpText">
         	<input type="text" name="login" id="usuario" placeholder="nombre usuario"></br></br>
	        <i class="icon-users"></i>
         </div>
	 
	     <div class="imgImpPass">
	     	<input type="password" name="password" id="contraseña" placeholder="contraseña"></br></br>
	        <i class="icon-key"></i>
	     </div>
	     
	     <center><input type="submit" id="iniciar-button" name="Iniciar" value="Iniciar Sesión"></center>

     <label id="registro">Registrate si no tiene usuario <a href="pagina2.php">Registrar</a></label></br>
     <label id="registro">Recuperar Contraseña <a href="pagina3.php">Recuperar</a></label>
</body>
</html>