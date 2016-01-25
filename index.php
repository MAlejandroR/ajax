<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Validación formulario con Xajax</title>
  <link rel="stylesheet" href="estilo.css" type="text/css" />

 
</head>

<body>
    <div id='form'>
    <!-- Cuando se vaya a enviar el formulario ejecutamos
           una función en JavaScript, que realiza la llamada a PHP -->
    <form id='datos' action="javascript:void(null);" onsubmit="enviarFormulario();">
    <fieldset >
        <legend>Introducción de datos</legend>
        <div class='campo'>
            <label for='nombre' >Nombre:</label><br />
            <input type='text' name='nombre' id='nombre' maxlength="50" /><br />
            <span id="errorNombre" class="error" for="nombre"></span>
        </div>
        <div class='campo'>
            <label for='password1' >Contraseña:</label><br />
            <input type='password' name='password1' id='password1' maxlength="50" />
            <span id="errorPassword" class="error" for="password"></span>
        </div>
        <div class='campo'>
            <label for='password2' >Repita la contraseña:</label><br />
            <input type='password' name='password2' id='password2' maxlength="50" />
        </div>
        <div class='campo'>
            <label for='email' >Email:</label><br />
            <input type='text' name='email' id='email' maxlength="50" />
            <span id="errorEmail" class="error" for="email"></span>
        </div>

        <div class='campo'>
            <input type='submit' id='enviar' name='enviar' value='Enviar' />
        </div>
    </fieldset>
    </form>
    </div>
</body>
</html>