<?php
    include 'conexion_be.php';
    
    $usuario_email = $_POST['usuario/email'];
    $contrasena    = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usaurios WHERE usuario or email = '$usuario_email' and contrasena = $contrasena");

    if (mysqli_num_rows($validar_login) > 0) {
        echo '
            <script>
                alert "Has iniciado sesion correctamente";
                window.history.back();
            </script>
        ';
    } else {
        echo '
            <script>
                alert "Usuario y Contraseña incorrecta, o usuario inexistente.";
                window.history.back();
            </script>
        ';
    }

?>