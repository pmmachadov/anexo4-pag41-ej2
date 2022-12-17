<?php
// Funcion de registro. Cuando un usuario se registra, se añade su nombre de usuario y contraseña al archivo psw.dat
function registro($usuario, $contrasena)
{
    $psw = fopen("psw.dat", "a");
    fwrite($psw, $usuario . " " . $contrasena . " ");
    fclose($psw);
}
?>

// Form para registrarse

<form>
    <fieldset>
        <input type="text" name="usuario" placeholder="Usuario">
        <input type="password" name="password" placeholder="Contraseña">
        <input class="btn btn-dark" type="submit" value="Registrarse" onclick="registro()">
    </fieldset>
</form>