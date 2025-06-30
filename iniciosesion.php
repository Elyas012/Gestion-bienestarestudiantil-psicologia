<?php
    session_start();  // Inicia la sesión para manejar el login
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
      <a href="registrar.php" class="btn btn-warning btn-lg">Registrarse</a>
      <a href="index.html" class="btn btn-secondary btn-lg me-2">Volver al inicio</a>
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
    <!-- Inicio de sesión -->
  <div class="col-12 col-md-6 px-5 mx-auto">
    <div class="card login-card p-2" id="loginCard">
      <h2 class="text-center mb-2">Inicio de sesión</h2>
      <form method="post">
        <div class="mb-3">
          <label for="usuario" class="form-label">Usuario</label>
          <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ingresa tu usuario">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" name="password"  id="password" class="form-control" placeholder="Ingresa tu contraseña">
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input type="checkbox" id="remember" class="form-check-input">
            <label for="remember" class="form-check-label">Recuérdame</label>
          </div>
          <a href="registrar.php" class="small">Crear cuenta</a>
        </div>
        <button type="submit" class="btn btn-secondary w-100 mb-2">Ingresar</button>
        <div class="text-center">
          <a href="#" class="small">Olvidé mi contraseña</a>
        </div>
      </form>
      <!-- <footer class="text-center mt-3">
        <em>DISEÑO: JÁCOME ELÍAS</em>
      </footer> -->
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

  <!-- Modal de error -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-danger">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="errorModalLabel">Error de autenticación</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        Usuario o contraseña inválidos.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Conexion BDD php -->
  <?php
      include ("bdd/login.php");
  ?>
 
</body>
</html>
