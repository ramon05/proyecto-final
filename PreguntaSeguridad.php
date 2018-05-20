
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
     <form action="PreguntaSeguridadDB.php" method="post" onsubmit="return PreguntaSeguridad()">
         <center><img src="img/favicon.ico" id="imgRecuperar"></center>
         <center><label id="lbl-recuperar">Pregunta de Seguridad</label></center>
         <div class="imgPregunta">
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
         	<input type="text" name="resp" id="respuesta" placeholder="Respuesta..."></br></br>
	        <i class="icon-checkmark"></i>
         </div>

	     <center><input type="submit" id="btnResponder" name="respoder" value="Responder"></center>

	     <label id="lbl-volverResp">Regresa al usuario <a href="pagina1.php">Volver al Usuario</a></label>
     </form>    
</body>
</html>