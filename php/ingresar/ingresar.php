<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../../css/registro/ingresa.css">
  </head>
  <body>

    <div class="login-box">
      <img src="../../img/logoRegistro.png" class="avatar" alt="Avatar Image">
      <h1>Iniciar Cesion</h1>
      <form action="../conexion/ingresar_cuenta.php" method="POST"> 
        <label for="username">Correo Electronico</label>
        <input type="text" name="usuario" placeholder="Correo Electronico" required="">   
        <label for="password">Contraseña</label>
        <input type="password" name="contra" placeholder="Contraseña"> 
        <input type="submit" value="LOGIN">
        <a href="../crearCuenta/registrarse.php">¿No tienes cuenta?</a>
        <div id="social-login-container"></div>
        <script type="text/javascript">
          var oneall = _oneall || []; 
          oneall.push(
          ['social_login', 'set_providers', ['facebook']],
          ['social_login', 'set_callback_uri', window.location.href],
          ['social_login', 'set_custom_css_uri', 'https://secure.oneallcdn.com/css/api/themes/flat_w188_h32_wc_v1.css'],
          ['social_login', 'do_render_ui', 'social-login-container']
          );
        </script>
      </form>
    </div> 
    <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <span class="copyright">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Estudiantes de Ing. de Sistemas de la Universidad Mayor de San Simon.
          </span>
        </div>
      </div>
    </div>
    </footer>
  </div>
  </body>
</html>
