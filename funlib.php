<!-- Usa PHP y: Crea una aplicación web tipo FORO público donde cualquier persona puede acceder
y ver los mensajes escritos.
Sólo los usuarios registrados en el archivo psw.dat generado anteriormente pueden
publicar mensajes. Los mensajes deben almacenarse en un fichero foro.dat junto con
el nombre del usuario que lo escribió y la fecha en que lo envió. Todos los mensajes
publicados deben ser visibles -->

PSEUDO CODIGO --
<!-- 1. Crear un archivo foro.dat -->
<!-- 2. Crear un archivo psw.dat -->
<!-- 3. Crear un formulario. -->
<!-- 4. Crear un archivo letra.php, funlib.php y pagina.php. -->
<!-- 5. Crear una función que permita a los usuarios registrados en el archivo psw.dat:
    - publicar mensajes en el archivo foro.dat.
    - borrar sus mensajes en el archivo foro.dat.
    - editar sus mensajes en el archivo foro.dat.
    - ver los mensajes de otros usuarios en el archivo foro.dat.
    - cerrar sesión.
    - iniciar sesión.
    - registrarse. -->

<?php

// Funcion de login. Una vez que me logueo, me dirige a la pagina.php

function login($usuario, $contrasena)
{
    $psw = fopen("psw.dat", "r");
    $psw = fread($psw, filesize("psw.dat"));
    $psw = explode(" ", $psw);
    if (in_array($usuario, $psw) && in_array($contrasena, $psw)) {
        $_SESSION["usuario"] = $usuario;
        header("Location: pagina.php");
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}


// Funcion de registro. Cuando un usuario se registra, se añade su nombre de usuario y contraseña al archivo psw.dat. Una vez que se registra, se le redirige a la pagina.php

function registro($usuario, $contrasena)
{
    $psw = fopen("psw.dat", "a");
    fwrite($psw, $usuario . " " . $contrasena . " ");
    fclose($psw);
    $_SESSION["usuario"] = $usuario;
    header("Location: pagina.php");
}


// Funcion de publicar mensaje. Se debe registrar fecha, hora y usuario que publica el mensaje.

function publicar($mensaje)
{
    $foro = fopen("foro.dat", "a");
    fwrite($foro, $mensaje . " " . date("d/m/Y") . " " . date("H:i:s") . " " . $_SESSION["usuario"] . " ");
    fclose($foro);
}

// Funcion de borrar mensaje

function borrar($mensaje)
{
    $foro = fopen("foro.dat", "r");
    $foro = fread($foro, filesize("foro.dat"));
    $foro = explode(" ", $foro);
    $foro = array_diff($foro, array($mensaje));
    $foro = implode(" ", $foro);
    $foro = fopen("foro.dat", "w");
    fwrite($foro, $foro);
    fclose($foro);
}

// Funcion de editar mensaje

function editar($mensaje, $nuevo_mensaje)
{
    $foro = fopen("foro.dat", "r");
    $foro = fread($foro, filesize("foro.dat"));
    $foro = explode(" ", $foro);
    $foro = array_diff($foro, array($mensaje));
    $foro = implode(" ", $foro);
    $foro = fopen("foro.dat", "w");
    fwrite($foro, $foro);
    fclose($foro);
    $foro = fopen("foro.dat", "a");
    fwrite($foro, $nuevo_mensaje . " ");
    fclose($foro);
}

// Funcion de ver mensajes

function ver()
{
    $foro = fopen("foro.dat", "r");
    $foro = fread($foro, filesize("foro.dat"));
    $foro = explode(" ", $foro);
    $foro = array_diff($foro, array(""));
    $foro = implode(" ", $foro);
    $foro = fopen("foro.dat", "w");
    fwrite($foro, $foro);
    fclose($foro);
}

?>
