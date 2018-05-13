<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrar</title>
	<link rel="stylesheet" type="text/css" href="CSS/pagina2.css">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
</head>
<body>

	<? echo $mensaje; ?>
	<form action="RegistroDB.php" method="post">
		<center><img src="img/user_add.png" id="imgRegistrar"></center>
        <center><label id="lbl-Registrar">Registrar</label></center>
		<div class="imgNombre">
			<input type="text" name="nomb" id="nombre" placeholder="Ingresar Nombre.."></br>
		    <i class="icon-users"></i>
		</div>
		
		<div class="imgApellido">
			<input type="text" name="apell" id="apellido" placeholder="Ingresar Apellido.."></br>
		    <i class="icon-user"></i>
		</div>
		
		<div class="imgUsuario">
			<input type="text" name="user" id="usuario" placeholder="Ingresar Usuario..">
		    <i class="icon-user-check"></i>
		</div>
		
		<div class="imgContrasena">
			<input type="password" name="contra" id="contrasena" placeholder="ingresar Contraseña..">
            <i class="icon-key2"></i>
		</div>
        
        <div class="imgPregunta">
        	<input type="text" name="preg" id="pregunta" placeholder="Pregunta Secreta..">
            <i class="icon-question"></i>
        </div>
        
        <div class="imgRespuesta">
        	<input type="text" name="resp" id="respuesta" placeholder="Respuesta Secreta..">
            <i class="icon-checkmark"></i>
        </div>
        
        <center><input type="submit" id="registrar-button" name="Registrar" value="Registrar"></center>

	</form>

</body>
</html>