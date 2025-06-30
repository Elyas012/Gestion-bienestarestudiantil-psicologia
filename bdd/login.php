<?php
// login.php
if (
    $_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['usuario'], $_POST['password']) &&
    empty($_POST['nombre'])
) {
    include "bdd/con_bd.php"; 

    $u = mysqli_real_escape_string($conex, $_POST['usuario']);
    $p = mysqli_real_escape_string($conex, $_POST['password']);

    $sql = "SELECT id, rol 
              FROM usuarios 
             WHERE usuario = '$u' 
               AND password_hash = '$p' 
             LIMIT 1";
    $res = mysqli_query($conex, $sql);

    if ($res && mysqli_num_rows($res) === 1) {
        $row = mysqli_fetch_assoc($res);
        $rol = $row['rol'];
        if ($rol === 'administrador') {
            echo '<script>window.location.href="menu_admin.html";</script>';
        } else {
            echo '<script>window.location.href="menu_estudiante.html";</script>';
        }
        exit;
    } else {
        // Dispara el modal
                    echo <<<JS
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('errorModal'));
                myModal.show();
            });
            </script>
            JS;
                }
    }
?>
