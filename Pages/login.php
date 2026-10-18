<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zenith Shop - Acceso y Registro</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Oswald:wght@600;700&display=swap" rel="stylesheet">
  <!-- Hoja de estilos separada -->
  <link rel="stylesheet" href="../assets/css/auth.css">
</head>

<body>

  <!-- HEADER -->
  <header>
    <a href="tienda.php" class="brand-logo">Zenith Shop</a>
    <nav>
      <a href="tienda.php">Inicio</a>
      <a href="#">Productos</a>
      <a href="#">Contacto</a>
    </nav>
    <div class="header-icons">
      <a href="#" class="icon-link" title="Carrito de Compras">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="9" cy="21" r="1"></circle>
          <circle cx="20" cy="21" r="1"></circle>
          <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
        </svg>
        <span class="cart-badge">0</span>
      </a>
    </div>
  </header>

  <!-- CONTENEDOR PRINCIPAL -->
  <main>
    <div class="auth-wrapper">

      <!-- COLUMNA VISUAL IZQUIERDA -->
      <div class="visual-column">
        <div id="loginVisual" class="visual-content" style="position: absolute; inset: 0;">
          <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6N79NsHL90jKa5Lf9AIlpgS_Dk1aKdB7p5FMyqBTRUxZVGlixQoH8weh_mHBr74enPYf-lS6w2k01s1XkMeeDjp-VE5ys6p9d54YWOfYy409OSNvayPbGUTdH8gqcnHI1GySByuf6XKyczzBxetqevU3Ahsuy9s7zwziwVbkxZitRKTe15InlScsFEgXb_2MKNElCwBa1LUlmd_5zAeo9ZnzCO3r0luvR0S7o5EKhOf71mkyeTVBCzg" alt="Moda femenina Zenith Shop" class="visual-img">
          <div class="visual-overlay"></div>
          <div class="visual-caption">
            <span class="visual-badge">Edición Limitada</span>
            <h3 class="visual-title">Nueva Colección</h3>
            <p class="visual-desc">Prendas con corte refinado y tejidos premium diseñadas para perdurar en tu armario.</p>
          </div>
        </div>

        <div id="registerVisual" class="visual-content" style="position: absolute; inset: 0; display: none;">
          <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCyW6ZWV_bUuxy3Fj7dpgIwi2Pp9wGxIaezHpM73dJgOSRTP_6n-zTqXrcRV-5wceDWSAmkuKa456eHazJpru4xe1Iu1wpICIVEo53n5xirxh491FymjcdWEEGGToS5Wc9Q6MrDZSu56L4gildn9YNryIWadmLt3dG-brkHkT4nltqyNfBsXM2krAwsX_0V6QcbKu9kI6QXO49Tw6JUd2o435GhrptJpRbs5BOu3desmvoZ6gk5l4xUkA" alt="Boutique Zenith Shop" class="visual-img">
          <div class="visual-overlay"></div>
          <div class="visual-caption">
            <span class="visual-badge">Comunidad Zenith Shop</span>
            <h3 class="visual-title">Únete a la Marca</h3>
            <p class="visual-desc">Regístrate para guardar tu carrito, consultar pedidos y recibir lanzamientos exclusivos.</p>
          </div>
        </div>
      </div>

      <!-- COLUMNA DE FORMULARIOS DERECHA -->
      <div class="form-column">

        <div class="auth-tabs">
          <button id="tabBtnLogin" class="auth-tab-btn active" onclick="showAuthMode('login')">Iniciar Sesión</button>
          <button id="tabBtnRegister" class="auth-tab-btn" onclick="showAuthMode('register')">Crear Cuenta</button>
        </div>

        <!-- VISTA DE LOGIN -->
        <div id="loginFormView" class="auth-view active-view">
          <div class="form-heading">
            <h2>Bienvenido de Vuelta</h2>
            <p>Ingresa tus datos para acceder a tu cuenta personal.</p>
          </div>

          <form action="../api/login.php" method="POST">
            <div class="form-group">
              <label for="loginEmail">Correo Electrónico</label>
              <input type="email" id="loginEmail" name="email" class="input-control" placeholder="ejemplo@correo.com" required>
            </div>

            <div class="form-group">
              <label for="loginPassword">Contraseña</label>
              <input type="password" id="loginPassword" name="password" class="input-control" placeholder="******" required>
            </div>


            <button type="submit" class="btn-submit">Ingresar</button>

            <div class="auth-footer-prompt">
              ¿Aún no tienes cuenta? <a onclick="showAuthMode('register')">Regístrate gratis</a>
            </div>
          </form>
        </div>

        <!-- VISTA DE REGISTRO -->
        <div id="registerFormView" class="auth-view">
          <div class="form-heading">
            <h2>Crear Cuenta</h2>
            <p>Completa tus datos para realizar tus compras de forma ágil.</p>
          </div>

          <form action="../api/registro.php" method="POST">
            <div class="input-row">
              <div class="form-group">
                <label for="regName">Nombre</label>
                <input type="text" id="regName" name="nombre" class="input-control" placeholder="Tu nombre" required>
              </div>
              <div class="form-group">
                <label for="regLastName">Apellidos</label>
                <input type="text" id="regLastName" name="apellidos" class="input-control" placeholder="Tus apellidos" required>
              </div>
            </div>

            <div class="input-row">
              <div class="form-group">
                <label for="regCedula">Cédula</label>
                <input type="text" id="regCedula" name="cedula" class="input-control" placeholder="Número de cédula" required>
              </div>
              <div class="form-group">
                <label for="regEmail">Correo Electrónico</label>
                <input type="email" id="regEmail" name="email" class="input-control" placeholder="tu@correo.com" required>
              </div>
            </div>

            <div class="form-group">
              <label for="regPassword">Contraseña</label>
              <input type="password" id="regPassword" name="password" class="input-control" placeholder="****************" required>
            </div>

            <div class="form-extra">
              <label class="checkbox-label">
                <input type="checkbox" required>
                Acepto los términos y condiciones de compra
              </label>
            </div>

            <button type="submit" class="btn-submit">Crear Cuenta</button>

            <div class="auth-footer-prompt">
              ¿Ya eres miembro? <a onclick="showAuthMode('login')">Inicia sesión</a>
            </div>
          </form>
        </div>
  </main>

  <!-- FOOTER -->
  <footer>
    <div>&copy; 2026 Zenith Shop Clothing Co. Todos los derechos reservados.</div>
    <div>
      <a href="#">Privacidad</a>
      <a href="#">Términos del Servicio</a>
      <a href="#">Ayuda y Envíos</a>
    </div>
  </footer>

  <!-- Script JavaScript-->
  <script src="../assets/js/auth.js"></script>
</body>

</html>