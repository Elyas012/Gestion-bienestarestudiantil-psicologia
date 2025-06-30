<?php
    session_start();  
?>
<!-- iniciosesion.html -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PsicoBienestar - Inicio de sesión / Registro</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/logo-psicobienestar.png" type="image/x-icon">
</head>
<body>
  <!-- HEADER CON LOGOS -->
<header class="d-flex justify-content-between align-items-center px-4 py-2 header-colors">
  <div class="logo-uni">
    <img src="img/logo espe 100 años variaciones-06.png" alt="Universidad">
  </div>
  <div class="d-flex align-items-center gap-3">
    <div class="d-flex gap-2">
      <a href="iniciosesion.php" class="btn btn-warning btn-lg">Iniciar sesión</a>
      <a href="index.html" class="btn btn-secondary btn-lg">Volver al inicio</a>
    </div>
  </div>
</header>


  <!-- FRASE MOTIVADORA SUPERIOR -->
  <section class="py-1 text-center frase-colors" style="background-color: #e6f4ea;">
    <div class="frase-box">
      <p class="display-4 fw-bold text-success">“Tu bienestar es nuestra prioridad”</p>
    </div>
  </section>

  <!-- CONTENEDOR CENTRAL: FORMULARIOS -->
  <main class=" container-fluid d-flex justify-content-center align-items-center my-2">
    <div class=" logo-cen row align-items-center">
        <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
          <img src="img/logo-psicobienestar.png" alt="PsicoBienestar Logo" class="logo-pb mb-3">
          <p class="text-justify px-3">
            Inicia sesión o regístrate para acceder a nuestros servicios de bienestar psicológico.
          </p>
    </div>

    <!-- Registro -->
    <div class="card login-card p-4">
      <h2 class="text-center mb-4">Registrarse</h2>
      <form method="post">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Tu nombre">
        </div>
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Tu apellido">
        </div>
        <div class="mb-3">
          <label for="correoRegistro" class="form-label">Correo electrónico</label>
          <input type="email" name="correoRegistro" id="correoRegistro" class="form-control" placeholder="Ingresa tu correo">
        </div>
        <div class="mb-3">
          <label for="usuario" class="form-label">Usuario</label>
          <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Tu usuario">
        </div>
        <div class="mb-3">
          <label for="claveRegistro" class="form-label">Contraseña (Minimo 3 caracteres)</label>
          <input type="password" name="claveRegistro" id="claveRegistro" class="form-control" placeholder="Crea una contraseña">
        </div>
        <div class="mb-3">
          <label for="rolRegistro" class="form-label">Rol</label>
          <select name="rolRegistro" id="rolRegistro" class="form-select">
            <option value="" disabled selected>-- Escoge tu rol --</option>
            <option value="estudiante">Estudiante</option>
            <option value="administrador">Administrador</option>
          </select>
        </div>
        <div class="text-center mb-3">
          <button type="submit" class="btn btn-secondary">Crear Cuenta</button>
        </div>
        <p class="text-center">
          ¿Ya tienes una cuenta? <a href="iniciosesion.php" class="small">Iniciar sesión</a>
        </p>
      </form>
    </div>
  </div>
  </main>

  <!-- FRASE MOTIVADORA INFERIOR -->
  <section class="py-1 text-center frase-colors">
    <div class="container">
    <div class="logo-dev">
      <img src="img/DEVTEAM3.png" alt="DevTeam">
    </div>
    </div>
  </section>


  <!-- FOOTER GENERAL -->
  <footer class="py-4 text-center" style="background-color: #e6f4ea;">
    <div class="container">
      <p class="mb-1 text-dark">Contactos: 0987357111 | info@psicobienestar.com</p>
      <small class="text-muted">PsicoBienestar v1.0.0 © 2025 DevTeam</small>
    </div>
  </footer>

  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Modal de error registro -->
<div class="modal fade" id="errorModalR" tabindex="-1" aria-labelledby="errorModalLabelR" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-danger">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="errorModalLabel">Error de registro</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        Introduzca sus datos correctamente.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Conexion BDD php -->
  <?php
      include ("bdd/register.php");
  ?>
 
</body>
</html>
