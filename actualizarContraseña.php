<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>Cambiar Contraseña</title>.
	<link rel="stylesheet" type="text/css" href="CSS/pagina3.css">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
</head>
<body>
     <form action="actualizarContraseñaDB.php" method="post" id="formActualizar">
         <center><img src="img/favicon.ico" id="imgRecuperar"></center>
         <center><label id="lbl-recuperar">Cambiar Contraseña</label></center>

         <div class="imgUsuarioRecup">
         	<input type="text" name="usuario" id="usuario" placeholder="nombre usuario"></br></br>
	        <i class="icon-user"></i>
         </div>

         <div class="imgContrasenaNueva">
            <input type="password" name="contra" id="contrasena" placeholder="nueva Contraseña.."></br></br>
            <i class="icon-key2"></i>
        </div>

        <div class="imgContrasenaconfirm">
            <input type="password" name="confiContra" id="confiContra" placeholder="confirmal Contraseña.."></br></br>
            <i class="icon-key2"></i>
        </div>

	     <center><input type="submit" id="btnCambiar" name="Iniciar" value="Cambiar Contraseña"></center>
     </form>    
</body>
</html>