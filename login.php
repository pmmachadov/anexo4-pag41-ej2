<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
// require con varios archivos
require_once("funlib.php");

?>

    // Form para iniciar sesión

    <form>
        <fieldset>
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="password" placeholder="Contraseña">
            <input class="btn btn-dark" type="submit" value="Iniciar sesión" onclick="login()">
        </fieldset>
    </form>



    // Form para registrarse

    <form>
        <fieldset>
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="password" placeholder="Contraseña">
            <input class="btn btn-dark" type="submit" value="Registrarse" onclick="registro()">
        </fieldset>
    </form>

    // Area para ver mensajes

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mensajes del foro</h5>
                    <p class="card-text">Mensajes</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>