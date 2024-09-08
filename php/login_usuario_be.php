<?php
    session_start();
    include 'conexion_be.php';
    
    $usuario_email         = $_POST['usuario/email'];
    $contrasena            = $_POST['contrasena'];
    $contrasena_encriptada = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario_email' or email = '$usuario_email' and contrasena = '$contrasena_encriptada'");

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $usuario_email;
        echo '
            <script>
                alert ("Has iniciado sesion correctamente");
                window.history.back();
            </script>
        ';
        $_SESSION['usuario'] = $usuario;
    } else {
        echo '
            <script>
                alert ("Usuario y Contraseña incorrecta, o usuario inexistente.");
                window.history.back();
            </script>
        ';
    }

?>