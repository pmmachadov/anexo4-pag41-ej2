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
    // require con varios archivos
    require_once("funlib.php");
    require_once("logout.php");
    ?>





    // Form para publicar mensajes con textarea

    <form>
        <fieldset>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>
            <input class="btn btn-success" type="submit" value="Publicar" onclick="publicar()">
        </fieldset>
    </form>

    // Form para borrar mensajes

    <form>
        <fieldset>
            <input class="btn btn-danger" type="submit" value="Borrar mensaje" onclick="borrar()">
        </fieldset>
    </form>

    // Form para editar mensajes

    <form>
        <fieldset>
            <input class="btn btn-primary" type="submit" value="Editar mensaje" onclick="editar()">
        </fieldset>
    </form>


    // Form para ver los mensajes de otros usuarios

    <form>
        <fieldset>
            <input class="btn btn-warning" type="submit" value="Ver mensajes" onclick="ver()">
        </fieldset>
    </form>

    // Form para cerrar sesión

    <form>
        <fieldset>
            <input class="btn btn-danger" type="submit" value="Cerrar sesión" onclick="cerrar()">
        </fieldset>
    </form>

    // Area para ver mensajes

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Aqui se ven los mensajes de los usuarios.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>