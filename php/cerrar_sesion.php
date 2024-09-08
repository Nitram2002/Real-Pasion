<?php
    session_start(); // Inicia la sesión
    session_destroy(); // Destruye la sesión actual
    header("Location: ../index.php"); // Redirige al usuario a la página principal después de cerrar sesión
    exit();
?>