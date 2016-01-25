#Ejercicio
Se trata de validar la parte del formulario en el servidor
usamos xajax en el servidor 
El formulario tiene los siguientes campos
nombre (mas de 3 caracteres)
password (mas de 5 caracteres)
confirmar password (debe de coincidir)
email (expresión regular '^[a-zA-Z0-9]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$'
#Funciones en php para validar

function validarNombre($nombre){

    if(strlen($nombre) < 4) return false;
    return true;
    
}

function validarEmail($email){

    return ereg('^[a-zA-Z0-9]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$', $email);
    
}

function validarPasswords($pass1, $pass2) {

    return $pass1 == $pass2 && strlen($pass1) > 5;
    
}


