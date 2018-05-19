<!DOCTYPE html>
<html lang="es">
<head>
	<title>Acerca De</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/pagina_genearal.css">
</head>
<body background="img/denim.jpg">
    <?php 
     
	      session_start();

		  if (!isset($_SESSION["usuario"])) {

		   	   	header("Location:Pagina1.php");
		  }
	?>
	<div class="listma">
		<nav class="menu">
			<div class="logo">LOGO</div>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="AcercaDe.php">About</a></li>
					<li><a href="contactos.php">Contact</a></li>
					<li><a href="CerrarSeccion.php">Cerrar Sección</a></li>
				</ul>
			
		</nav>
	</div>

    <div id="paginaContacto">
    	<h1>ACERCA DE</h1>
    	<div id="foto">
    		<img src="img/ramon2.jpg">
    	</div>
    	
        <div id="list">
            <h2>Breve Biografía</h2>
            <p>                
              Ramón Agustín Castillo Verás nació el 5 de mayo del 1991 en cotuí, Republica Dominicana, es el hijo menor de cuatro hermanos, le gusta el anime,los videos juegos, la programación, la pesca, la música y vacacionar en diferentes lugares del país
            </p>
        </div>
    </div>
    <div id="capa3">
        <table align="center" border="1">
            <tr>
                <th align="center" bgcolor="#C0C0C0"><font face="Arial">Asignaturas del Semestre Actual</font></th>
            </tr>
            <tr>
                <ul>
                    <td>
                    <li>Base de Datos I - INF 4200</li>
                    <li>Teoría De Los Compiladores - INF 4220</li>
                    <li>Redes De Proc De Datos - INF 4260</li>
                    <li>Lenguaje de Programación III - INF 5160</li>
                    <li>Lab Lenguaje de Program III - INF 5170</li>
                    <li>Pagina Uasd : <a href="http://uasd.edu.do/index.php">www.uasd.edu.do</a></li>
                    </td>
                </ul>
            </tr>
        </table>
    </div>
    <div id="capa4">
        <h2>Anime Que veo Actualmente</h2>
        <img src="img/animeposter.jpeg">
        <h3>BOKU NO HERO ACADEMIA</h3>
        <p>
            Las personas no nacen igual. El protagonista de esta historia es uno de esos casos raros que nacen sin superpoderes, pero esto no le impedirá perseguir su sueño: ser un gran héroe como el legendario All-Might. Para convertirse en el héroe que quiere ser, se apuntará a una de las academias de héroes más prestigiosas del país: Yueiko. Con la ayuda de su ídolo, All-Might, ¿podrá convertirse en un verdadero héroe?
        </p>
    </div>
    <div id="capa5">
        <table align="center" border="1">
            <tr>
            <th align="center" bgcolor="#C0C0C0"><font face="Arial">Artistas Favorito</font></th>
            </tr>
            <tr>
                <ul>
                    <td>
                    <li>Rihanna</li>
                    <li>david guetta</li>
                    <li>shawn mendes</li>
                    <li>Charlie Puth</li>
                    <li>linkin park</li>
                    <li>Antony Santos</li>
                    <li>Prince Royce</li>
                    </td>
                </ul>
            </tr>
        </table>
    </div>

</body>
</html>