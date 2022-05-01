<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    //Borrar variables de sesión
    session_unset();

    //Destruir variables de sesión
    session_destroy();
?>