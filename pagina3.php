<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>Usuario</title>.
	<link rel="stylesheet" type="text/css" href="CSS/pagina3.css">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
    <script type="text/javascript" src="js/validadadCampos.js"></script>
</head>
<body>
     <form action="Mantenimiento_Recuperar_Contraseña.php" method="post" 
     onsubmit="return validarPagina3()">
         <center><img src="img/favicon.ico" id="imgRecuperar"></center>
         <center><label id="lbl-recuperar">Recuperar Contraseña</label></center>

         <div class="imgUsuarioRecup">
         	<input type="text" name="usurio" id="usuario" placeholder="nombre usuario"></br></br>
	        <i class="icon-user"></i>
         </div>

	     <center><input type="submit" id="btnRecuperar" name="Iniciar" value="Iniciar Sesión"></center>

	     <label id="volver">Regresa al usuario <a href="pagina1.php">Volver al Usuario</a></label>
     </form>    
</body>
</html>