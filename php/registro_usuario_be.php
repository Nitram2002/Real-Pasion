<?php
    include 'conexion_be.php';

    $nombre     = $_POST['nombre'];
    $apellido   = $_POST['apellido'];
    $usuario    = $_POST['usuario'];
    $email      = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $contrasena_encriptada = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(usuario, email, contrasena, nombre, apellido)
              VALUES('$usuario', '$email', '$contrasena_encriptada', '$nombre', '$apellido')";

    /* verificar que el correo no se repita*/
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

    if (mysqli_num_rows($verificar_correo) > 0) {
        echo '
            <script>
                alert ("Este correo ya esta registrado, intenta con otro diferente");
                window.history.back();
            </script>
        ';
        exit();
    }

    /* verificar que el usuario no se repita*/
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo '
            <script>
                alert ("Este Usuario ya esta registrado, intenta con otro diferente");
                window.history.back();
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);          

    if ($ejecutar) {
        echo '
            <script>
                alert("Se ha registrado exitosamente");
                window.history.back();
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Hubo un error, Por favor intentalo nuevamente, si el error persiste comunicarse con soporte");
                window.history.back();
            </script>
        ';
    }

    mysqli_close($conexion);

?>