<?php

// Funcion de logout

function logout()
{
    session_destroy();
    header("Location: pagina.php");
}

?>