<?php
// register.php
include "bdd/con_bd.php"; 

if (
    $_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['nombre'], $_POST['apellido'], $_POST['correoRegistro'] , $_POST['usuario'],  $_POST['claveRegistro'], $_POST['rolRegistro'])
) {
    $nombre    = trim($_POST['nombre']);
    $apellido  = trim($_POST['apellido']);
    $correo    = trim($_POST['correoRegistro']);
    $usuario   = trim($_POST['usuario']);
    $clave     = trim($_POST['claveRegistro']);
    $rol =       trim($_POST['rolRegistro']); 
    $fecha     = date("Y-m-d");

    if (
        strlen($nombre) > 1 &&
        strlen($apellido) > 1 &&
        filter_var($correo, FILTER_VALIDATE_EMAIL) &&
        strlen($usuario) > 1 &&
        strlen($clave) >= 3 &&
        strlen($rol) > 1
    ) {
        // Guarda la clave en texto plano para mantenerlo simple
        $consulta = "
            INSERT INTO usuarios (nombre, apellido, email, usuario, password_hash, creado_en, rol)
            VALUES (
                '" . mysqli_real_escape_string($conex, $nombre) . "',
                '" . mysqli_real_escape_string($conex, $apellido) . "',
                '" . mysqli_real_escape_string($conex, $correo) . "',
                '" . mysqli_real_escape_string($conex, $usuario) . "',
                '" . mysqli_real_escape_string($conex, $clave) . "',
                '$fecha',
                '" . mysqli_real_escape_string($conex, $rol) . "'
            )
        ";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            echo '<div class="alert alert-success text-center">
                    Registro exitoso 
                  </div>';
        } else {
            echo '<div class="alert alert-danger text-center">
                    Error al registrar
                  </div>';
        }
    } else {
        // Dispara el modal
                    echo <<<JS
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('errorModalR'));
                myModal.show();
            });
            </script>
            JS;
    }
}
?>
