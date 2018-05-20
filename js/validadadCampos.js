function validarPagina1(){

    if (document.getElementById('usuario').value=="") {
        alert("Debe digitar un usuario");
        return false;
    }
   if (document.getElementById('contraseña').value=="") {
        alert("Debe digitar una contraseña");
        return false;
      }  

}

function validarPagina2(){

    if (document.getElementById('nombre').value=="") {
        alert("Debe digitar un nombre");
        return false;
    }
   if (document.getElementById('apellido').value=="") {
        alert("Debe digitar un apellido");
        return false;
    }
   if (document.getElementById('usuario').value=="") {
        alert("Debe digitar un usuario");
        return false;
    }
   if (document.getElementById('contrasena').value=="") {
        alert("Debe digitar una contraseña");
        return false;
    }
   if (document.getElementById('pregunta').value=="") {
        alert("Seleciona una pregunta");
        return false;
    }
   if (document.getElementById('respuesta').value=="") {
        alert("Digite una Respuesta");
        return false;
    }

}

function validarPagina3(){

    if (document.getElementById('usuario').value=="") {
        alert("Debe digitar un usuario");
        return false;
    }
}

function PreguntaSeguridad(){

    if (document.getElementById('pregunta').value=="") {
        alert("Seleccione una pregunta");
        return false;
    }
   if (document.getElementById('respuesta').value=="") {
        alert("Digite una respuesta");
        return false;
    }  

}

function actualizarContra(){

    if (document.getElementById('usuario').value=="") {
        alert("Debe digitar un usuario");
        return false;
    }
   if (document.getElementById('contrasena').value=="") {
        alert("Debe digitar una contraseña");
        return false;
    } 
   if (document.getElementById('confiContra').value=="") {
        alert("Debe digitar una contraseña");
        return false;
    }   

}