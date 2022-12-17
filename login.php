<?php
// Funcion de login

function login($usuario, $contrasena)
{
    $psw = fopen("psw.dat", "r");
    $psw = fread($psw, filesize("psw.dat"));
    $psw = explode(" ", $psw);
    $psw = array_diff($psw, array($usuario, $contrasena));
    $psw = implode(" ", $psw);
    $psw = fopen("psw.dat", "w");
    fwrite($psw, $psw);
    fclose($psw);
}

?>

   // Form para iniciar sesión

   <form>
   <fieldset>
       <input type="text" name="usuario" placeholder="Usuario">
       <input type="password" name="password" placeholder="Contraseña">
       <input class="btn btn-dark" type="submit" value="Iniciar sesión" onclick="login()">
   </fieldset>
</form>

