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
			<input type="text" name="user" id="usuario" placeholder="Ingresar Usuario.."></br>
		    <i class="icon-user-check"></i>
		</div>
		
		<div class="imgContrasena">
			<input type="password" name="contra" id="contrasena" placeholder="ingresar Contraseña.."></br>
            <i class="icon-key2"></i>
		</div>
        
        <div class="imgPregunta">
        	<!--<input type="text" name="preg" id="pregunta" placeholder="Pregunta Secreta.."></br>-->
        	<select name="preg" id="pregunta">
    		   <option value="">Selecionar Preguntas</option>
    		   <option value="¿Nombre de tu libro favorito?">¿Nombre de tu libro favorito?</option>
    		   <option value="¿Cual es tu cancion favorita?">¿Cual es tu cancion favorita?</option>
    		   <option value="¿Nombre de tu mejor amigo?">¿Nombre de tu mejor amigo?</option>
    		   <option value="¿Cual es tu hubie?">¿Cual es tu hubie?</option>
    		   <option value="¿Cual es tu escritor favorito?">¿Cual es tu escritor favorito?</option>
    		   <option value="¿Cual era tu apodo de pequeno(a)?">¿Cual era tu apodo de pequeno(a)?</option>
    		   <option value="¿En que lugar de naciste?">¿En que lugar de naciste?</option>
    		   <option value="¿Cual es tu equipo de beisbol favorito?">¿Cual es tu equipo de beisbol favorito?</option>
    		   <option value="¿Nombre de tu primera mascota?">¿Nombre de tu primera mascota?</option>
    		   <option value="¿Cual es tu color favorito?">¿Cual es tu color favorito?</option>
        	</select></br>
            <i class="icon-question"></i>
        </div>
        
        <div class="imgRespuesta">
        	<input type="text" name="resp" id="respuesta" placeholder="Respuesta Secreta.."></br>
            <i class="icon-checkmark"></i>
        </div>
        
        <center><input type="submit" id="registrar-button" name="Registrar" value="Registrar"></center>

	</form>

</body>
</html>